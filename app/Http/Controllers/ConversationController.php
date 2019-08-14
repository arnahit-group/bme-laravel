<?php

namespace App\Http\Controllers;

use App;
use App\Conversation;
use App\ConversationProperty;
use App\ConversationPropertyValue;
use App\ConversationType;
use App\Libraries\MyLib\MyPluralizer;
use DB;
use Illuminate\Http\Request;
use stdClass;
use Validator;

class ConversationController extends Controller
{

    public static function getBaseInforamation(&$data,$type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.conversations.items'))
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
        $permissions['create'] = "conversations.create" . ":" . $type;
        $permissions['store'] = "conversations.store" . ":" . $type;
        $permissions['update'] = "conversations.update" . ":" . $type;
        $permissions['edit'] = "conversations.edit" . ":" . $type;
        $permissions['destroy'] = "conversations.destroy" . ":" . $type;

        return $permissions;

    }

    public static function getUrls($type, $id = 0)
    {

        $urls = [];
        $urls['index'] = route("conversations.index", ['type' => $type]);
        $urls['create'] = route("conversations.create", ['type' => $type]);
        $urls['store'] = route("conversations.store", ['type' => $type]);
        $urls['update'] = route("conversations.update", ['type' => $type, 'id' => $id]);
        $urls['change'] = route("conversations.change", ['type' => $type]);
        $urls['destroy'] = route("conversations.destroy", ['type' => $type]);

        return $urls;

    }

    public static function getDataProperties2($conversation_id)
    {

        $type_id = Conversation::find($conversation_id)->type;
        $properties = ConversationProperty::where('type', '=', $type_id)->where('is_setting', '=', 0)->get();
        $assigned_properties = DB::table('conversation_assigned_properties')
            ->where('conversation', '=', $conversation_id)
            ->get();


        $props = PropertyController::getDataProperties2(
            "conversation_properties",
            "conversation_assigned_properties",
            "conversation_assigned_property_values",
            $properties,
            $assigned_properties,
            config('base.object_types.conversation_assigned_property')
        );

        return $props;

    }


    public static function getItems($type)
    {
        $bt_id = ConversationType::where('title', '=', $type)->first();
        $data ['type'] = $type;
        $objects = Conversation::where('type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($objects); $i++) {
            $objects[$i]->properties = self::getDataProperties2($objects[$i]->id);
            $urls = [];
            $urls['edit'] = route('conversations.edit', ['type' => $type, 'id' => $objects[$i]->id]);
            $objects[$i]->urls = $urls;

        }
        return $objects;
    }


    public static function getPropertyValue($type, $property)
    {
        $bt_id = ConversationType::where('title', '=', $type)->first();

        $dd = Conversation::where('type', '=', $bt_id->id)->get();
        if (count($dd) == 0)
            return null;

        $dd_id = $dd[0]->id;


        $objects = DB::table('conversation_properties')
            ->join('conversation_assigned_properties', 'conversation_assigned_properties.property', '=', 'conversation_properties.id')
            ->where('conversation_properties.title', '=', $property)
            ->where('conversation_properties.type', '=', $bt_id->id)
            ->where('conversation_assigned_properties.conversation', '=', $dd_id)
            ->get(['conversation_assigned_properties.value']);

        if (count($objects) == 0)
            return null;

        return $objects[0]->value;
    }


    public static function saveProperties(Request $request, $type, $conversation_id)
    {
        $bt_id = ConversationType::where('title', '=', $type)->first();
        $properties = ConversationProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();

        PropertyController::saveProperties(
            $request,
            'conversation',
            $conversation_id,
            $properties,
            'conversation_assigned_properties',
            'conversation_assigned_property_values',
            config('base.object_types.conversation_assigned_property'));

    }


    public static function getProperties($type, $id = null)
    {

        $bt_id = ConversationType::where('title', '=', $type)->first();
        $properties = ConversationProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->orderBy('level')->get();

        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $property_values = ConversationPropertyValue::whereIn('property', $property_ids)->get();

        if (is_null($id)) {
            $assigned_properties = null;
        } else {
            $assigned_properties = DB::table("conversation_assigned_properties")->where('conversation', '=', $id)->get();
        }

        return PropertyController::getProperties(
            'conversation_properties',
            'conversation_assigned_properties',
            'conversation_assigned_property_values',
            $properties,
            $property_values,
            $assigned_properties,
            config('base.object_types.conversation_assigned_property')
        );

    }


