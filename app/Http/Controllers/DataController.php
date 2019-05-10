<?php

namespace App\Http\Controllers;

use App\Data;
use App\DataProperty;
use App\DataPropertyValue;
use App\DataType;
use App\Relation;
use App\RelationProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DataController extends Controller
{

    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }


    public static function get($data_type)
    {
        $bt_id = DataType::where('title', '=', $data_type)->first();
        $cc = Data::where('data_type', '=', $bt_id->id)->get();
        return $cc;
    }

    public static function getDataProperties($data_id)
    {

//        echo 'data_id:' . $data_id;
//        echo "<br>";

//        echo app()->getLocale();

        $base_locale = DataController::getPropertyValue('website', 'base_locale');
        $use_translates = $base_locale != app()->getLocale() ? true : false;


//        echo app()->getLocale();
//        echo "<br>";
//        echo $base_locale;
//        echo "<br>";
//        echo $use_translates;
//        echo "<br>";


        $ds = DB::table('data_assigned_properties')
            ->where('data_assigned_properties.data', '=', $data_id)
            ->join('data_properties', 'data_assigned_properties.property', '=', 'data_properties.id')
            ->select(
                'data_assigned_properties.id',
                'data_properties.title',
                'data_assigned_properties.value',
                'data_properties.id as did',
                'data_properties.input_type as input_type',
                'data_properties.level as level'
            )
            ->get();

//        echo $ds;

        $props = [];

        foreach ($ds as $d) {


            $cds = new stdClass();
            if ($use_translates == true) {

                if ($d->input_type == 'multi-text') {

                    $vs = DB::table('data_assigned_property_values')
                        ->where('assigned_property', '=', $d->id)
                        ->select('data_assigned_property_values.value')
                        ->get();
                    $vvs = [];
                    foreach ($vs as $v) {
                        $vvs[] = $v->value;
                    }
                    $cds->title = $vvs;


                } elseif ($d->input_type == 'multi-relation-document-images') {


                    $vs = DB::table('relation_objects')
                        ->where('object_type', '=', config('base.object_types.data_assigned_property'))
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
                        if (count($rs) > 0)
                            $std[] = $rs[0]->path;
                    }
                    $cds->slides = $std;

                } elseif ($d->input_type == 'single-relation-price') {

                    $vs = DB::table('relation_objects')
                        ->where('object_type', '=', config('base.object_types.data_assigned_property'))
                        ->where('object_id', '=', $d->id)
                        ->select('relation_objects.relation')
                        ->get();
                    $std = [];
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


//                    echo app()->getLocale();
//                    echo "<br>";

                    $t = TranslationController::getTranslatedForCell(app()->getLocale(), 'data_assigned_properties', 'value', $d->id);
                    $cds->title = $t != null ? $t : $d->value;
                    $l = TranslationController::getTranslatedForCell(app()->getLocale(), 'data_properties', 'title', $d->did);
                    if (!is_null($l))
                        $cds->locale_text = $l;

//                    echo $t;
//                    echo "<br>";

                }

            } else {

                if ($d->input_type == 'multi-text') {


                    $vs = DB::table('data_assigned_property_values')
                        ->where('assigned_property', '=', $d->id)
                        ->select('data_assigned_property_values.value')
                        ->get();
                    $vvs = [];
                    foreach ($vs as $v) {
                        $vvs[] = $v->value;
                    }
                    $cds->title = $vvs;


                } elseif ($d->input_type == 'multi-relation-document-images') {


                    $vs = DB::table('relation_objects')
                        ->where('object_type', '=', config('base.object_types.data_assigned_property'))
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
                        ->where('object_type', '=', config('base.object_types.data_assigned_property'))
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


    public static function getItems($data_type)
    {
        $bt_id = DataType::where('title', '=', $data_type)->first();
        $data ['data_type'] = $data_type;
        $objects = Data::where('data_type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($objects); $i++) {
            $objects[$i]->properties = DataController::getDataProperties($objects[$i]->id);

            $res_date = round(microtime(true) * 1000, 0);

            $rels = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.data'))
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

    public static function getPropertyValue($data_type, $property)
    {
        $bt_id = DataType::where('title', '=', $data_type)->first();

        $dd = Data::where('data_type', '=', $bt_id->id)->get();
        if (count($dd) == 0)
            return null;

        $dd_id = $dd[0]->id;


        $objects = DB::table('data_properties')
            ->join('data_assigned_properties', 'data_assigned_properties.property', '=', 'data_properties.id')
            ->where('data_properties.title', '=', $property)
            ->where('data_properties.data_type', '=', $bt_id->id)
            ->where('data_assigned_properties.data', '=', $dd_id)
            ->get(['data_assigned_properties.value']);

        if (count($objects) == 0)
            return null;

        return $objects[0]->value;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function saveProperties(Request $request, $data_type, $data_id)
    {
        $locales = ['en', 'ar'];

        $bt_id = DataType::where('title', '=', $data_type)->first();
        $properties = DataProperty::where('data_type', '=', $bt_id->id)->get();
        $keys = $request->keys();
        $to_add_arrs = [];


        foreach ($properties as $property) {
            $to_add_arr = [];

            if (array_search($property->title, $keys) !== false) {
                $k_t = $keys[array_search($property->title, $keys)];
                $value = $request->input($k_t);


                if ($property->input_type == 'multi-relation-document-images') {


//                    continue;

                    $paths = $value;
                    $dp_id = DB::table('data_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'data' => $data_id,
                        ]
                    );


                    foreach ($paths as $path) {


                        $d = DB::table('document_assigned_properties')
                            ->where('value', '=', $path)
                            ->orWhere('value', '=', BaseController::normalizePath($path))
                            ->get();

                        $d_id = $d[0]->document;


                        $relation = new Relation();
                        $relation->title = 'raleted image to room';
                        $relation->relation_type = 1;
                        $relation->save();
                        $r_id = $relation->id;


                        DB::table('relation_objects')->insert(
                            [
                                'relation' => $r_id,
                                'object_type' => config('base.object_types.document'),
                                'object_id' => $d_id,
                            ]
                        );

                        DB::table('relation_objects')->insert(
                            [
                                'relation' => $r_id,
                                'object_type' => config('base.object_types.data_assigned_property'),
                                'object_id' => $dp_id,
                            ]
                        );

                    }


                } elseif ($property->input_type == 'single-relation-price') {

                    $dp_id = DB::table('data_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'data' => $data_id,
                        ]
                    );

                    $relation = new Relation();
                    $relation->title = 'related room to price';
                    $relation->relation_type = 5;
                    $relation->save();
                    $r_id = $relation->id;


                    DB::table('relation_objects')->insert(
                        [
                            'relation' => $r_id,
                            'object_type' => config('base.object_types.data_assigned_property'),
                            'object_id' => $dp_id,
                        ]
                    );


                    $r_props = RelationProperty::where('relation_type', '=', config('base.relation_types.price'))->get();

                    foreach ($r_props as $r_prop) {

//                        echo $r_props->id;
//                        echo "<br>";
//                        continue;
                        if ($r_prop->title == $property->title) {

                            DB::table('relation_assigned_properties')
                                ->insert(
                                    [
                                        'relation' => $r_id,
                                        'property' => $r_prop->id,
                                        'value' => $value,
                                    ]
                                );

                        } else {

                            DB::table('relation_assigned_properties')
                                ->insert(
                                    [
                                        'relation' => $r_id,
                                        'property' => $r_prop->id,
                                        'value' => 0,
                                    ]
                                );
                        }
                    }

                } elseif ($property->input_type == 'multi-text') {


                    $vs = $value;
                    $dp_id = DB::table('data_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'data' => $data_id
                        ]
                    );

                    foreach ($vs as $v) {
                        DB::table('data_assigned_property_values')->insert(
                            [
                                'assigned_property' => $dp_id,
                                'value' => $v
                            ]
                        );
                    }




                } else {

                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => ($value == null ? '' : $value),
                        'data' => $data_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }


            } else {


                if ($property->input_type == 'check') {
                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '0',
                        'data' => $data_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }

            }
        }

        DB::table('data_assigned_properties')->insert(
            $to_add_arrs
        );


        $translates = [];
        foreach ($properties as $property) {
            if ($property->input_type == 'text') {
                $ptitle = $property->title;
                $pid = $property->id;
                $tr = [];
                foreach ($locales as $locale) {
                    if (array_search("$ptitle-{$locale}", $keys)) {

                        $k_t = $keys[array_search("$ptitle-{$locale}", $keys)];
                        $pvalue = $request->input($k_t);

                        $regid = DB::table('data_assigned_properties')
                            ->where('data', '=', $data_id)
                            ->where('property', '=', $property->id)
                            ->get(['id']);


                        $translates[] = [
                            'locale' => $locale,
                            'table' => 'data_assigned_properties',
                            'field' => 'value',
                            'record' => $regid[0]->id,
                            'value' => $pvalue,
                        ];
//                        DB::table('translations')->insert([
//                            'locale' => $locale,
//                            'table' => 'data_assigned_properties',
//                            'field' => 'value',
//                            'record' => $regid[0]->id,
//                            'value' => $pvalue,
//                        ]);
                    }
                }
            }
        }

//        return;
        DB::table('translations')->insert(
            $translates
        );


    }

    public static function getProperties($data_type)
    {
        $bt_id = DataType::where('title', '=', $data_type)->first();
        $properties = DataProperty::where('data_type', '=', $bt_id->id)->orderBy('level')->get();

        for ($i = 0; $i < count($properties); $i++) {
            $values = DataPropertyValue::where('property', '=', $properties[$i]->id)->get();
            if (count($values) > 0)
                $properties[$i]->values = $values;

        }

        return $properties;
    }


    public function index($data_type)
    {

//        app()->setLocale('en');

        $base_locale = DataController::getPropertyValue('website', 'base_locale');
        $use_translates = $base_locale != app()->getLocale() ? true : false;

//        return app()->getLocale();

//        app()->setLocale('en');
//        return app()->getLocale();

        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data);

        $data ['data_type'] = $data_type;
//        $data ['user'] = UserController::getCurrentUserData();
//        $data['navigations'] = NavigationController::getNavigation('admin');


        $bt_id = DataType::where('title', '=', $data_type)->first();
        $objects = Data::where('data_type', '=', $bt_id->id)->get();


        if (count($objects) == 1) {

            $properties = DataController::getProperties($data_type);
//            $data['properties'] = $properties;
            $assigned = DB::table("data_assigned_properties")->where('data', '=', $objects[0]->id)->get();
            $data['data_type'] = $data_type;

            for ($i = 0; $i < count($properties); $i++) {
                $properties[$i]->assigned = "";
                if ($properties[$i]->input_type == 'multi-relation-document-images') {
                    $ds_id = 0;
                    foreach ($assigned as $item) {
                        if ($item->property == $properties[$i]->id) {
                            $ds_id = $item->id;
                            break;
                        }
                    }
                    $rels = DB::table('relation_objects')
                        ->where('object_type', '=', config('base.object_types.data_assigned_property'))
                        ->where('object_id', '=', $ds_id)
                        ->get();

                    $relations = [];
                    foreach ($rels as $rel) {
                        $relations[] = $rel->relation;
                    }
                    $rels = DB::table('relation_objects')
                        ->join('document_assigned_properties', 'document_assigned_properties.document', '=', 'relation_objects.object_id')
                        ->whereIn('relation', $relations)
                        ->where('object_type', '=', config('base.object_types.document'))
                        ->where('document_assigned_properties.property', '=', 4)
                        ->get(['document_assigned_properties.value', 'document_assigned_properties.document']);
                    $properties[$i]->assigned = $rels;
                } elseif ($properties[$i]->input_type == 'multi-text') {


                    $dps_id = 0;
                    foreach ($assigned as $item) {
                        if ($item->property == $properties[$i]->id) {
                            $dps_id = $item->id;
                            break;
                        }
                    }

                    if ($dps_id == 0)
                        continue;

                    $dpsvs = DB::table('data_assigned_property_values')
                        ->where('assigned_property', '=', $dps_id)
                        ->get(['data_assigned_property_values.value']);

                    $ds = [];



                    foreach ($dpsvs as $dpsv) {
                        $ds[] = $dpsv->value;
                    }




                    $properties[$i]->assigned = $ds;

                } else {
                    foreach ($assigned as $item) {
                        if ($item->property == $properties[$i]->id) {
                            $properties[$i]->assigned = $item->value;

                            if ($properties[$i]->input_type == 'text') {
                                $trs = DB::table('translations')
                                    ->where('table', '=', 'data_assigned_properties')
                                    ->where('field', '=', 'value')
                                    ->where('record', '=', $item->id)
                                    ->get(['locale', 'value']);

                                foreach ($trs as $tr) {
                                    $k = 'assigned-'.$tr->locale;
                                    $properties[$i]->{$k} = $tr->value;
                                }
                            }

                            break;
                        }
                    }
                }
            }
            $objects[0]->properties = $properties;
        } else {

            for ($i = 0; $i < count($objects); $i++) {
                $objects[$i]->properties = DataController::getDataProperties($objects[$i]->id);
            }
        }

        $data ['datas'] = $objects;

        $data ['widgets'] = WidgetController::getWidgets("data.index", 'data', $data_type);
        $data['properties'] = DataController::getProperties($data_type);


//        return $data;
//        return $data ['widgets'];

        return view("data.index", $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($data_type)
    {

        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data);

        $data['data_type'] = $data_type;
//        $data ['user'] = UserController::getCurrentUserData();
//        $data['navigations'] = NavigationController::getNavigation('admin');
        $data['properties'] = DataController::getProperties($data_type);
        $data ['images'] = DocumentController::getDocuments('general');

//        return $data;
        return view("data.create", $data);

    }

    public function createTranslate($data_type, $id)
    {
        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data);

        $data['data_type'] = $data_type;
        $data['properties'] = DataController::getProperties($data_type);

        return view("translation.create", $data);

    }

    public function storeTranslate($data_type, $id)
    {

    }

    public function getTranslations($data_type, $id)
    {
        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data);

        $data['data_type'] = $data_type;
        $data['properties'] = DataController::getProperties($data_type);
        $data['id'] = $id;


        return view("translation.create", $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $data_type)
    {

//        dd($request);

//        dd($request);
//        return $data_type;
        $bt_id = DataType::where('title', '=', $data_type)->first();

        $data = new Data();
        $data->data_type = $bt_id->id;
        $data->save();

//        return;
//        return $request->keys();

        DataController::saveProperties($request, $data_type, $data->id);
//        return;

        $rels = [];
        $rel_d = new stdClass();
        $rel_d->object_id = $data->id;
        $rel_d->object_type = config("base.object_types.data");
        $rels[] = $rel_d;

        $rel_u = new stdClass();
        $rel_u->object_id = \Auth::id();
        $rel_u->object_type = config("base.object_types.user");
        $rels[] = $rel_u;

        RelationController::createRelation($data_type, $rels);

        //        return;
        return redirect()->route("data.index", ['data_type' => $data_type]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function show($data_type, $id)
    {
        $data = BaseController::createBaseInformations();

        $user = UserController::getCurrentUserData();
        $data ['user'] = $user;

        $data['navigations'] = NavigationController::getNavigation('admin');

        $bt_id = DataType::where('title', ' = ', $data_type)->first();
//        return $bt_id;
        $hotel = Data::where('data_type', ' = ', $bt_id->id)->where('id', ' = ', $id)->get();

        $data ['hotel'] = $hotel;
//        return $data;
        return view("data.index", $data);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function edit($data_type, $id)
    {


        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data);

//        $bt_id = DataType::where('title', '=', $data_type)->first();
//        $properties = DataProperty::where('data_type', '=', $bt_id->id)->get();
        $properties = DataController::getProperties($data_type);
        $data['properties'] = $properties;
        $assigned = DB::table("data_assigned_properties")->where('data', '=', $id)->get();
//        return $assigned;
        $data ['images'] = DocumentController::getDocuments('general');
        $data['data_type'] = $data_type;


        for ($i = 0; $i < count($properties); $i++) {
            $properties[$i]->assigned = "";
            if ($properties[$i]->input_type == 'multi-relation-document-images') {
                $ds_id = 0;
                foreach ($assigned as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $ds_id = $item->id;
                        break;
                    }
                }
                $rels = DB::table('relation_objects')
                    ->where('object_type', '=', config('base.object_types.data_assigned_property'))
                    ->where('object_id', '=', $ds_id)
                    ->get();

                $relations = [];
                foreach ($rels as $rel) {
                    $relations[] = $rel->relation;
                }
                $rels = DB::table('relation_objects')
                    ->join('document_assigned_properties', 'document_assigned_properties.document', '=', 'relation_objects.object_id')
                    ->whereIn('relation', $relations)
                    ->where('object_type', '=', config('base.object_types.document'))
                    ->where('document_assigned_properties.property', '=', 4)
                    ->get(['document_assigned_properties.value', 'document_assigned_properties.document']);
                $properties[$i]->assigned = $rels;

            } elseif ($properties[$i]->input_type == 'single-relation-price') {


                $ds_id = 0;
                foreach ($assigned as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $ds_id = $item->id;
                        break;
                    }
                }

                $rels = DB::table('relation_objects')
                    ->where('object_type', '=', config('base.object_types.data_assigned_property'))
                    ->where('object_id', '=', $ds_id)
                    ->get();

                if (count($rels) > 0) {
                    $relations = [];
                    foreach ($rels as $rel) {
                        $relations[] = $rel->relation;
                    }

                    $rel_id = $relations[0];

                    $rs_props = DB::table('relation_assigned_properties')
                        ->where('relation', '=', $rel_id)
                        ->where('property', '=', 1)
                        ->get();

                    $properties[$i]->assigned = $rs_props[0]->value;

                }


            } else {


                foreach ($assigned as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $properties[$i]->assigned = $item->value;

                        if ($properties[$i]->input_type == 'text') {
                            $trs = DB::table('translations')
                                ->where('table', '=', 'data_assigned_properties')
                                ->where('field', '=', 'value')
                                ->where('record', '=', $item->id)
                                ->get(['locale', 'value']);

                            foreach ($trs as $tr) {

                                $k = 'assigned-'.$tr->locale;
                                $properties[$i]->{$k} = $tr->value;
                            }
                        }

                        break;
                    }
                }


            }
        }


        $data['properties'] = $properties;
//        $data['properties'] = self::getDataProperties($id);
//        return $properties;
        $data['id'] = $id;
//        return $data;
        return view("data.edit", $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $data_type, $id)
    {
        $bt_id = DataType::where('title', '=', $data_type)->first();

        DB::table('data_assigned_properties')
            ->where('data', '=', $id)
            ->delete();

        DataController::saveProperties($request, $data_type, $id);

        return redirect()->route("data.index", ['data_type' => $data_type]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }


    public function changeProperty(Request $request)
    {
        $did = $request->input('id');
        $value = $request->input('value');
        $key = $request->input('key');
//        return response()->json(["error" => 0, 'message' => "dassasdadds"]);
//        return response()->json(["error" => 0, 'message' => $did . " " . $value . " " . $key]);
        $dtid = Data::where('id', '=', $did)->get();
        $p = DataProperty::where('title', '=', $key)->where('data_type', '=', $dtid[0]->data_type)->get();

        $pid = $p[0]->id;

        DB::table('data_assigned_properties')
            ->where('data', '=', $did)
            ->where('property', '=', $pid)
            ->update([
                'value' => $value
            ]);

//        return response()->json(["error" => 0, 'message' => $pid ]);

        return response()->json(["error" => 0, 'message' => 'success']);
    }


    public function refresh(Request $request)
    {

        $did = $request->input('id');
        $value = $request->input('value');
        $key = $request->input('key');

        $dtid = Data::where('id', '=', $did)->get();

        $p = DataProperty::where('title', '=', $key)->where('data_type', '=', $dtid[0]->data_type)->get();
        $pid = $p[0]->id;

        DB::table('data_assigned_properties')
            ->where('data', ' = ', $did)
            ->where('property', ' = ', $pid)
            ->update([
                'value' => $value
            ]);

        return response()->json(["error" => 0, 'message' => 'success']);
    }


}
