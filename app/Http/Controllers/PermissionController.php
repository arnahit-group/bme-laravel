<?php

namespace App\Http\Controllers;

use App\DocumentType;
use App\Navigation;
use App\NavigationItem;
use Auth;
use DB;
use Illuminate\Http\Request;
use Lang;
use Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use stdClass;

class PermissionController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['navigations'] = NavigationController::getNavigation('admin');
        $data ['user'] = UserController::getCurrentUserData();


        $user_roles = Auth::user()->getRoleNames();
        $best_role_id = 100000;
        foreach ($user_roles as $user_role) {
            $rl = Role::findByName($user_role);
            if ($rl->id < $best_role_id) {
                $best_role_id = $rl->id;
            }
        }

        $roles = Role::where('id', '>=', $best_role_id)->get();
        $data['roles'] = $roles;


        $navs = Navigation::get(['id', 'title']);
        for ($i = 0; $i < count($navs); $i++) {

            $items = NavigationItem::where('navigation', '=', $navs[$i]->id)
                ->get(['id', 'navigation']);

            for ($j = 0; $j < count($items); $j++) {

                $props = DB::table('navigation_item_assigned_properties')
                    ->join('navigation_item_properties', 'navigation_item_assigned_properties.property', '=', 'navigation_item_properties.id')
                    ->where('navigation_item_assigned_properties.navigation_item', '=', $items[$j]->id)
                    ->get(['navigation_item_properties.title', 'navigation_item_assigned_properties.value']);

                $c = new stdClass();
                foreach ($props as $prop) {
                    $c->{$prop->title} = $prop->value;
                }
                $items[$j]->properties = $c;
            }

            $navs[$i]->items = $items;
        }

        $data['navs'] = $navs;

        $pages = DocumentType::where('parent', '=', 5)->get();

        $data['pages'] = $pages;


        return view("admin.permission.index", $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $type = $request->input('type');
        $title_fa = $request->input('title');
        $title_en = $request->input('title_en');
        $title_ar = $request->input('title_ar');
        $url = $request->input('url');
        $page = $request->input('page');
        $navigation = $request->input('navigation');

        $nvi = new NavigationItem();
        $nvi->navigation = $navigation;
        $nvi->link_type = 'route';
        $nvi->parent = 0;
        $nvi->save();


        $rec_id = DB::table('navigation_item_assigned_properties')
            ->insertGetId(
                [
                    'navigation_item' => $nvi->id,
                    'property' => 1,
                    'value' => $title_en,
                ]
            );

        $items = [
            [
                'navigation_item' => $nvi->id,
                'property' => 2,
                'value' => "home.document",
            ],
            [
                'navigation_item' => $nvi->id,
                'property' => 3,
                'value' => "document_type",
            ],
            [
                'navigation_item' => $nvi->id,
                'property' => 4,
                'value' => $page,
            ],
            [
                'navigation_item' => $nvi->id,
                'property' => 9,
                'value' => 1,
            ],
        ];


        DB::table('navigation_item_assigned_properties')
            ->insert(
                $items
            );

        $trs = [
            [
                'locale' => 'fa',
                'table' => 'navigation_item_assigned_properties',
                'field' => 'value',
                'record' => $rec_id,
                'value' => $title_fa
            ],
            [
                'locale' => 'en',
                'table' => 'navigation_item_assigned_properties',
                'field' => 'value',
                'record' => $rec_id,
                'value' => $title_en
            ],
            [
                'locale' => 'ar',
                'table' => 'navigation_item_assigned_properties',
                'field' => 'value',
                'record' => $rec_id,
                'value' => $title_ar
            ]
        ];

        DB::table('translations')->insert($trs);

        return response()->json(['error=>false', 'message' => 'success']);


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Navigation $navigation
     * @return \Illuminate\Http\Response
     */
    public function show(Navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navigation $navigation
     * @return \Illuminate\Http\Response
     */
    public function edit(Navigation $navigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Navigation $navigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navigation $navigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navigation $navigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $id = $request->input('id');

        DB::table('navigation_items')
            ->where('id', '=', $id)
            ->delete();

        DB::table('navigation_item_assigned_properties')
            ->where('navigation_item', '=', $id)
            ->delete();


        return response()->json(['error' => false, 'message' => 'success']);
        //
    }

    public static function getNavigation($navigation)
    {


        $nav = Navigation::where('title', '=', $navigation)->first();
        $nav_id = $nav->id;

        $items = NavigationItem::where('navigation', '=', $nav_id)->get(['id', 'link_type']);


        $ex_items = [];

        for ($i = 0; $i < count($items); $i++) {

            $properties = DB::table('navigation_item_assigned_properties')
                ->join('navigation_item_properties', 'navigation_item_properties.id', '=', 'navigation_item_assigned_properties.property')
                ->where('navigation_item_assigned_properties.navigation_item', '=', $items[$i]->id)
                ->get(['navigation_item_assigned_properties.id', 'navigation_item_properties.title', 'navigation_item_assigned_properties.value']);

            $obj = new stdClass();
            $to_add = false;
            foreach ($properties as $property) {
                if ($property->title == 'title') {
                    $t = TranslationController::getTranslatedForCell(app()->getLocale(), 'navigation_item_assigned_properties', 'value', $property->id);
                    $obj->{$property->title} = $t != null ? $t : $property->value;

                } else {
                    $obj->{$property->title} = $property->value;
                }

                if ($property->title == "enabled") {
                    if ($property->value == 1) {
                        $to_add = true;
                    } else {
                        $to_add = false;
                    }
                }
            }

            if ($to_add == true) {
                $items[$i]->properties = $obj;
                $ex_items[] = $items[$i];
            }

//            return $properties;
//            $items[$i]->properties = $obj;

        }

        return $ex_items;

    }

    public function getItems(Request $request)
    {

        $id = $request->input('id');

        $permissions = Permission::all();
        $grouped_items = $permissions->groupBy('category');
        $role = Role::findByName($id);
        $role_permissions = $role->getAllPermissions();

        $res = "";


        $user_roles = Auth::user()->getRoleNames();
        $best_role_id = 100000;
        foreach ($user_roles as $user_role) {
            $rl = Role::findByName($user_role);
            if ($rl->id < $best_role_id) {
                $best_role_id = $rl->id;
            }
        }


        foreach ($grouped_items as $k => $permissions) {

            $res .= "<div class='row'>";
            $res .= "<div class='col m12 s12 center'>";
            $res .= "<h3>$k</h3>";
            $res .= "</div>";
            $res .= "</div>";

            $res .= "<div class='row'>";

            foreach ($permissions as $permission) {

                if ($permission->accessible_by_role < $best_role_id)
                    continue;

                if ($permission->dependent_on != 0)
                    continue;

                $check = "";
                foreach ($role_permissions as $role_permission) {
                    if ($role_permission->name == $permission->name) {
                        $check = "checked";
                        break;
                    }
                }


                $desc = Lang::get('layout.permissions.' .$permission->description);

                $res .= "<div class='col m4 s12'>";
                $res .= "<input type='checkbox' id='perm-{$permission->name}' name='{$permission->name}' value='1' $check />";
                $res .= "<label for='perm-{$permission->name}'>$desc</label>";
                $res .= "</div>";

            }
            $res .= "</div>";


        }

        return response()->json(['error' => false, 'message' => $res]);

    }

    public function getRoutes(Request $request)
    {
        $type = $request->input('type');

        if ($type == 'route') {
            $s = [];

            $routes = Route::getRoutes();
            foreach ($routes as $route) {
                /** @var \Illuminate\Routing\Route $route */
//                echo "<hr>";
//                echo $route->uri . PHP_EOL;
//                echo "<br>";
                $s[] = $route->getName();
//                $s .= "<option value='{$route->getName()}'>{$route->getName()}</option>";
//                echo "<br>";
//                echo $route->getPrefix();
//                echo "<br>";
//                echo $route->getActionMethod();
            }
            return response()->json(['error' => false, 'message' => $s]);
        }

    }


    public function changeProperty(Request $request)
    {
        $did = $request->input('id');
        $value = $request->input('value');
        $role = $request->input('role');

        $role = Role::findByName($role);


//        return response()->json(["error" => 0, 'message' => $role->name ]);

        $perm = Permission::where('name', '=', $did)->get();


        $sub_perms = Permission::where('dependent_on', '=', $perm[0]->id)->get();
//        return response()->json(["error" => 0, 'message' => count($sub_perms)]);
//        return response()->json(["error" => 0, 'message' => $value]);

        if ($value == 1) {
            $role->givePermissionTo($did);
            foreach ($sub_perms as $sub_perm) {
                $role->givePermissionTo($sub_perm->name);
            }
        } elseif ($value == 0) {
            $role->revokePermissionTo($did);
            foreach ($sub_perms as $sub_perm) {
                $role->revokePermissionTo($sub_perm->name);
            }
        }

        return response()->json(["error" => 0, 'message' => 'success']);
    }


}
