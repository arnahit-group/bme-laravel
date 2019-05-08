<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceProperty;
use App\ServiceType;
use DB;
use Illuminate\Http\Request;
use Morilog\Jalali\jDateTime;
use stdClass;

class ServiceController extends Controller
{

    public static function getServiceProperties($service_id)
    {

//        echo 'data_id:' . $data_id;
//        echo "<br>";

        $base_locale = DataController::getPropertyValue('website', 'base_locale');

        $use_translates = $base_locale != app()->getLocale() ? true : false;

        $ds = DB::table('service_assigned_properties')
            ->where('service_assigned_properties.service', '=', $service_id)
            ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
            ->select(
                'service_assigned_properties.id',
                'service_properties.title',
                'service_assigned_properties.value',
                'service_properties.id as did',
                'service_properties.input_type as input_type',
                'service_properties.level as level'
            )
            ->get();

//        echo $ds;

        $props = [];

        foreach ($ds as $d) {


//            echo $d->id;
//            echo "<br>";

            $cds = new stdClass();
            if ($use_translates == true) {
                $t = TranslationController::getTranslatedForCell(app()->getLocale(), 'service_assigned_properties', 'value', $d->id);
                $cds->title = $t != null ? $t : $d->value;
                $l = TranslationController::getTranslatedForCell(app()->getLocale(), 'service_properties', 'title', $d->did);
                if (!is_null($l))
                    $cds->locale_text = $l;

            } else {
//                $cds->{$d->title} = $d->value;

                if ($d->input_type == 'multi-text') {


                    $vs = DB::table('service_assigned_property_values')
                        ->where('assigned_property', '=', $d->id)
                        ->select('service_assigned_property_values.value')
                        ->get();
                    $vvs = [];
                    foreach ($vs as $v) {
                        $vvs[] = $v->value;
                    }
                    $cds->title = $vvs;


                } elseif ($d->input_type == 'multi-relation-document-images') {


                    $vs = DB::table('relation_objects')
                        ->where('object_type', '=', config('base.object_types.service_assigned_property'))
                        ->where('object_id', '=', $d->id)
                        ->select('relation_objects.relation')
                        ->get();


                    $std = [];

                    foreach ($vs as $v) {
//                        echo $v->relation;
//                        echo "<br>";

                        $rs = DB::table('relation_objects')
                            ->join('document_assigned_properties', 'document_assigned_properties.document', '=', 'relation_objects.object_id')
                            ->where('relation', '=', $v->relation)
                            ->where('object_type', '=', config('base.object_types.document'))
                            ->where('property', '=', 4)
                            ->select('object_id', 'document_assigned_properties.value as path')
                            ->get();

//                        echo $rs[0]->path;
                        if (count($rs) > 0)
                            $std[] = $rs[0]->path;
//                        echo "<br>";


                    }

//                    print_r($std);
                    $cds->slides = $std;
//                    $cds->slides = $std;

//                    $vvs = [];
//                    foreach ($vs as $v) {
//                        $vvs[] = $v->value;
//                    }
//                    $cds->title = $vvs;
                } elseif ($d->input_type == 'single-relation-price') {

                    $vs = DB::table('relation_objects')
                        ->where('object_type', '=', config('base.object_types.service_assigned_property'))
                        ->where('object_id', '=', $d->id)
                        ->select('relation_objects.relation')
                        ->get();


                    $std = [];

//                    echo $vs[0]->relation;
//                    echo "<br>";


                    foreach ($vs as $v) {

                        $rs = DB::table('relation_assigned_properties')
                            ->join('relation_properties', 'relation_assigned_properties.property', '=', 'relation_properties.id')
                            ->where('relation', '=', $v->relation)
                            ->select('relation_properties.title', 'relation_assigned_properties.property', 'relation_assigned_properties.value')
                            ->get();

                        if (count($rs) > 0)
                            $std[] = $rs[0]->value;

                    }

                    $cds->prices = $std;


                } else {
                    $cds->title = $d->value;
                }


            }
            $cds->input_type = $d->input_type;
            $cds->level = $d->level;

            $props[$d->title] = $cds;

        }


        return $props;
    }

