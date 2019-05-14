<?php

namespace App\Http\Controllers;

use App\Translation;
use App\UserProperty;
use App\UserPropertyValue;
use App\UserType;
use DB;
use Illuminate\Http\Request;

class UserPropertyController extends Controller
{


    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_type)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data);
        $data ['user_type'] = $user_type;

        $bt_id = UserType::where('title', '=', $user_type)->first();
        $properties = UserProperty::where('user_type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($properties); $i++) {

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

        $data ['properties'] = $properties;

        $data ['widgets'] = WidgetController::getWidgets("users.property.index", 'user', $user_type);

        return view("users.property.index", $data);

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
        self::getBaseInforamation($data);

        $data['user_type'] = $user_type;
        return view("users.property.create", $data);
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

        $bt_id = UserType::where('title', '=', $user_type)->first();

        $title_en = $request->input("title-en");
        $title = str_replace(' ', '-', trim($title_en));

        //        $title = $request->input('title');
        $default_value = $request->input('default_value');
        $input_type = $request->input('input_type');
        $level = $request->input('level');

        $dp = new UserProperty();
        $dp->title = $title;
        $dp->user_type = $bt_id->id;
        $dp->default_value = $default_value;
        $dp->input_type = $input_type;
        $dp->level = $level;
        $dp->parent = 0;
        $dp->save();


        if ($request->input('values') != null) {
            $values = $request->input('values');
            foreach ($values as $value) {

                $dpv = new UserPropertyValue();
                $dpv->property = $dp->id;
                $dpv->value = $value;
                $dpv->save();

            }
        }


        $translates = [];
        $translates[] = [
            'locale' => 'fa',
            'table' => 'user_properties',
            'field' => 'title',
            'record' => $dp->id,
            'value' => $request->input('title')
        ];

        $locales = config('base.locales');
        foreach ($locales as $locale) {
            $title_loc = $request->input("title-{$locale}");
            $translates[] = [
                'locale' => $locale,
                'table' => 'user_properties',
                'field' => 'title',
                'record' => $dp->id,
                'value' => $title_loc,
            ];
        }


        DB::table('translations')->insert(
            $translates
        );

//        return;


        return redirect()->route('users.properties.index', ['user_type' => $user_type]);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show($user_type, $id)
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

        $bt_id = UserType::where('title', '=', $user_type)->first();
//        return $bt_id->id;
        $data['user_type'] = $user_type;
        $data['id'] = $id;

        $props = UserProperty::find($id);


        $trs = Translation::where('table', '=', 'user_properties')
            ->where('field', '=', 'title')
            ->where('record', '=', $id)
            ->get(['locale', 'value']);

        $ts = [];
        foreach ($trs as $tr) {
            $ts[$tr->locale] = $tr->value;
        }

        $props->locales = $ts;

        $vls = DB::table('user_property_values')
            ->where('property', '=', $id)
            ->get();


        $values = [];
        foreach ($vls as $vl) {
            $values [] = $vl->value;

        }

        $props->values = $values;

        $data['property'] = $props;


//        return $data;
        return view("users.property.edit", $data);
        //
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

        $title_en = $request->input("title-en");
        $title = str_replace(' ', '-', trim($title_en));

        $default_value = $request->input('default_value');
        $input_type = $request->input('input_type');
        $level = $request->input('level');

        $dp = UserProperty::find($id);
        $dp->title = $title;
        $dp->user_type = $bt_id->id;
        $dp->default_value = $default_value;
        $dp->input_type = $input_type;
        $dp->level = $level;
        $dp->parent = 0;
        $dp->save();


        if ($request->input('values') != null) {
            $values = $request->input('values');

            DB::table('user_property_values')
                ->where('property', '=', $id)
                ->delete();

            foreach ($values as $value) {
                $dpv = new UserPropertyValue();
                $dpv->property = $dp->id;
                $dpv->value = $value;
                $dpv->save();

            }
        }


        $translates = [];
        $translates[] = [
            'locale' => 'fa',
            'table' => 'user_properties',
            'field' => 'title',
            'record' => $dp->id,
            'value' => $request->input('title')
        ];

        $locales = config('base.locales');
        foreach ($locales as $locale) {
            $title_loc = $request->input("title-{$locale}");
            $translates[] = [
                'locale' => $locale,
                'table' => 'user_properties',
                'field' => 'title',
                'record' => $dp->id,
                'value' => $title_loc,
            ];
        }


        DB::table('translations')
            ->where('table', '=', 'user_properties')
            ->where('field', '=', 'title')
            ->where('record', '=', $id)
            ->delete();


        DB::table('translations')->insert(
            $translates
        );


        return redirect()->route('users.properties.index', ['user_type' => $user_type]);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_type, $id)
    {

        $data = [];
        $used = DB::table('user_assigned_properties')
            ->where('property', '=', $id)
            ->get();

        if (count($used) > 0) {
            $data['error'] = 1;
            $data['message'] = "you cant remove property that used before";
            return response()->json($data);
        }

        $dp = UserProperty::find($id);
        $dp->delete();

        DB::table('user_property_values')
            ->where('property', '=', $id)
            ->delete();


        $data['error'] = 0;
        $data['message'] = "property deleted";
        return response()->json($data);

        //
    }


    public function destroy_property(Request $request)
    {

        $id = $request->input('id');

        $data = [];
        $used = DB::table('user_assigned_properties')
            ->where('property', '=', $id)
            ->get();

        if (count($used) > 0) {
            $data['error'] = 1;
            $data['message'] = "you cant remove property that used before";
            return response()->json($data);
        }

        $dp = UserProperty::find($id);
        $dp->delete();

        DB::table('user_property_values')
            ->where('property', '=', $id)
            ->delete();


        $data['error'] = 0;
        $data['message'] = "property deleted";
        return response()->json($data);

        //
    }


}
