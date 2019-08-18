<?php

namespace App\Http\Controllers;

use App;
use App\Libraries\MyLib\MyPluralizer;
use App\Relation;
use App\Service;
use App\ServiceProperty;
use App\ServiceType;
use DB;
use Illuminate\Http\Request;
use Morilog\Jalali\jDateTime;
use stdClass;

class ServiceController extends Controller
{

    protected static $types_table_name = 'service_types';


    public static function getBaseInforamation(&$data,$type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.services.items'))
                && $navs[$i]->properties->value == $type) {
                $navs[$i]->active = true;
            } else {
                $navs[$i]->active = false;
            }
        }

        $data['navigations'] = $navs;

    }

    public static function getPermissions($type)
    {
        $permissions = [];
        $permissions['create'] = "services.create" . ":" . $type;
        $permissions['store'] = "services.store" . ":" . $type;
        $permissions['update'] = "services.update" . ":" . $type;
        $permissions['edit'] = "services.edit" . ":" . $type;
        $permissions['destroy'] = "services.destroy" . ":" . $type;

        return $permissions;

    }


    public static function getUrls($type, $id = 0)
    {

        $urls = [];
        $urls['index'] = route("services.index", ['type' => $type]);
        $urls['change'] = route("services.change", ['type' => $type]);
        $urls['destroy'] = route("services.destroy", ['type' => $type]);

        return $urls;

    }


    public static function getDataProperties2($service_id)
    {
        $type_id = Service::find($service_id)->type;
        $properties = ServiceProperty::where('type', '=', $type_id)->where('is_setting', '=', 0)->get();
        $assigned_properties = DB::table('service_assigned_properties')
            ->where('service', '=', $service_id)
            ->get();

        $props = PropertyController::getDataProperties2(
            "service_properties",
            "service_assigned_properties",
            "service_assigned_property_values",
            $properties,
            $assigned_properties,
            config('base.object_types.service_assigned_property')
        );

        return $props;

    }


    public static function saveProperties(Request $request, $data_type, $data_id)
    {
        $bt_id = ServiceType::where('title', '=', $data_type)->first();
        $properties = ServiceProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();

        PropertyController::saveProperties(
            $request,
            'service',
            $data_id,
            $properties,
            'service_assigned_properties',
            'service_assigned_property_values',
            config('base.object_types.service_assigned_property'));

    }

    public function index($type)
    {

        self::checkServicesProperties($type, 'situation');

        $data = BaseController::createBaseInformations();
        ServiceController::getBaseInforamation($data,$type);

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $data ['type'] = $bt_id;
        $objects = Service::where('type', '=', $bt_id->id)->get();
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

        $d = self::getServices($type);

        $data['verified_reserves'] = $d['verified_reserves'];
        $data['waiting_reserves'] = $d['waiting_reserves'];
        $data['all_reserves'] = $d['all_reserves'];

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);
        $data ['widgets'] = WidgetController::getWidgets("service.index", 'service', $type);



        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id));


        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id)),
                'url' => ''
            ]
        ];

        return view("admin.items.views.index", $data);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {

        $bt_id = ServiceType::where('title', '=', $type)->first();

        $data = new Service();
        $data->data_type = $bt_id->id;
        $data->save();
//        echo $data->id;

        $properties = ServiceProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();

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
                'title' => 'insert ' . $type,
                'type' => '1',
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

        return redirect()->route("data.index", ['type' => $type]);
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    public function getServiceInfo(Request $request, $type)
    {
        $service_id = $request->input('service_id');
        $service = Service::find($service_id);
        $props = ServiceController::getDataProperties2($service_id);

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


    public function changeSituation(Request $request, $type)
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


        $now = round(microtime(true) * 1000, 0);
        if ($property == '' || $value == '')
            return false;

        $service = Service::find($service_id);
        $properties = ServiceProperty::where('type', '=', $service->type)
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
                        'value' => $value,
                    ]
                );


            $prs = ServiceProperty::where('title', '=', 'last-date-situation-updated')
                ->where('type', '=', $service->type)
                ->get();

            $ls_id = $prs[0]->id;
            DB::table('service_assigned_properties')
                ->where('property', '=', $ls_id)
                ->where('service', '=', $service_id)
                ->update(
                    [
                        'value' => $now,
                    ]
                );


            $props = ServiceProperty::where('type', '=', $service->type)->get();
            $p_id = 0;
            foreach ($props as $prop) {
                if ($prop->title == 'logs') {
                    $p_id = $prop->id;
                }
            }

            $to_add_arrs = [];

            $subs = [];
            foreach ($props as $prop) {
                if ($prop->parent == $p_id) {
                    $subs[] = $prop;
                }
            }


            $to_add_arr = [];
            foreach ($subs as $sub) {

                if ($sub->input_type == 'select' && $sub->title == 'condition') {
                    $to_add_arr = [
                        'property' => $sub->id,
                        'value' => $value,
                        'service' => $service_id,
                    ];

                } elseif ($sub->input_type == 'single-relation-users-all' && $sub->title == 'user') {


                    $rel = new Relation();
                    $rel->type = 1;
                    $rel->title = 'connect user to service log';
                    $rel->save();
                    $rel_id = $rel->id;

                    $ser_ass_id = DB::table('service_assigned_properties')
                        ->insertGetId(
                            [
                                'property' => $sub->id,
                                'value' => $rel_id,
                                'service' => $service_id
                            ]
                        );


                    DB::table('relation_objects')
                        ->insert(
                            [
                                'relation' => $rel_id,
                                'object_type' => config('base.object_types.service_assigned_property'),
                                'object_id' => $ser_ass_id,
                            ]
                        );

                    DB::table('relation_objects')
                        ->insert(
                            [
                                'relation' => $rel_id,
                                'object_type' => config('base.object_types.user'),
                                'object_id' => \Auth::user()->id,
                            ]
                        );


                } elseif ($sub->input_type == 'date') {

                    $to_add_arr = [
                        'property' => $sub->id,
                        'value' => $now,
                        'service' => $service_id,
                    ];

                }

                $to_add_arrs[] = $to_add_arr;


            }

            DB::table('service_assigned_properties')->insert(
                $to_add_arrs
            );


            return true;
        }

        return false;
    }


    public function refresh(Request $request, $type)
    {
        $type_1 = $request->input('type');
        $data = self::getServices($type_1);

//        $bt_id = ServiceType::where('title', '=', $type)->first();
//        $objects = Service::where('type', '=', $bt_id->id)->get();
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

    public static function checkServicesProperties($type, $property)
    {

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $setts = ServiceProperty::where('is_setting', '=', 1)->where('type', '=', $bt_id->id)->get();
        $objects = Service::where('type', '=', $bt_id->id)->get();

        $room_verification_time = 0;
        $check_verification_time = 0;
        $payout_time = 0;
        foreach ($setts as $sett) {
            if ($sett->title == 'room-verification-time') {
                $room_verification_time = $sett->default_value;
            } elseif ($sett->title == 'check-verification-time') {
                $check_verification_time = $sett->default_value;
            } elseif ($sett->title == 'payout-time') {
                $payout_time = $sett->default_value;
            }
        }


        for ($i = 0; $i < count($objects); $i++) {
            $props = ServiceController::getDataProperties2($objects[$i]->id);

            $last_date_situation_updated = $props['last-date-situation-updated']->title;
            $situation = $props['situation']->title;

            $now = round(microtime(true) * 1000, 0);

            if ($situation == 1) {

                $t = $room_verification_time * 60 * 1000;
                if ($last_date_situation_updated + $t < $now) {


                    $prs = ServiceProperty::where('title', '=', 'situation')
                        ->where('type', '=', $objects[$i]->type)
                        ->get();
                    $s_id = $prs[0]->id;

                    DB::table('service_assigned_properties')
                        ->where('property', '=', $s_id)
                        ->where('service', '=', $objects[$i]->id)
                        ->update(
                            [
                                'value' => 4,
                            ]
                        );


                    $prs = ServiceProperty::where('title', '=', 'last-date-situation-updated')
                        ->where('type', '=', $objects[$i]->type)
                        ->get();

                    $ls_id = $prs[0]->id;
                    DB::table('service_assigned_properties')
                        ->where('property', '=', $ls_id)
                        ->where('service', '=', $objects[$i]->id)
                        ->update(
                            [
                                'value' => $now,
                            ]
                        );


                }

            } elseif ($situation == 5) {

                $t = $check_verification_time * 60 * 1000;
                if ($last_date_situation_updated + $t < $now) {


                    $prs = ServiceProperty::where('title', '=', 'situation')
                        ->where('type', '=', $objects[$i]->type)
                        ->get();
                    $s_id = $prs[0]->id;

                    DB::table('service_assigned_properties')
                        ->where('property', '=', $s_id)
                        ->where('service', '=', $objects[$i]->id)
                        ->update(
                            [
                                'value' => 8,
                            ]
                        );


                    $prs = ServiceProperty::where('title', '=', 'last-date-situation-updated')
                        ->where('type', '=', $objects[$i]->type)
                        ->get();

                    $ls_id = $prs[0]->id;
                    DB::table('service_assigned_properties')
                        ->where('property', '=', $ls_id)
                        ->where('service', '=', $objects[$i]->id)
                        ->update(
                            [
                                'value' => $now,
                            ]
                        );


                }


            }


        }


    }


    public static function getServiceSituation()
    {

        $objects = UserController::getItems('customer');

        for ($i = 0; $i < count($objects); $i++) {

            $res_date = round(microtime(true) * 1000, 0);

            $rels = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.user'))
                ->where('object_id', '=', $objects[$i]->id)
                ->get(['relation']);

            $base_rels = [];
            foreach ($rels as $rel) {
                $base_rels[] = $rel->relation;
            }

            $rel2s = DB::table('relation_objects')
//                ->join('service_assigned_properties', 'relation_objects.object_id', '=', 'service_assigned_properties.service')
//                ->join('service_properties', 'service_properties.id', '=', 'service_assigned_properties.property')
                ->where('object_type', '=', config('base.object_types.service'))
                ->whereIn('relation', $base_rels)
//                ->get(['service_properties.title', 'service_assigned_properties.value']);
                ->get(['object_id']);


            $situation = 'free';
            foreach ($rel2s as $rel2) {

                $std = new stdClass();
                $prps = DB::table('service_assigned_properties')
                    ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
                    ->where('service_assigned_properties.service', '=', $rel2->object_id)
                    ->get(['service_properties.title', 'service_assigned_properties.value']);

                foreach ($prps as $prp) {
                    $std->{$prp->title} = $prp->value;
                }

                if (isset($std->situation) && $std->situation == 7 && isset($std->end_date) && $std->end_date > $res_date) {
                    $situation = 'reserved';
                }
            }

//            $situation = 'free';
//            foreach ($rel2s as $rel2) {
//                if ($rel2->title = 'end_date' && $rel2->value > $res_date) {
//                    $situation = 'reserved';
//                    break;
//                }
//            }
            $objects[$i]->situation = $situation;

//            $objects[$i]->relation_count = count($rels);
//            $objects[$i]->relations = $rel2s;

        }
        return $objects;
    }

    public static function getServices($type)
    {

        self::checkServicesProperties($type, 'situation');

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $objects = Service::where('type', '=', $bt_id->id)->get();
        $waiting_reserves = [];
        $all_reserves = [];
        $verified_reserves = [];
        $timeout_reserves = [];

        $rooms = DataController::getItems('room');
        $customers = ServiceController::getServiceSituation();


        for ($i = 0; $i < count($objects); $i++) {


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


            $rms = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.user'))
                ->where('relation', '=', $rel)
                ->get(['object_id']);

            foreach ($customers as $customer) {
                foreach ($rms as $rm) {
                    if ($customer->id == $rm->object_id) {
                        $objects[$i]->customer = $customer;
                    }
                }
            }

            ///////////////////////////////////////////

            $props = ServiceController::getDataProperties2($objects[$i]->id);


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


            $en_date = $props['end_date']->title;
            $props['gr_end_date'] = new stdClass();
            $props['gr_end_date']->title = date("d-m-Y", $en_date / 1000);

            $gy = date("Y", $en_date / 1000);
            $gm = date("m", $en_date / 1000);
            $gd = date("d", $en_date / 1000);
            $ja = jDateTime::toJalali($gy, $gm, $gd);
            $props['ja_end_date'] = new stdClass();
            $props['ja_end_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";


            $cn_date = $props['confirmation_date']->title;
            $props['gr_confirmation_date'] = new stdClass();
            $props['gr_confirmation_date']->title = date("d-m-Y", $cn_date / 1000);

            $gy = date("Y", $cn_date / 1000);
            $gm = date("m", $cn_date / 1000);
            $gd = date("d", $cn_date / 1000);
            $ja = jDateTime::toJalali($gy, $gm, $gd);
            $props['ja_confirmation_date'] = new stdClass();
            $props['ja_confirmation_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";

            $objects[$i]->properties = $props;


            //////////////////////////////////////////////////


            $all_reserves [] = $objects[$i];
            if (isset($objects[$i]->properties['situation']) && ($objects[$i]->properties['situation']->title == 1 || $objects[$i]->properties['situation']->title == 5)) {
                $waiting_reserves[] = $objects[$i];
            } elseif (isset($objects[$i]->properties['situation']) && ($objects[$i]->properties['situation']->title == 7 || $objects[$i]->properties['situation']->title == 9)) {
                $verified_reserves[] = $objects[$i];
            } else {
                $timeout_reserves[] = $objects[$i];
            }
        }

        $data['verified_reserves'] = $verified_reserves;
        $data['waiting_reserves'] = $waiting_reserves;
        $data['timeout_reserves'] = $timeout_reserves;
        $data['all_reserves'] = $all_reserves;

        return $data;


    }

}
