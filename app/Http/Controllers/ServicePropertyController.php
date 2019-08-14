<?php

namespace App\Http\Controllers;

use App\ServiceProperty;
use App\ServicePropertyValue;
use App\ServiceType;
use App\Translation;
use App\User;
use DB;
use Illuminate\Http\Request;
use stdClass;
use Validator;

class ServicePropertyController extends Controller
{


    public static function getBaseInforamation(&$data, $type)
    {

        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.services.properties'))
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
        $props = ServiceProperty::where('type', '=', $type_id)->where('is_setting', '=', $is_setting == true ? 1 : 0)->get();
        return PropertyController::createValidationRules($props, 'service', $id);
    }

    public static function getItems($type)
    {

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $properties = ServiceProperty::where('type', '=', $bt_id->id)->get();
        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $translations = Translation::where('table', '=', 'service_properties')
            ->where('field', '=', 'title')
            ->whereIn('record', $property_ids)
            ->get(['locale', 'record', 'value']);

        $properties = PropertyController::getItems($properties, $translations);


        $urls = [];
        for ($i = 0; $i < count($properties); $i++) {
            $urls['edit'] = route('services.properties.edit', ['type' => $type, 'id' => $properties[$i]->id]);
            $properties[$i]->urls = $urls;
        }
        return $properties;

    }

    public static function getItem($id)
    {

        $props = ServiceProperty::find($id);


        $trs = Translation::where('table', '=', 'service_properties')
            ->where('field', '=', 'title')
            ->where('record', '=', $id)
            ->get(['locale', 'value']);

        $ts = [];
        foreach ($trs as $tr) {
            $ts[$tr->locale] = $tr->value;
        }

        $props->locales = $ts;

        $vls = DB::table('service_property_values')
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
        $permissions['create'] = "services.properties.create" . ":" . $type;
        $permissions['store'] = "services.properties.store" . ":" . $type;
        $permissions['update'] = "services.properties.update" . ":" . $type;
        $permissions['edit'] = "services.properties.edit" . ":" . $type;
        $permissions['destroy'] = "services.properties.destroy" . ":" . $type;

        return $permissions;

    }

    public function settings($type)
    {

        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data);

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $setts = ServiceProperty::where('is_setting', '=', 1)->where('type', '=', $bt_id->id)->get();

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


            $trs = Translation::where('table', '=', 'service_properties')
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
        $urls['update'] = route("services.settings.update", ['type' => $type]);
        $data['urls'] = $urls;

//        return $data;
        return view('admin.settings.views.index', $data);
        //
    }

    public function updateSettings(Request $request, $type)
    {

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $data_type_id = $bt_id->id;
        $rules = ServicePropertyController::createValidationRules($data_type_id, true);
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {


            $keys = $request->keys();
//        return $keys;

            foreach ($keys as $key) {
                $value = $request->input($key);

                if ($key == 'users-to-get-notifications') {
                    $value = implode(',', $value);
                }

                DB::table('service_properties')
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

//        return redirect()->route('services.settings', ['type' => $type]);
    }

    public static function getSettingValue($type, $title)
    {
        $bt_id = ServiceType::where('title', '=', $type)->get();
        $bt_id = $bt_id[0]->id;
        $s = ServiceProperty::where('type', '=', $bt_id)->where('title', '=', $title)->get();
        return $s[0]->default_value;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data,$type);
        $data ['type'] = $type;


        $data ['properties'] = self::getItems($type);

        $data ['widgets'] = WidgetController::getWidgets("service.property.index", 'service', $type);


        $urls = [];
        $urls['create'] = route("services.properties.create", ['type' => $type]);
        $urls['destroy'] = route("services.properties.ajax.destroy", ['type' => $type]);
        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = $urls;


        return view("admin.properties.views.index", $data);

        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data, $type);

        $data['type'] = $type;

        $urls = [];
        $urls['store'] = route("services.properties.store", ['type' => $type]);
        $urls['index'] = route("services.properties.index", ['type' => $type]);

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


            $bt_id = ServiceType::where('title', '=', $type)->first();

            $title_en = $request->input("title-en");
            $title = str_replace(' ', '-', trim($title_en));

            //        $title = $request->input('title');
            $default_value = $request->input('default_value');
            $input_type = $request->input('input_type');
            $level = $request->input('level');

            $dp = new ServiceProperty();
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

                    $dpv = new ServicePropertyValue();
                    $dpv->property = $dp->id;
                    $dpv->value = $value;
                    $dpv->save();

                }
            }


            $translates = [];
            $translates[] = [
                'locale' => 'fa',
                'table' => 'service_properties',
                'field' => 'title',
                'record' => $dp->id,
                'value' => $request->input('title')
            ];

            $locales = config('base.locales');
            foreach ($locales as $locale) {
                $title_loc = $request->input("title-{$locale}");
                $translates[] = [
                    'locale' => $locale,
                    'table' => 'service_properties',
                    'field' => 'title',
                    'record' => $dp->id,
                    'value' => $title_loc,
                ];
            }


            DB::table('translations')->insert(
                $translates
            );

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);

