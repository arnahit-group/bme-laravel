<?php

namespace App\Http\Controllers;

use App\User;
use App\UserProperty;
use App\UserType;
use Auth;
use DB;
use Illuminate\Http\Request;
use stdClass;

class UserController extends Controller
{

    public static function getDataProperties($user_id)
    {
        $base_locale = DataController::getPropertyValue('website', 'base_locale');
        $use_translates = $base_locale != app()->getLocale() ? true : false;

        $ds = DB::table('user_assigned_properties')
            ->where('user_assigned_properties.user', '=', $user_id)
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
                $t = TranslationController::getTranslatedForCell(app()->getLocale(), 'user_assigned_properties', 'value', $d->id);
                $cds->title = $t != null ? $t : $d->value;
                $l = TranslationController::getTranslatedForCell(app()->getLocale(), 'user_properties', 'title', $d->did);
                if (!is_null($l))
                    $cds->locale_text = $l;

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
                    $cds->title = $d->value;
                }
            }
            $cds->input_type = $d->input_type;
            $cds->level = $d->level;
            $props[$d->title] = $cds;
        }
        return $props;
    }







    public static function isUserExists($email)
    {
        $us = User::where('email', '=', $email)->get();
        if (count($us) > 0)
            return $us[0]->id;
        else
            return 0;
    }


    public static function saveProperties(Request $request, $user_type, $user_id)
    {


        $bt_id = UserType::where('title', '=', $user_type)->first();
//        return $bt_id->id;
        $properties = UserProperty::where('user_type', '=', $bt_id->id)->get();
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
                    'user' => $user_id,
                ];
                $to_add_arrs[] = $to_add_arr;

            } else {

                if ($property->input_type == 'check') {
                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '0',
                        'user' => $user_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                } elseif ($property->input_type == 'text') {
                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '',
                        'user' => $user_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }
            }
        }

        DB::table('user_assigned_properties')->insert(
            $to_add_arrs
        );

    }


    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }


    //

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

        $bt_id = UserType::where('title', '=', $user_type)->first();
        $properties = UserProperty::where('user_type', '=', $bt_id->id)->get();
        $data['user_type'] = $user_type;
        $data['properties'] = $properties;

        return view("users.create", $data);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    public function edit(User $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $property)
    {
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
