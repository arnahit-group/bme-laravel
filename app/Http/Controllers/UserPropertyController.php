<?php

namespace App\Http\Controllers;

use App\Translation;
use App\User;
use App\UserProperty;
use App\UserPropertyValue;
use App\UserType;
use DB;
use Illuminate\Http\Request;
use stdClass;
use Validator;

class UserPropertyController extends Controller
{

    public static function getBaseInforamation(&$data, $type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.users.properties'))
                && $navs[$i]->properties->value == $type) {
                $navs[$i]->active = true;
            } else {
                $navs[$i]->active = false;
            }
        }

        $data['navigations'] = $navs;

    }

    public static function createValidationRules($type_id, $is_setting = false, $id = 0)
    {
        $props = UserProperty::where('type', '=', $type_id)->where('is_setting', '=', $is_setting == true ? 1 : 0)->get();
        return PropertyController::createValidationRules($props, 'user', $id);
    }

    public static function getItems($type)
    {

        $bt_id = UserType::where('title', '=', $type)->first();
        $properties = UserProperty::where('type', '=', $bt_id->id)->get();
        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $translations = Translation::where('table', '=', 'user_properties')
            ->where('field', '=', 'title')
            ->whereIn('record', $property_ids)
            ->get(['locale', 'record', 'value']);

        $properties = PropertyController::getItems($properties, $translations);


        $urls = [];
        for ($i = 0; $i < count($properties); $i++) {
            $urls['edit'] = route('users.properties.edit', ['type' => $type, 'id' => $properties[$i]->id]);
            $properties[$i]->urls = $urls;
        }
        return $properties;

    }


    public static function getItem($id)
    {

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

        return $props;


    }


    public static function getPermissions($type)
    {
        $permissions = [];
        $permissions['create'] = "users.properties.create" . ":" . $type;
        $permissions['store'] = "users.properties.store" . ":" . $type;
        $permissions['update'] = "users.properties.update" . ":" . $type;
        $permissions['edit'] = "users.properties.edit" . ":" . $type;
        $permissions['destroy'] = "users.properties.destroy" . ":" . $type;

        return $permissions;

    }

    public function settings($type)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data);

        $bt_id = UserType::where('title', '=', $type)->first();
        $setts = UserProperty::where('is_setting', '=', 1)->where('type', '=', $bt_id->id)->get();

        $data['type'] = $type;

        $objects = User::where('type', '=', $bt_id->id)->get();
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

        $data['users'] = $objects;


        for ($i = 0; $i < count($setts); $i++) {

            if ($setts[$i]->input_type == 'multi-user') {
                if (trim($setts[$i]->default_value) != "") {
                    $setts[$i]->assigned = explode(',', $setts[$i]->default_value);
                } else {
                    $setts[$i]->assigned = "";
                }
            } else {
                $setts[$i]->assigned = $setts[$i]->default_value;
            }


            $trs = Translation::where('table', '=', 'user_properties')
                ->where('field', '=', 'title')
                ->where('record', '=', $setts[$i]->id)
                ->get(['locale', 'value']);

            $ts = [];
            foreach ($trs as $tr) {
                $ts[$tr->locale] = $tr->value;
            }
            $setts[$i]->locales = $ts;

        }

        $data['properties'] = $setts;

        $urls = [];
        $urls['update'] = route("users.settings.update", ['type' => $type]);
        $data['urls'] = $urls;

        return view('admin.settings.views.index', $data);
        //
    }

    public function updateSettings(Request $request, $type)
    {

        $bt_id = UserType::where('title', '=', $type)->first();

        $type_id = $bt_id->id;
        $rules = self::createValidationRules($type_id, true);
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {

            $keys = $request->keys();

            foreach ($keys as $key) {
                $value = $request->input($key);

                if ($key == 'users-to-get-notifications') {
                    $value = implode(',', $value);
                }

                DB::table('user_properties')
                    ->where('type', '=', $bt_id->id)
                    ->where('title', '=', $key)
                    ->update(
                        [
                            'default_value' => $value
                        ]
                    );

            }

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
//        return redirect()->route('services.settings', ['service_type' => $service_type]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data, $type);
        $data ['type'] = $type;

        $data ['properties'] = self::getItems($type);

        $data ['widgets'] = WidgetController::getWidgets("users.property.index", 'user', $type);

        $urls = [];
        $urls['create'] = route("users.properties.create", ['type' => $type]);
        $urls['destroy'] = route("users.properties.ajax.destroy", ['type' => $type]);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = $urls;

        return view("admin.properties.views.index", $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data,$type);

        $data['type'] = $type;


        $urls = [];
        $urls['store'] = route("users.properties.store", ['type' => $type]);
        $urls['index'] = route("users.properties.index", ['type' => $type]);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = $urls;


        return view("admin.properties.views.create", $data);
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


        $validator = Validator::make($request->all(), PropertyController::createValidationRulesForPropertyOperations());
        if ($validator->passes()) {


            $bt_id = UserType::where('title', '=', $type)->first();

            $title_en = $request->input("title-en");
            $title = str_replace(' ', '-', trim($title_en));

            //        $title = $request->input('title');
            $default_value = $request->input('default_value');
            $input_type = $request->input('input_type');
            $level = $request->input('level');

            $dp = new UserProperty();
            $dp->title = $title;
            $dp->type = $bt_id->id;
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
            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);


//        return redirect()->route('users.properties.index', ['type' => $type]);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show($type, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function edit($type, $id)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data,$type);

        $bt_id = UserType::where('title', '=', $type)->first();
//        return $bt_id->id;
        $data['type'] = $type;
        $data['id'] = $id;

        $data['property'] = self::getItem($id);

        $urls = [];
        $urls['update'] = route("users.properties.update", ['type' => $type, 'id' => $id]);
        $urls['index'] = route("users.properties.index", ['type' => $type]);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = $urls;

        return view("admin.properties.views.edit", $data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type, $id)
    {


        $validator = Validator::make($request->all(), PropertyController::createValidationRulesForPropertyOperations());
        if ($validator->passes()) {


            $bt_id = UserType::where('title', '=', $type)->first();

            $title_en = $request->input("title-en");
            $title = str_replace(' ', '-', trim($title_en));

            $default_value = $request->input('default_value');
            $input_type = $request->input('input_type');
            $level = $request->input('level');

            $dp = UserProperty::find($id);
            $dp->title = $title;
            $dp->type = $bt_id->id;
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
            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);


//        return redirect()->route('users.properties.index', ['type' => $type]);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($type, $id)
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


    public function destroy_property(Request $request, $type)
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
