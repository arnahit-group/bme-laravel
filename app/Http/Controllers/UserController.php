<?php

namespace App\Http\Controllers;

use App;
use App\Libraries\MyLib\MyPluralizer;
use App\User;
use App\UserProperty;
use App\UserPropertyValue;
use App\UserType;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use stdClass;
use Validator;

class UserController extends Controller
{

    protected static $types_table_name = 'user_types';

    public static function getBaseInforamation(&$data, $type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.users.items'))
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
        $permissions['create'] = "users.create" . ":" . $type;
        $permissions['store'] = "users.store" . ":" . $type;
        $permissions['update'] = "users.update" . ":" . $type;
        $permissions['edit'] = "users.edit" . ":" . $type;
        $permissions['change'] = "data.change" . ":" . $type;
        $permissions['destroy'] = "users.destroy" . ":" . $type;

        return $permissions;

    }

    public static function getUrls($type, $id = 0)
    {

        $urls = [];
        $urls['index'] = route("users.index", ['type' => $type]);
        $urls['create'] = route("users.create", ['type' => $type]);
        $urls['store'] = route("users.store", ['type' => $type]);
        $urls['update'] = route("users.update", ['type' => $type, 'id' => $id]);
        $urls['change'] = route("users.change", ['type' => $type]);
        $urls['destroy'] = route("users.destroy", ['type' => $type]);

        return $urls;

    }


    public static function getDataProperties2($user_id)
    {

        $type_id = User::find($user_id)->type;
        $properties = UserProperty::where('type', '=', $type_id)->where('is_setting', '=', 0)->get();
        $assigned_properties = DB::table('user_assigned_properties')
            ->where('user', '=', $user_id)
            ->get();


        $props = PropertyController::getDataProperties2(
            "user_properties",
            "user_assigned_properties",
            "user_assigned_property_values",
            $properties,
            $assigned_properties,
            config('base.object_types.user_assigned_property')
        );
        return $props;
    }

    public static function getItem($id)
    {
        $object = User::where('id', '=', $id)->get();
        if (count($object) == 0)
            return null;

        $user = $object[0];
        $user->properties = self::getDataProperties2($user->id);

        return $user;
    }

    public static function getItems($type)
    {
        $bt_id = UserType::where('title', '=', $type)->first();
        $objects = User::where('type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($objects); $i++) {
            $objects[$i]->properties = self::getDataProperties2($objects[$i]->id);

            $urls = [];
            $urls['edit'] = route('users.edit', ['type' => $type, 'id' => $objects[$i]->id]);
            $objects[$i]->urls = $urls;
        }
        return $objects;
    }


    public static function getPropertyValue($type, $property)
    {
        $bt_id = UserType::where('title', '=', $type)->first();

        $dd = User::where('type', '=', $bt_id->id)->get();
        if (count($dd) == 0)
            return null;

        $dd_id = $dd[0]->id;

        $objects = DB::table('user_properties')
            ->join('user_assigned_properties', 'user_assigned_properties.property', '=', 'user_properties.id')
            ->where('user_properties.title', '=', $property)
            ->where('user_properties.type', '=', $bt_id->id)
            ->where('user_assigned_properties.user', '=', $dd_id)
            ->get(['user_assigned_properties.value']);

        if (count($objects) == 0)
            return null;

        return $objects[0]->value;
    }


    public static function saveProperties(Request $request, $type, $user_id)
    {

        $bt_id = UserType::where('title', '=', $type)->first();
        $properties = UserProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();

        PropertyController::saveProperties(
            $request,
            'user',
            $user_id,
            $properties,
            'user_assigned_properties',
            'user_assigned_property_values',
            config('base.object_types.user_assigned_property'));

    }


    public static function getProperties($type, $id = null)
    {

        $bt_id = UserType::where('title', '=', $type)->first();
        $properties = UserProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->orderBy('level')->get();

        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $property_values = UserPropertyValue::whereIn('property', $property_ids)->get();

        if (is_null($id)) {
            $assigned_properties = null;
        } else {
            $assigned_properties = DB::table("user_assigned_properties")->where('user', '=', $id)->get();
        }

        return PropertyController::getProperties(
            'user_properties',
            'user_assigned_properties',
            'user_assigned_property_values',
            $properties,
            $property_values,
            $assigned_properties,
            config('base.object_types.user_assigned_property')
        );

    }


    public static function isUserExistsBasedOnEmail($email)
    {
        $us = User::where('email', '=', $email)->get();
        if (count($us) > 0)
            return $us[0]->id;
        else
            return 0;
    }

    public static function getUserBasedOnEmail($email)
    {
        $us = User::where('email', '=', $email)->get();
        if (count($us) > 0)
            return $us[0];
        else
            return null;
    }

    public static function isUserExistsBasedOnMobile($type, $mobile)
    {
        $bt_id = UserType::where('title', '=', $type)->first();
        $bt_id = $bt_id->id;

        $prs = UserProperty::where('type', '=', $bt_id)
            ->where('title', '=', 'mobile')
            ->get();

        $pr_id = $prs[0]->id;

        $us = DB::table('user_assigned_properties')
            ->where('property', '=', $pr_id)
            ->where('value', '=', $mobile)
            ->get();
        if (count($us) > 0)
            return $us[0]->user;
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

        $cc = User::where('type', '=', $type)->count();
        return $cc;
    }

    public static function get($type)
    {
        $bt_id = UserType::where('title', '=', $type)->first();

        $cc = User::where('type', '=', $bt_id->id)->get();
        return $cc;
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


        $bt_id = UserType::where('title', '=', $type)->first();
//        return $bt_id;
//        $hotel = Data::where('base_type', '=', $bt_id->id)->where('id', '=', $id)->get();

//        $data ['hotel'] = $hotel;
//        $data ['type'] = $type;
        $data ['type'] = $bt_id;


        $data ['datas'] = self::getItems($type);
        $data ['widgets'] = WidgetController::getWidgets("users.index", 'user', $type);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);

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
    public function create($type)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data, $type);


        $data['type'] = $type;