//        return;


//        return redirect()->route('services.properties.index', ['type' => $type]);


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
        self::getBaseInforamation($data, $type);

        $bt_id = ServiceType::where('title', '=', $type)->first();
//        return $bt_id->id;
        $data['type'] = $type;
        $data['id'] = $id;


        $data['property'] = self::getItem($id);

        $urls = [];
        $urls['update'] = route("services.properties.update", ['type' => $type, 'id' => $id]);
        $urls['index'] = route("services.properties.index", ['type' => $type]);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = $urls;

//        return $data;
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


            $bt_id = ServiceType::where('title', '=', $type)->first();

            $title_en = $request->input("title-en");
            $title = str_replace(' ', '-', trim($title_en));


            $default_value = $request->input('default_value');
            $input_type = $request->input('input_type');
            $level = $request->input('level');

            $dp = ServiceProperty::find($id);
            $dp->title = $title;
            $dp->type = $bt_id->id;
            $dp->default_value = $default_value;
            $dp->input_type = $input_type;
            $dp->level = $level;
            $dp->parent = 0;
            $dp->save();


            if ($request->input('values') != null) {
                $values = $request->input('values');

                DB::table('service_property_values')
                    ->where('property', '=', $id)
                    ->delete();

                foreach ($values as $value) {
                    $dpv = new ServicePropertyValue();
                    $dpv->property = $dp->id;
                    $dpv->value = $value;
                    $dpv->save();

                }
            }


            $translates = [];
            $translates[] = [
                'locale' => 'fa',
                'table' => 'service_properties',
                'field' => 'title',
                'record' => $dp->id,
                'value' => $request->input('title')
            ];

            $locales = config('base.locales');
            foreach ($locales as $locale) {
                $title_loc = $request->input("title-{$locale}");
                $translates[] = [
                    'locale' => $locale,
                    'table' => 'service_properties',
                    'field' => 'title',
                    'record' => $dp->id,
                    'value' => $title_loc,
                ];
            }


            DB::table('translations')
                ->where('table', '=', 'service_properties')
                ->where('field', '=', 'title')
                ->where('record', '=', $id)
                ->delete();


            DB::table('translations')->insert(
                $translates
            );

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);

//        return redirect()->route('services.properties.index', ['type' => $type]);

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
        $used = DB::table('service_assigned_properties')
            ->where('property', '=', $id)
            ->get();

        if (count($used) > 0) {
            $data['error'] = 1;
            $data['message'] = "you cant remove property that used before";
            return response()->json($data);
        }

        $dp = ServiceProperty::find($id);
        $dp->delete();

        DB::table('data_property_values')
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
        $used = DB::table('service_assigned_properties')
            ->where('property', '=', $id)
            ->get();

        if (count($used) > 0) {
            $data['error'] = 1;
            $data['message'] = "you cant remove property that used before";
            return response()->json($data);
        }

        $dp = ServiceProperty::find($id);
        $dp->delete();

        DB::table('service_property_values')
            ->where('property', '=', $id)
            ->delete();


        $data['error'] = 0;
        $data['message'] = "property deleted";
        return response()->json($data);

        //
    }


}
