<?php

namespace App\Http\Controllers;

use App;
use App\Data;
use App\DataProperty;
use App\DataPropertyValue;
use App\DataType;
use App\Libraries\MyLib\MyPluralizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;
use Validator;

class DataController extends Controller
{

    protected static $types_table_name = 'data_types';


    public static function getBaseInforamation(&$data, $type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.data.items'))
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
        $permissions['index'] = "data.index" . ":" . $type;
        $permissions['show'] = "data.show" . ":" . $type;
        $permissions['create'] = "data.create" . ":" . $type;
        $permissions['store'] = "data.store" . ":" . $type;
        $permissions['update'] = "data.update" . ":" . $type;
        $permissions['edit'] = "data.edit" . ":" . $type;
        $permissions['change'] = "data.change" . ":" . $type;
        $permissions['destroy'] = "data.destroy" . ":" . $type;
        return $permissions;

    }

    public static function getUrls($type, $id = 0)
    {
        $urls = [];
        $urls['index'] = route("data.index", ['type' => $type]);
        $urls['create'] = route("data.create", ['type' => $type]);
        $urls['store'] = route("data.store", ['type' => $type]);
        $urls['update'] = route("data.update", ['type' => $type, 'id' => $id]);
        $urls['change'] = route("data.change", ['type' => $type]);
        $urls['destroy'] = route("data.destroy", ['type' => $type]);

        return $urls;

    }

    public static function getItem($string_type_or_number_id)
    {

        if (is_numeric($string_type_or_number_id)) {


        } elseif (is_string($string_type_or_number_id)) {


            $bt_id = DataType::where('title', '=', $string_type_or_number_id)->first();
            $bt_id = Data::where('type', '=', $bt_id->id)->first();
            return DataController::getDataProperties2($bt_id->id);

        }

        return null;
    }

    public static function getDataProperties2($data_id)
    {

        $type_id = Data::find($data_id)->type;
        $properties = DataProperty::where('type', '=', $type_id)->where('is_setting', '=', 0)->get();
        $assigned_properties = DB::table('data_assigned_properties')
            ->where('data', '=', $data_id)
            ->get();


        $props = PropertyController::getDataProperties2(
            "data_properties",
            "data_assigned_properties",
            "data_assigned_property_values",
            $properties,
            $assigned_properties,
            config('base.object_types.data_assigned_property')
        );


        return $props;

    }


    public static function getItems($type)
    {
        $bt_id = DataType::where('title', '=', $type)->first();
        $data ['type'] = $type;
        $objects = Data::where('type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($objects); $i++) {
            $objects[$i]->properties = self::getDataProperties2($objects[$i]->id);

            $urls = [];
            $urls['edit'] = route('data.edit', ['type' => $type, 'id' => $objects[$i]->id]);
            $objects[$i]->urls = $urls;
        }
        return $objects;
    }


    public static function getPropertyValue($type, $property)
    {
        $bt_id = DataType::where('title', '=', $type)->first();

        $dd = Data::where('type', '=', $bt_id->id)->get();
        if (count($dd) == 0)
            return null;

        $dd_id = $dd[0]->id;


        $objects = DB::table('data_properties')
            ->join('data_assigned_properties', 'data_assigned_properties.property', '=', 'data_properties.id')
            ->where('data_properties.title', '=', $property)
            ->where('data_properties.type', '=', $bt_id->id)
            ->where('data_assigned_properties.data', '=', $dd_id)
            ->get(['data_assigned_properties.value']);

        if (count($objects) == 0)
            return null;

        return $objects[0]->value;
    }


    public static function saveProperties(Request $request, $type, $data_id)
    {
        $locales = ['en', 'ar'];

        $bt_id = DataType::where('title', '=', $type)->first();
        $properties = DataProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();

        PropertyController::saveProperties(
            $request,
            'data',
            $data_id,
            $properties,
            'data_assigned_properties',
            'data_assigned_property_values',
            config('base.object_types.data_assigned_property'));

    }


    public static function getProperties($type, $id = null)
    {

        $bt_id = DataType::where('title', '=', $type)->first();
        $properties = DataProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->orderBy('level')->get();

        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $property_values = DataPropertyValue::whereIn('property', $property_ids)->get();

        if (is_null($id)) {
            $assigned_properties = null;
        } else {
            $assigned_properties = DB::table("data_assigned_properties")->where('data', '=', $id)->get();
        }

        return PropertyController::getProperties(
            'data_properties',
            'data_assigned_properties',
            'data_assigned_property_values',
            $properties,
            $property_values,
            $assigned_properties,
            config('base.object_types.data_assigned_property')
        );

    }