    public static function saveProperties(Request $request, $service_type, $user_id)
    {

        $bt_id = ServiceType::where('title', '=', $service_type)->first();
//        return $bt_id->id;
        $properties = ServiceProperty::where('service_type', '=', $bt_id->id)->get();
        $keys = $request->keys();
        $to_add_arrs = [];

        foreach ($properties as $property) {
            $to_add_arr = [];

            if (array_search($property->title, $keys) !== false) {
                $k_t = $keys[array_search($property->title, $keys)];
                $value = $request->input($k_t);

                $to_add_arr = [
                    'property' => $property->id,
                    'value' => ($value == null ? '' : $value),
                    'service' => $user_id,
                ];
                $to_add_arrs[] = $to_add_arr;

            } else {

                if ($property->input_type == 'check') {
                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '0',
                        'service' => $user_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                } elseif ($property->input_type == 'text') {
                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '',
                        'service' => $user_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }
            }
        }

        DB::table('service_assigned_properties')->insert(
            $to_add_arrs
        );

    }


    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @param null $service_type
     * @param null $property
     * @param null $value
     * @return \Illuminate\Http\Response
     */

    public static function count($service_type = null, $property = null, $value = null)
    {
        if ($service_type == null) {
            $objects = Service::all();
            return count($objects);
        }

        $bt_id = ServiceType::where('title', '=', $service_type)->first();
        if ($property == null) {
            $objects = Service::where('service_type', '=', $bt_id->id)->get();
            return count($objects);
        } else {
            $objects = DB::table('services')
                ->join('service_assigned_properties', 'service_assigned_properties.service', '=', 'services.id')
                ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
                ->where('services.service_type', '=', $bt_id->id)
                ->where('service_properties.title', '=', $property)
                ->where('service_assigned_properties.value', '=', $value)
                ->get();

            return count($objects);
        }

        return 0;
    }


    public static function get($service_type = null, $property = null, $value = null)
    {

        $objects = [];


        if ($service_type == null) {
            $objects = Service::all();
        } else {

            $bt_id = ServiceType::where('title', '=', $service_type)->first();

            if ($property == null) {
                $objects = Service::where('service_type', '=', $bt_id->id)->get();
            } else {

                $objects = DB::table('services')
                    ->join('service_assigned_properties', 'service_assigned_properties.service', '=', 'services.id')
                    ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
                    ->where('services.service_type', '=', $bt_id->id)
                    ->where('service_properties.title', '=', $property)
                    ->where('service_assigned_properties.value', '=', $value)
                    ->get();
            }

        }

        for ($i = 0; $i < count($objects); $i++) {
            if ($property == null) {

                $ds = DB::table('service_assigned_properties')
                    ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
                    ->where('service_assigned_properties.service', '=', $objects[$i]->id)
                    ->select('service_properties.title', 'service_assigned_properties.value')
                    ->get();

            } else {

                $ds = DB::table('service_assigned_properties')
                    ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
                    ->where('service_assigned_properties.service', '=', $objects[$i]->id)
                    ->where('service_assigned_properties.value', '=', $value)
                    ->where('service_properties.title', '=', $property)
                    ->select('service_properties.title', 'service_assigned_properties.value')
                    ->get();

            }
            $cds = new stdClass();
            foreach ($ds as $d) {
                $cds->{$d->title} = $d->value;
            }
            $objects[$i]->properties = $cds;
        }

        return $objects;
    }