//        $data ['user'] = UserController::getCurrentUserData();
//        $data['navigations'] = NavigationController::getNavigation('admin');


        $props = self::getProperties($type);


        $prop = new stdClass();
        $prop->id = -1;
        $prop->title = 'email';
        $prop->default_value = '-';
        $prop->input_type = 'text';
        $prop->level = 1;
        $prop->type = 1;
        $prop->is_setting = 0;
        $prop->should_be_validated = 0;
        $prop->validation_rules = 'required';
        $prop->is_key = 0;
        $prop->is_fillable = 0;
        $prop->fillation_rules = 'direct';
        $prop->have_child = 0;
        $prop->can_be_filled = 1;
        $prop->parent = 0;
        $prop->created_at = null;
        $prop->updated_at = "2019-05-11 23:10:43";
        $prop->locales = ["fa" => "ایمیل", "en" => "email", "ar" => "الایمیل"];
        $props[] = $prop;

        $prop = new stdClass();
        $prop->id = -1;
        $prop->title = 'password';
        $prop->default_value = '-';
        $prop->input_type = 'text';
        $prop->level = 1;
        $prop->type = 1;
        $prop->is_setting = 0;
        $prop->should_be_validated = 0;
        $prop->validation_rules = 'required';
        $prop->is_key = 0;
        $prop->is_fillable = 0;
        $prop->fillation_rules = 'direct';
        $prop->have_child = 0;
        $prop->can_be_filled = 1;
        $prop->parent = 0;
        $prop->created_at = null;
        $prop->updated_at = "2019-05-11 23:10:43";
        $prop->locales = ["fa" => "رمز عبور", "en" => "password", "ar" => "الرمز العبور"];

        $props[] = $prop;

        $data['properties'] = $props;

        $r_std = new stdClass();
        $r_std->title = 'role';
        $r_std->level = 1;
        $r_std->input_type = 'select';
        $r_std->type = 1;
        $r_std->parent = 0;
        $r_std->default_value = "";


        $user_roles = Auth::user()->getRoleNames();
        $best_role_id = 100000;
        foreach ($user_roles as $user_role) {
            $rl = Role::findByName($user_role);
            if ($rl->id < $best_role_id) {
                $best_role_id = $rl->id;
            }
        }


        if ($type == 'user') {

            $roles = Role::all();
            $values = [];
            foreach ($roles as $role) {
                if ($role->id <= $best_role_id)
                    continue;

                $s = new stdClass();
                $s->title = $role->name;
                $s->value = $role->name;
                $values[] = $s;
            }

            $r_std->values = $values;
            $r_std->assigned = "";
            $data['properties'][] = $r_std;
        }


        $data ['images'] = DocumentController::getItems('general');

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);

//        return $data;


        $bt_id = UserType::where('title', '=', $type)->first();

        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id));

        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id)),
                'url' => route('users.index', ['type' => $type])
            ],
            [
                'title' => trans('messages.create new item'),
                'url' => ''
            ]
        ];


        return view("admin.items.views.create", $data);

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
        $bt_id = UserType::where('title', '=', $type)->first();
        $type_id = $bt_id->id;
        $rules = UserPropertyController::createValidationRules($type_id);

        $rules['email'] = 'required';
        $rules['password'] = 'required';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {


            $data = new User();
            $data->type = $bt_id->id;
            $data->email = $request->input('email');
            $data->password = Hash::make($request->input('password'));
            $data->save();

//        return;
//        return $request->keys();

            self::saveProperties($request, $type, $data->id);
//        return;

            if ($type == 'user') {
                if ($request->input('role') != null) {
                    $data->assignRole($request->input('role'));
                }
            } else {
                $data->assignRole('customer');
            }

            $rels = [];
            $rel_d = new stdClass();
            $rel_d->object_id = $data->id;
            $rel_d->object_type = config("base.object_types.user");
            $rels[] = $rel_d;

            $rel_u = new stdClass();
            $rel_u->object_id = \Auth::id();
            $rel_u->object_type = config("base.object_types.user");
            $rels[] = $rel_u;

            RelationController::createRelation($type, $rels);


            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);

        //        return;
//        return redirect()->route("users.index", ['type' => $type]);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show(User $property)
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

        $data ['images'] = DocumentController::getItems('general');
        $data['type'] = $type;
        $data['s_user'] = User::find($id);
        $data['properties'] = self::getProperties($type, $id);
        $data['id'] = $id;


        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type, $id);


        $bt_id = UserType::where('title', '=', $type)->first();

        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id));

        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id)),
                'url' => route('users.index', ['type' => $type])
            ],
            [
                'title' => trans('messages.edit existing item'),
                'url' => ''
            ]
        ];


        return view("admin.items.views.edit", $data);

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

        $bt_id = UserType::where('title', '=', $type)->first();
        $type_id = $bt_id->id;
        $rules = UserPropertyController::createValidationRules($type_id, false, $id);

        $rules['email'] = 'required';
//        $rules['password'] = 'required';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {

            $user = User::find($id);
            if ($user->email != $request->input('email')) {
                $user->email = $request->input('email');
                $user->save();
            }

            DB::table('user_assigned_properties')
                ->where('user', '=', $id)
                ->delete();

            self::saveProperties($request, $type, $id);

            return response()->json(['success' => 'Added new records.']);
        }


        return response()->json(['error' => $validator->errors()->all()]);

//        return redirect()->route("users.index", ['type' => $type]);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $property)
    {
        //
    }

}