    public function index($type)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data, $type);

        $bt_id = DataType::where('title', '=', $type)->first();
        $data ['type'] = $bt_id;

        $data ['datas'] = self::getItems($type);

        $data ['widgets'] = WidgetController::getWidgets("data.index", 'data', $type);

        $data['properties'] = self::getProperties($type);

        $data['urls'] = self::getUrls($type);
        $data['permissions'] = self::getPermissions($type);

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


//        return $data;
        return view("admin.items.views.index", $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create($type)
    {

        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data, $type);

        $data['type'] = $type;
//        $data ['user'] = UserController::getCurrentUserData();
//        $data['navigations'] = NavigationController::getNavigation('admin');
        $data['properties'] = DataController::getProperties($type);
        $data ['images'] = DocumentController::getItems('general');


        $data['urls'] = self::getUrls($type);
        $data['permissions'] = self::getPermissions($type);


        $bt_id = DataType::where('title', '=', $type)->first();

        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id));

        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id)),
                'url' => route('data.index', ['type'=>$type])
            ],
            [
                'title' => trans('messages.create new item'),
                'url' => ''
            ]
        ];


        return view("admin.items.views.create", $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {

        $bt_id = DataType::where('title', '=', $type)->first();
        $type_id = $bt_id->id;
        $rules = DataPropertyController::createValidationRules($type_id);

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {

            $data = new Data();
            $data->type = $bt_id->id;
            $data->save();
            DataController::saveProperties($request, $type, $data->id);

            $rels = [];
            $rel_d = new stdClass();
            $rel_d->object_id = $data->id;
            $rel_d->object_type = config("base.object_types.data");
            $rels[] = $rel_d;
            $rel_u = new stdClass();
            $rel_u->object_id = \Auth::id();
            $rel_u->object_type = config("base.object_types.user");
            $rels[] = $rel_u;
            RelationController::createRelation($type, $rels);

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);


//        return redirect()->route("data.index", ['type' => $type]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public
    function show($type, $id)
    {
        $data = BaseController::createBaseInformations();

        $user = UserController::getCurrentUserData();
        $data ['user'] = $user;

        $data['navigations'] = NavigationController::getNavigation('admin');

        $bt_id = DataType::where('title', ' = ', $type)->first();
//        return $bt_id;
        $hotel = Data::where('type', ' = ', $bt_id->id)->where('id', ' = ', $id)->get();

        $data ['hotel'] = $hotel;
//        return $data;
        return view("data.index", $data);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function edit($type, $id)
    {

        $data = BaseController::createBaseInformations();
        DataController::getBaseInforamation($data, $type);
//        $bt_id = DataType::where('title', '=', $type)->first();
//        $properties = DataProperty::where('type', '=', $bt_id->id)->get();
//        $assigned = DB::table("data_assigned_properties")->where('data', '=', $id)->get();
//        return $assigned;

        $data ['images'] = DocumentController::getItems('general');

        $data['type'] = $type;

        $properties = DataController::getProperties($type, $id);
        $data['properties'] = $properties;

//        return $properties;
        $data['id'] = $id;

        $data['urls'] = self::getUrls($type, $id);
        $data['permissions'] = self::getPermissions($type);

        $bt_id = DataType::where('title', '=', $type)->first();

        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id));

        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id)),
                'url' => route('data.index', ['type' => $type])
            ],
            [
                'title' => trans('messages.edit existing item'),
                'url' => ''
            ]
        ];


        //        return $data;
        return view("admin.items.views.edit", $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $type, $id)
    {
        $bt_id = DataType::where('title', '=', $type)->first();
        $type_id = $bt_id->id;
        $rules = DataPropertyController::createValidationRules($type_id, false, $id);

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {
            DB::table('data_assigned_properties')
                ->where('data', '=', $id)
                ->delete();

//            dd($request);
            DataController::saveProperties($request, $type, $id);
            return response()->json(['success' => 'Added new records.']);
        }


        return response()->json(['error' => $validator->errors()->all()]);

//        return redirect()->route("data.index", ['type' => $type]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Request $request, $type)
    {

        $id = $request->input('id');

        $document = Data::find($id);
        $document->delete();
        DB::table('data_assigned_properties')->where('data', '=', $id)->delete();
        return response()->json(['error' => 0, 'message' => 'id is : ' . $id]);


        //
    }


    public function changeProperty(Request $request, $type)
    {
        $did = $request->input('id');
        $value = $request->input('value');
        $key = $request->input('key');
//        return response()->json(["error" => 0, 'message' => "dassasdadds"]);
//        return response()->json(["error" => 0, 'message' => $did . " " . $value . " " . $key]);
        $dtid = Data::where('id', '=', $did)->get();
        $p = DataProperty::where('title', '=', $key)->where('type', '=', $dtid[0]->type)->get();

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

        $p = DataProperty::where('title', '=', $key)->where('type', '=', $dtid[0]->type)->get();
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