    public function index($service_type)
    {

        $data = BaseController::createBaseInformations();
        ServiceController::getBaseInforamation($data);

        $bt_id = ServiceType::where('title', '=', $service_type)->first();
        $data ['service_type'] = $service_type;
        $objects = Service::where('service_type', '=', $bt_id->id)->get();
        for ($i = 0; $i < count($objects); $i++) {
            $ds = DB::table('service_assigned_properties')
                ->where('service_assigned_properties.service', '=', $objects[$i]->id)
                ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
                ->select('service_properties.title', 'service_assigned_properties.value')
                ->get();
            $cds = new stdClass();
            foreach ($ds as $d) {
                $cds->{$d->title} = $d->value;
            }
            $objects[$i]->properties = $cds;
        }
//        return $objects;
        $data ['datas'] = $objects;
//        return $data;
        return view("service.index", $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $service_type)
    {

        $bt_id = ServiceType::where('title', '=', $service_type)->first();

        $data = new Service();
        $data->data_type = $bt_id->id;
        $data->save();
//        echo $data->id;

        $properties = ServiceProperty::where('service_type', '=', $bt_id->id)->get();

//        $inputs = $request->all();

        $keys = $request->keys();

//        return $keys;
        foreach ($keys as $key) {
            foreach ($properties as $property) {
                if ($property->title == $key) {
                    $pid = $property->id;
                    $value = $request->input($key);
                    $did = $data->id;
                    DB::table('service_assigned_properties')->insert(
                        [
                            'property' => $pid,
                            'value' => ($value == null ? '' : $value),
                            'data' => $did,
                        ]
                    );
                }
            }
        }

        $relation_id = DB::table('relations')
            ->insertGetId([
                'title' => 'insert ' . $service_type,
                'relation_type' => '1',
            ]);

        DB::table('relation_objects')->insert(
            [
                'object_type' => config("base.object_types.data"),
                'relation' => $relation_id,
                'object_id' => $data->id,
            ]
        );

        DB::table('relation_objects')->insert(
            [
                'object_type' => config("base.object_types.user"),
                'relation' => $relation_id,
                'object_id' => \Auth::id(),
            ]
        );

        return redirect()->route("data.index", ['service_type' => $service_type]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    public function getServiceInfo(Request $request)
    {
        $service_id = $request->input('service_id');
        $service = Service::find($service_id);
        $props = ServiceController::getServiceProperties($service_id);

        if (isset($props['date'])) {
            $date = $props['date']->title;
            $st = date("d-m-Y", $date / 1000);
            $props['gr_date'] = new stdClass();
            $props['gr_date']->title = $st;

            $gy = date("Y", $date / 1000);
            $gm = date("m", $date / 1000);
            $gd = date("d", $date / 1000);
            $ja = jDateTime::toJalali($gy, $gm, $gd);
            $props['ja_date'] = new stdClass();
            $props['ja_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";
        }


        if (isset($props['start_date'])) {
            $st_date = $props['start_date']->title;
            $st = date("d-m-Y", $st_date / 1000);
            $props['gr_start_date'] = new stdClass();
            $props['gr_start_date']->title = $st;

            $gy = date("Y", $st_date / 1000);
            $gm = date("m", $st_date / 1000);
            $gd = date("d", $st_date / 1000);
            $ja = jDateTime::toJalali($gy, $gm, $gd);
            $props['ja_start_date'] = new stdClass();
            $props['ja_start_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";
        }

        if (isset($props['end_date'])) {
            $en_date = $props['end_date']->title;
            $props['gr_end_date'] = new stdClass();
            $props['gr_end_date']->title = date("d-m-Y", $en_date / 1000);

            $gy = date("Y", $en_date / 1000);
            $gm = date("m", $en_date / 1000);
            $gd = date("d", $en_date / 1000);
            $ja = jDateTime::toJalali($gy, $gm, $gd);
            $props['ja_end_date'] = new stdClass();
            $props['ja_end_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";
        }

        if (isset($props['confirmation_date'])) {
            $cn_date = $props['confirmation_date']->title;
            $props['gr_confirmation_date'] = new stdClass();
            $props['gr_confirmation_date']->title = date("d-m-Y", $cn_date / 1000);

            $gy = date("Y", $cn_date / 1000);
            $gm = date("m", $cn_date / 1000);
            $gd = date("d", $cn_date / 1000);
            $ja = jDateTime::toJalali($gy, $gm, $gd);
            $props['ja_confirmation_date'] = new stdClass();
            $props['ja_confirmation_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";

        }


        $service->properties = $props;


        $rels = DB::table('relation_objects')
            ->where('object_type', '=', config('base.object_types.service'))
            ->where('object_id', '=', $service_id)
            ->get(['relation']);

        $rel_id = 0;
        if (count($rels) > 0)
            $rel_id = $rels[0]->relation;

        if ($rel_id > 0) {

            $rel2s = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.document'))
                ->where('relation', '=', $rel_id)
                ->get(['object_id']);

            if (count($rel2s) > 0) {

                $d_id = $rel2s[0]->object_id;
                $dprps = DB::table('document_assigned_properties')
                    ->join('document_properties', 'document_assigned_properties.property', '=', 'document_properties.id')
                    ->where('document', '=', $d_id)
                    ->get(['document_properties.title', 'document_assigned_properties.value']);


                $std = new stdClass();
                foreach ($dprps as $dprp) {
                    $std->{$dprp->title} = $dprp->value;
                }

                $service->check_path = $std->path;
            }
        }

//        $data = ServiceController::getServiceProperties($service_id);
//        return response()->json(['error' => 1, 'message' => count($data)]);
        return response()->json(['error' => 1, 'message' => $service]);
//        return response()->json(['error' => 1, 'message' => $service->properties['start_date']->title]);
        //
    }


    public function changeSituation(Request $request)
    {


//        $situation = $request->input('situation');
        $service_id = $request->input('service_id');
        $property = '';
        if ($request->input('property') != null)
            $property = $request->input('property');

        $value = '';
        if ($request->input('value') != null)
            $value = $request->input('value');

        $b = self::changePropertyValue($service_id, $property, $value);
        if ($b == true) {
            return response()->json(['error' => 0, 'message' => 'success']);
        } else {
            return response()->json(['error' => 1, 'message' => 'failed']);
        }

    }

    public static function changePropertyValue($service_id, $property, $value)
    {

        if ($property == '' || $value == '')
            return false;

        $service = Service::find($service_id);
        $properties = ServiceProperty::where('service_type', '=', $service->service_type)
            ->where('title', '=', $property)
            ->get();

        $s_id = 0;
        if (count($properties) == 0) {
            return false;
        } else {
            $s_id = $properties[0]->id;
        }

        if ($s_id != 0) {

            DB::table('service_assigned_properties')
                ->where('property', '=', $s_id)
                ->where('service', '=', $service_id)
                ->update(
                    [
                        'value' => $value
                    ]
                );

            return true;
        }

        return false;
    }


    public function refresh(Request $request)
    {
        $service_type = $request->input('service_type');
        $data = self::getServices($service_type);

//        $bt_id = ServiceType::where('title', '=', $service_type)->first();
//        $objects = Service::where('service_type', '=', $bt_id->id)->get();
//        $waiting_reserves = [];
//        $all_reserves = [];
//        $verified_reserves = [];
//        for ($i = 0; $i < count($objects); $i++) {
//            $objects[$i]->properties = ServiceController::getServiceProperties($objects[$i]->id);
//            $all_reserves [] = $objects[$i];
//            if (isset($objects[$i]->properties['situation']) && ($objects[$i]->properties['situation']->title == 1 || $objects[$i]->properties['situation']->title == 3)) {
//                $waiting_reserves[] = $objects[$i];
//            } else {
//                $verified_reserves[] = $objects[$i];
//            }
//        }
//
//        $data['verified_reserves'] = $verified_reserves;
//        $data['waiting_reserves'] = $waiting_reserves;
//        $data['all_reserves'] = $all_reserves;
//
//        $services = ServiceController::get('reserve', 'active', 0);

        return response()->json(["error" => 0, 'message' => $data]);
    }


    public static function getServices($service_type)
    {

        $bt_id = ServiceType::where('title', '=', $service_type)->first();
        $objects = Service::where('service_type', '=', $bt_id->id)->get();
        $waiting_reserves = [];
        $all_reserves = [];
        $verified_reserves = [];

        $rooms = DataController::getItems('room');

        for ($i = 0; $i < count($objects); $i++) {
            $objects[$i]->properties = ServiceController::getServiceProperties($objects[$i]->id);

            $res_id = $objects[$i]->id;
            $rels = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.service'))
                ->where('object_id', '=', $res_id)
                ->get(['relation']);
            $rel = $rels[0]->relation;

            $rms = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.data'))
                ->where('relation', '=', $rel)
                ->get(['object_id']);
            $rm = $rms[0]->object_id;

            foreach ($rooms as $room) {
                if ($room->id == $rm) {
                    $objects[$i]->room = $room;
                }
            }

            $all_reserves [] = $objects[$i];
            if (isset($objects[$i]->properties['situation']) && ($objects[$i]->properties['situation']->title == 1 || $objects[$i]->properties['situation']->title == 5)) {
                $waiting_reserves[] = $objects[$i];
            } else {
                $verified_reserves[] = $objects[$i];
            }
        }

        $data['verified_reserves'] = $verified_reserves;
        $data['waiting_reserves'] = $waiting_reserves;
        $data['all_reserves'] = $all_reserves;

        return $data;


    }

}