    public function index($type)
    {
        $base_locale = DataController::getPropertyValue('website', 'base_locale');
        $use_translates = $base_locale != app()->getLocale() ? true : false;


        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data,$type);

        $bt_id = ConversationType::where('title', '=', $type)->first();

        $data ['type'] = $bt_id;
        $data ['datas'] = self::getItems($type);
        $data ['widgets'] = WidgetController::getWidgets("conversation.index", 'conversation', $type);
        $data['properties'] = self::getProperties($type);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);

        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => 'تست',
                'url' => ''
            ]
        ];


        return view("admin.items.views.index", $data);

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
//        $data ['user'] = UserController::getCurrentUserData();
//        $data['navigations'] = NavigationController::getNavigation('admin');
        $data['properties'] = self::getProperties($type);
        $data ['images'] = DocumentController::getItems('general');

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);

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

//        dd($request);

//        dd($request);
//        return $data_type;
        $bt_id = ConversationType::where('title', '=', $type)->first();


        $type_id = $bt_id->id;
        $rules = ConversationPropertyController::createValidationRules($type_id);

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {


            $conversation = new Conversation();
            $conversation->type = $bt_id->id;
            $conversation->save();

//        return;
//        return $request->keys();

            self::saveProperties($request, $type, $conversation->id);
//        return;

            $rels = [];
            $rel_d = new stdClass();
            $rel_d->object_id = $conversation->id;
            $rel_d->object_type = config("base.object_types.conversation");
            $rels[] = $rel_d;

            $rel_u = new stdClass();
            $rel_u->object_id = \Auth::id();
            $rel_u->object_type = config("base.object_types.user");
            $rels[] = $rel_u;

            RelationController::createRelation($type, $rels);

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
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

        $bt_id = ConversationType::where('title', ' = ', $type)->first();
//        return $bt_id;
        $hotel = Conversation::where('type', ' = ', $bt_id->id)->where('id', ' = ', $id)->get();

        $data ['hotel'] = $hotel;
//        return $data;
        return view("conversation.index", $data);

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
        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type, $id);


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
        $bt_id = ConversationType::where('title', '=', $type)->first();
        $type_id = $bt_id->id;
        $rules = ConversationPropertyController::createValidationRules($type_id, false, $id);

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {
            DB::table('conversation_assigned_properties')
                ->where('conversation', '=', $id)
                ->delete();

//            dd($request);
            self::saveProperties($request, $type, $id);
            return response()->json(['success' => 'Added new records.']);
        }


        return response()->json(['error' => $validator->errors()->all()]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $type)
    {

        $id = $request->input('id');

        $document = Conversation::find($id);
        $document->delete();
        DB::table('conversation_assigned_properties')->where('conversation', '=', $id)->delete();
        return response()->json(['error' => 0, 'message' => 'id is : ' . $id]);
        //
    }


    public function changeProperty(Request $request)
    {
        $did = $request->input('id');
        $value = $request->input('value');
        $key = $request->input('key');
//        return response()->json(["error" => 0, 'message' => "dassasdadds"]);
//        return response()->json(["error" => 0, 'message' => $did . " " . $value . " " . $key]);
        $dtid = Conversation::where('id', '=', $did)->get();
        $p = ConversationProperty::where('title', '=', $key)->where('type', '=', $dtid[0]->type)->get();

        $pid = $p[0]->id;

        DB::table('conversation_assigned_properties')
            ->where('conversation', '=', $did)
            ->where('property', '=', $pid)
            ->update([
                'value' => $value
            ]);

//        return response()->json(["error" => 0, 'message' => $pid ]);

        return response()->json(["error" => 0, 'message' => 'success']);
    }


    public
    function refresh(Request $request)
    {

        $did = $request->input('id');
        $value = $request->input('value');
        $key = $request->input('key');

        $dtid = Conversation::where('id', '=', $did)->get();

        $p = ConversationProperty::where('title', '=', $key)->where('type', '=', $dtid[0]->type)->get();
        $pid = $p[0]->id;

        DB::table('conversation_assigned_properties')
            ->where('conversation', ' = ', $did)
            ->where('property', ' = ', $pid)
            ->update([
                'value' => $value
            ]);

        return response()->json(["error" => 0, 'message' => 'success']);
    }


}
