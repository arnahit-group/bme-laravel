<?php

namespace App\Http\Controllers;

use App\Relation;
use App\RelationProperty;
use App\Translation;
use App\User;
use App\UserProperty;
use App\UserPropertyValue;
use App\UserType;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;
use stdClass;

class UserController extends Controller
{

    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }


    public static function getDataProperties($data_id)
    {

        $base_locale = DataController::getPropertyValue('website', 'base_locale');
        $use_translates = $base_locale != app()->getLocale() ? true : false;

        $ds = DB::table('user_assigned_properties')
            ->where('user_assigned_properties.user', '=', $data_id)
            ->join('user_properties', 'user_assigned_properties.property', '=', 'user_properties.id')
            ->select(
                'user_assigned_properties.id',
                'user_properties.title',
                'user_assigned_properties.value',
                'user_properties.id as did',
                'user_properties.input_type as input_type',
                'user_properties.level as level'
            )
            ->get();

        $props = [];

        foreach ($ds as $d) {

            $cds = new stdClass();

            if ($use_translates == true) {

                if ($d->input_type == 'multi-text') {

                    $vs = DB::table('user_assigned_property_values')
                        ->where('assigned_property', '=', $d->id)
                        ->select('user_assigned_property_values.value')
                        ->get();
                    $vvs = [];
                    foreach ($vs as $v) {
                        $vvs[] = $v->value;
                    }
                    $cds->title = $vvs;


                } elseif ($d->input_type == 'multi-relation-document-images') {


                    $vs = DB::table('relation_objects')
                        ->where('object_type', '=', config('base.object_types.user_assigned_property'))
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
                        ->where('object_type', '=', config('base.object_types.user_assigned_property'))
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

                    $t = TranslationController::getTranslatedForCell(app()->getLocale(), 'user_assigned_properties', 'value', $d->id);
                    $cds->title = $t != null ? $t : $d->value;
                    $l = TranslationController::getTranslatedForCell(app()->getLocale(), 'user_properties', 'title', $d->did);
                    if (!is_null($l))
                        $cds->locale_text = $l;

//                    echo $t;
//                    echo "<br>";

                }

            } else {

                if ($d->input_type == 'multi-text') {


                    $vs = DB::table('user_assigned_property_values')
                        ->where('assigned_property', '=', $d->id)
                        ->select('user_assigned_property_values.value')
                        ->get();
                    $vvs = [];
                    foreach ($vs as $v) {
                        $vvs[] = $v->value;
                    }
                    $cds->title = $vvs;


                } elseif ($d->input_type == 'multi-relation-document-images') {


                    $vs = DB::table('relation_objects')
                        ->where('object_type', '=', config('base.object_types.user_assigned_property'))
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
                        ->where('object_type', '=', config('base.object_types.user_assigned_property'))
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

            // data property title translation
            $trs = Translation::where('table', '=', 'user_properties')
                ->where('field', '=', 'title')
                ->where('record', '=', $d->did)
                ->get(['locale', 'value']);

            $ts = [];
            foreach ($trs as $tr) {
                $ts[$tr->locale] = $tr->value;
            }
            $cds->locales = $ts;


            $cds->input_type = $d->input_type;
            $cds->level = $d->level;

            $props[$d->title] = $cds;


        }

        return $props;
    }


    public static function getItems($user_type)
    {
        $bt_id = UserType::where('title', '=', $user_type)->first();
        $data ['user_type'] = $user_type;
        $objects = User::where('user_type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($objects); $i++) {
            $objects[$i]->properties = self::getDataProperties($objects[$i]->id);

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


    public static function getPropertyValue($user_type, $property)
    {
        $bt_id = UserType::where('title', '=', $user_type)->first();

        $dd = User::where('user_type', '=', $bt_id->id)->get();
        if (count($dd) == 0)
            return null;

        $dd_id = $dd[0]->id;

        $objects = DB::table('user_properties')
            ->join('user_assigned_properties', 'user_assigned_properties.property', '=', 'user_properties.id')
            ->where('user_properties.title', '=', $property)
            ->where('user_properties.user_type', '=', $bt_id->id)
            ->where('user_assigned_properties.user', '=', $dd_id)
            ->get(['user_assigned_properties.value']);

        if (count($objects) == 0)
            return null;

        return $objects[0]->value;
    }


    public static function saveProperties(Request $request, $user_type, $user_id)
    {
        $locales = ['en', 'ar'];

        $bt_id = UserType::where('title', '=', $user_type)->first();
        $properties = UserProperty::where('user_type', '=', $bt_id->id)->get();
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
                    $dp_id = DB::table('user_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'user' => $user_id,
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
                                'object_type' => config('base.object_types.user_assigned_property'),
                                'object_id' => $dp_id,
                            ]
                        );

                    }


                } elseif ($property->input_type == 'single-relation-price') {

                    $dp_id = DB::table('user_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'user' => $user_id,
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
                            'object_type' => config('base.object_types.user_assigned_property'),
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
                    $dp_id = DB::table('user_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'user' => $user_id
                        ]
                    );

                    foreach ($vs as $v) {
                        DB::table('user_assigned_property_values')->insert(
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
                        'user' => $user_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }


            } else {


                if ($property->input_type == 'check') {
                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '0',
                        'user' => $user_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }

            }
        }

        DB::table('user_assigned_properties')->insert(
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

                        $regid = DB::table('user_assigned_properties')
                            ->where('user', '=', $user_id)
                            ->where('property', '=', $property->id)
                            ->get(['id']);


                        $translates[] = [
                            'locale' => $locale,
                            'table' => 'user_assigned_properties',
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

    public static function getProperties($user_type)
    {
        $bt_id = UserType::where('title', '=', $user_type)->first();
        $properties = UserProperty::where('user_type', '=', $bt_id->id)->orderBy('level')->get();

        for ($i = 0; $i < count($properties); $i++) {
            $values = UserPropertyValue::where('property', '=', $properties[$i]->id)->get();
            if (count($values) > 0)
                $properties[$i]->values = $values;

            $trs = Translation::where('table', '=', 'user_properties')
                ->where('field', '=', 'title')
                ->where('record', '=', $properties[$i]->id)
                ->get(['locale', 'value']);

            $ts = [];
            foreach ($trs as $tr) {
                $ts[$tr->locale] = $tr->value;
            }

            $properties[$i]->locales = $ts;

        }

        return $properties;
    }


    public static function isUserExists($email)
    {
        $us = User::where('email', '=', $email)->get();
        if (count($us) > 0)
            return $us[0]->id;
        else
            return 0;
    }

    public static function getCurrentUserData()
    {
        if (Auth::check() == false)
            return null;

        $user = User::find(Auth::id());
        $properties = DB::table('user_assigned_properties')
            ->join('user_properties', 'user_properties.id', '=', 'user_assigned_properties.property')
            ->where('user', '=', Auth::id())
            ->select('user_properties.title', 'user_assigned_properties.value')
            ->get();
        $cds = new stdClass();
        foreach ($properties as $property) {
            $cds->{$property->title} = $property->value;
        }
        $user->properties = $cds;
        return $user;

    }

    public static function getUserCount($type)
    {

        $cc = User::where('user_type', '=', $type)->count();
        return $cc;
    }

    public static function get($user_type)
    {
        $bt_id = UserType::where('title', '=', $user_type)->first();

        $cc = User::where('user_type', '=', $bt_id->id)->get();
        return $cc;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_type)
    {

        $data = BaseController::createBaseInformations();
        UserController::getBaseInforamation($data);


        $bt_id = UserType::where('title', '=', $user_type)->first();
//        return $bt_id;
//        $hotel = Data::where('base_type', '=', $bt_id->id)->where('id', '=', $id)->get();

//        $data ['hotel'] = $hotel;
        $data ['user_type'] = $user_type;
//        return $data;
        $objects = User::where('user_type', '=', $bt_id->id)->get();


        for ($i = 0; $i < count($objects); $i++) {
            $ds = DB::table('user_assigned_properties')
                ->where('user_assigned_properties.user', '=', $objects[$i]->id)
                ->join('user_properties', 'user_assigned_properties.property', '=', 'user_properties.id')
                ->select('user_properties.title', 'user_assigned_properties.value')
                ->get();
            $cds = new stdClass();
            foreach ($ds as $d) {
                $cds->{$d->title} = $d->value;
            }
            $objects[$i]->properties = $cds;
        }

        $data ['datas'] = $objects;
        $data ['widgets'] = WidgetController::getWidgets("users.index", 'user', $user_type);

//        return $data;

        return view("users.index", $data);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_type)
    {

        $data = BaseController::createBaseInformations();
        UserController::getBaseInforamation($data);

        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data);

        $data['user_type'] = $user_type;
//        $data ['user'] = UserController::getCurrentUserData();
//        $data['navigations'] = NavigationController::getNavigation('admin');
        $data['properties'] = self::getProperties($user_type);
        $data ['images'] = DocumentController::getDocuments('general');

//        return $data;

        return view("users.create", $data);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_type)
    {

//        dd($request);

//        dd($request);
//        return $data_type;
        $bt_id = UserType::where('title', '=', $user_type)->first();

        $data = new User();
        $data->user_type = $bt_id->id;
        $data->email = $request->input('email');
        $data->password = Hash::make($request->input('password'));
        $data->save();

//        return;
//        return $request->keys();

        self::saveProperties($request, $user_type, $data->id);
//        return;

        $rels = [];
        $rel_d = new stdClass();
        $rel_d->object_id = $data->id;
        $rel_d->object_type = config("base.object_types.user");
        $rels[] = $rel_d;

        $rel_u = new stdClass();
        $rel_u->object_id = \Auth::id();
        $rel_u->object_type = config("base.object_types.user");
        $rels[] = $rel_u;

        RelationController::createRelation($user_type, $rels);
        //        return;
        return redirect()->route("users.index", ['user_type' => $user_type]);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show(User $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function edit($user_type, $id)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data);

//        $bt_id = DataType::where('title', '=', $data_type)->first();
//        $properties = DataProperty::where('data_type', '=', $bt_id->id)->get();
        $properties = self::getProperties($user_type);
        $data['properties'] = $properties;
        $assigned = DB::table("user_assigned_properties")->where('user', '=', $id)->get();
//        return $assigned;
        $data ['images'] = DocumentController::getDocuments('general');
        $data['user_type'] = $user_type;

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
                    ->where('object_type', '=', config('base.object_types.user_assigned_property'))
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
                    ->where('object_type', '=', config('base.object_types.user_assigned_property'))
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
                                ->where('table', '=', 'user_assigned_properties')
                                ->where('field', '=', 'value')
                                ->where('record', '=', $item->id)
                                ->get(['locale', 'value']);

                            foreach ($trs as $tr) {

                                $k = 'assigned-' . $tr->locale;
                                $properties[$i]->{$k} = $tr->value;
                            }
                        }

                        break;
                    }
                }


            }
        }

        $data['s_user'] = User::find($id);
        $data['properties'] = $properties;
//        $data['properties'] = self::getDataProperties($id);
//        return $properties;
        $data['id'] = $id;
//        return $data;
        return view("users.edit", $data);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_type, $id)
    {

        $bt_id = UserType::where('title', '=', $user_type)->first();

        $user = User::find($id);
        if ($user->email != $request->input('email')) {
            $user->email = $request->input('email');
            $user->save();
        }

        DB::table('user_assigned_properties')
            ->where('user', '=', $id)
            ->delete();

        self::saveProperties($request, $user_type, $id);

        return redirect()->route("users.index", ['user_type' => $user_type]);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $property)
    {
        //
    }

}
