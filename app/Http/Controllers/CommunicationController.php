<?php

namespace App\Http\Controllers;

use App\Communication;
use App\CommunicationProperty;
use App\CommunicationPropertyValue;
use App\CommunicationType;
use DB;
use Illuminate\Http\Request;
use stdClass;
use Validator;

class CommunicationController extends Controller
{

    public static function getBaseInforamation(&$data, $type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.communications.items'))
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
        $permissions['create'] = "communications.create" . ":" . $type;
        $permissions['store'] = "communications.store" . ":" . $type;
        $permissions['update'] = "communications.update" . ":" . $type;
        $permissions['edit'] = "communications.edit" . ":" . $type;
        $permissions['destroy'] = "communications.destroy" . ":" . $type;

        return $permissions;

    }

    public static function getUrls($type, $id = 0)
    {

        $urls = [];
        $urls['index'] = route("communications.index", ['type' => $type]);
        $urls['create'] = route("communications.create", ['type' => $type]);
        $urls['store'] = route("communications.store", ['type' => $type]);
        $urls['update'] = route("communications.update", ['type' => $type, 'id' => $id]);
        $urls['change'] = route("communications.change", ['type' => $type]);
        $urls['destroy'] = route("communications.destroy", ['type' => $type]);

        return $urls;

    }


    public static function getDataProperties2($communication_id)
    {

        $type_id = Communication::find($communication_id)->type;
        $properties = CommunicationProperty::where('type', '=', $type_id)->where('is_setting', '=', 0)->get();
        $assigned_properties = DB::table('communication_assigned_properties')
            ->where('communication', '=', $communication_id)
            ->get();


        $props = PropertyController::getDataProperties2(
            "communication_properties",
            "communication_assigned_properties",
            "communication_assigned_property_values",
            $properties,
            $assigned_properties,
            config('base.object_types.communication_assigned_property')
        );


        return $props;

    }


    public static function getItems($type)
    {
        $bt_id = CommunicationType::where('title', '=', $type)->first();
        $data ['type'] = $type;
        $objects = Communication::where('type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($objects); $i++) {
            $objects[$i]->properties = self::getDataProperties2($objects[$i]->id);
            $urls = [];
            $urls['edit'] = route('communications.edit', ['type' => $type, 'id' => $objects[$i]->id]);
            $objects[$i]->urls = $urls;

        }
        return $objects;
    }


    public static function getPropertyValue($type, $property)
    {
        $bt_id = CommunicationType::where('title', '=', $type)->first();

        $dd = Communication::where('type', '=', $bt_id->id)->get();
        if (count($dd) == 0)
            return null;

        $dd_id = $dd[0]->id;


        $objects = DB::table('communication_properties')
            ->join('communication_assigned_properties', 'communication_assigned_properties.property', '=', 'communication_properties.id')
            ->where('communication_properties.title', '=', $property)
            ->where('communication_properties.type', '=', $bt_id->id)
            ->where('communication_assigned_properties.communication', '=', $dd_id)
            ->get(['communication_assigned_properties.value']);

        if (count($objects) == 0)
            return null;

        return $objects[0]->value;
    }


    public static function saveProperties(Request $request, $type, $communication_id)
    {
        $locales = ['en', 'ar'];

        $bt_id = CommunicationType::where('title', '=', $type)->first();
        $properties = CommunicationProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();

        PropertyController::saveProperties(
            $request,
            'communication',
            $communication_id,
            $properties,
            'communication_assigned_properties',
            'communication_assigned_property_values',
            config('base.object_types.communication_assigned_property'));

    }


    public static function getProperties($type, $id = null)
    {

        $bt_id = CommunicationType::where('title', '=', $type)->first();
        $properties = CommunicationProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->orderBy('level')->get();

        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $property_values = CommunicationPropertyValue::whereIn('property', $property_ids)->get();

        if (is_null($id)) {
            $assigned_properties = null;
        } else {
            $assigned_properties = DB::table("communication_assigned_properties")->where('communication', '=', $id)->get();
        }

        return PropertyController::getProperties(
            'communication_properties',
            'communication_assigned_properties',
            'communication_assigned_property_values',
            $properties,
            $property_values,
            $assigned_properties,
            config('base.object_types.communication_assigned_property')
        );

    }


    public function index($type)
    {
        $base_locale = DataController::getPropertyValue('website', 'base_locale');
        $use_translates = $base_locale != app()->getLocale() ? true : false;


        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data,$type);

        $data ['type'] = $type;
//        $data ['user'] = UserController::getCurrentUserData();
//        $data['navigations'] = NavigationController::getNavigation('admin');


        $bt_id = CommunicationType::where('title', '=', $type)->first();
        $objects = Communication::where('type', '=', $bt_id->id)->get();
        $data ['type'] = $bt_id;

        $data ['datas'] = self::getItems($type);
        $data ['widgets'] = WidgetController::getWidgets("communication.index", 'communication', $type);
        $data['properties'] = self::getProperties($type);
//        return $data;

        $data['urls'] = self::getUrls($type);
        $data['permissions'] = self::getPermissions($type);

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
        self::getBaseInforamation($data,$type);

        $data['type'] = $type;
//        $data ['user'] = UserController::getCurrentUserData();
//        $data['navigations'] = NavigationController::getNavigation('admin');
        $data['properties'] = self::getProperties($type);
        $data ['images'] = DocumentController::getItems('general');


        $data['urls'] = self::getUrls($type);
        $data['permissions'] = self::getPermissions($type);


//        return $data;
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

        $bt_id = CommunicationType::where('title', '=', $type)->first();
        $type_id = $bt_id->id;
        $rules = CommunicationPropertyController::createValidationRules($type_id);

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {

            $data = new Communication();
            $data->type = $bt_id->id;
            $data->save();
            self::saveProperties($request, $type, $data->id);

            $rels = [];
            $rel_d = new stdClass();
            $rel_d->object_id = $data->id;
            $rel_d->object_type = config("base.object_types.communication");
            $rels[] = $rel_d;
            $rel_u = new stdClass();
            $rel_u->object_id = \Auth::id();
            $rel_u->object_type = config("base.object_types.user");
            $rels[] = $rel_u;
            RelationController::createRelation($type, $rels);

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);


//        return redirect()->route("data.index", ['data_type' => $data_type]);
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

        $bt_id = CommunicationType::where('title', ' = ', $type)->first();
//        return $bt_id;
        $hotel = Communication::where('type', ' = ', $bt_id->id)->where('id', ' = ', $id)->get();

        $data ['hotel'] = $hotel;
//        return $data;
        return view("communication.index", $data);

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
        self::getBaseInforamation($data,$type);
//        $bt_id = DataType::where('title', '=', $data_type)->first();
//        $properties = DataProperty::where('data_type', '=', $bt_id->id)->get();
//        $assigned = DB::table("data_assigned_properties")->where('data', '=', $id)->get();
//        return $assigned;

        $data ['images'] = DocumentController::getItems('general');

        $data['type'] = $type;

        $properties = self::getProperties($type, $id);
        $data['properties'] = $properties;

//        return $properties;
        $data['id'] = $id;

        $data['urls'] = self::getUrls($type, $id);
        $data['permissions'] = self::getPermissions($type);


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
        $bt_id = CommunicationType::where('title', '=', $type)->first();
        $type_id = $bt_id->id;
        $rules = CommunicationPropertyController::createValidationRules($type_id, false, $id);

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {
            DB::table('communication_assigned_properties')
                ->where('communication', '=', $id)
                ->delete();

            self::saveProperties($request, $type, $id);
            return response()->json(['success' => 'Added new records.']);
        }


        return response()->json(['error' => $validator->errors()->all()]);

//        return redirect()->route("data.index", ['data_type' => $data_type]);
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

        $document = Communication::find($id);
        $document->delete();
        DB::table('communication_assigned_properties')->where('communication', '=', $id)->delete();
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
        $dtid = Communication::where('id', '=', $did)->get();
        $p = CommunicationProperty::where('title', '=', $key)->where('type', '=', $dtid[0]->type)->get();

        $pid = $p[0]->id;

        DB::table('communication_assigned_properties')
            ->where('communication', '=', $did)
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

        $dtid = Communication::where('id', '=', $did)->get();

        $p = CommunicationProperty::where('title', '=', $key)->where('type', '=', $dtid[0]->type)->get();
        $pid = $p[0]->id;

        DB::table('communication_assigned_properties')
            ->where('communication', ' = ', $did)
            ->where('property', ' = ', $pid)
            ->update([
                'value' => $value
            ]);

        return response()->json(["error" => 0, 'message' => 'success']);
    }


}
