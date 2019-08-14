<?php

namespace App\Http\Controllers;

use App\DocumentType;
use App\Navigation;
use App\NavigationItem;
use App\NavigationItemProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use stdClass;

class NavigationController extends Controller
{

    public static function removeNavigations($type)
    {

        $item_properties = DB::table('navigation_item_assigned_properties')
            ->where('property', '=', 4)
            ->where('value', '=', $type)
            ->get();

        $items_ids = [];
        foreach ($item_properties as $item_property) {
            $items_ids[] = $item_property->navigation_item;
        }


        DB::table('navigation_items')
            ->whereIn('id', $items_ids)
            ->delete();

        DB::table('navigation_item_assigned_properties')
            ->whereIn('navigation_item', $items_ids)
            ->delete();

        return true;
    }


    public static function createNavigationItem($navigation, $title_en, $title_fa, $title_ar)
    {

        $nv = Navigation::where('title', '=', $navigation)->first();
        $nv_id = $nv->id;
        $nvi = new NavigationItem();
        $nvi->navigation = $nv_id;
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
                'value' => str_replace(' ', '-', $title_en),
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


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function index()
    {
//        return "asdasdsad";
        $data = [];
        $data['navigations'] = NavigationController::getNavigation('admin');
        $data ['user'] = UserController::getCurrentUserData();
        $navs = Navigation::get(['id', 'title']);

        for ($i = 0; $i < count($navs); $i++) {

            $items = NavigationItem::where('navigation', '=', $navs[$i]->id)
                ->get(['id', 'navigation']);

            for ($j = 0; $j < count($items); $j++) {

                $props = DB::table('navigation_item_assigned_properties')
                    ->join('navigation_item_properties', 'navigation_item_assigned_properties.property', '=', 'navigation_item_properties.id')
                    ->where('navigation_item_assigned_properties.navigation_item', '=', $items[$j]->id)
                    ->where('navigation_item_properties.is_setting', '=', 0)
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


//        $routes = Route::getRoutes();
//        foreach ($routes as $route) {
//            /** @var \Illuminate\Routing\Route $route */
//            echo "<hr>";
//            echo $route->uri . PHP_EOL;
//            echo "<br>";
//            echo $route->getName();
//            echo "<br>";
//            echo $route->getPrefix();
//            echo "<br>";
//            echo $route->getActionMethod();
//        }


//        return $routes;


//        return $data;


        $pages = DocumentType::where('parent', '=', 5)->get();

        $data['pages'] = $pages;

//        return $data;
        return view("admin.navigation.index", $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
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
     * @param \App\Navigation $navigation
     * @return \Illuminate\Http\Response
     */
    public
    function show(Navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Navigation $navigation
     * @return \Illuminate\Http\Response
     */
    public
    function edit(Navigation $navigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Navigation $navigation
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, Navigation $navigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Navigation $navigation
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Request $request)
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

    public
    static function getNavigation($navigation)
    {


        $nav = Navigation::where('title', '=', $navigation)->first();
        $nav_id = $nav->id;

        $items = NavigationItem::where('navigation', '=', $nav_id)->get(['id', 'link_type']);


        $ex_items = [];

        for ($i = 0; $i < count($items); $i++) {

            $properties = DB::table('navigation_item_assigned_properties')
                ->join('navigation_item_properties', 'navigation_item_properties.id', '=', 'navigation_item_assigned_properties.property')
                ->where('navigation_item_assigned_properties.navigation_item', '=', $items[$i]->id)
                ->where('navigation_item_properties.is_setting', '=', 0)
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

    public
    function getItems(Request $request)
    {

        $id = $request->input('id');

        $items = NavigationItem::where('navigation', '=', $id)
            ->get(['id', 'link_type']);

        for ($i = 0; $i < count($items); $i++) {

            $properties = DB::table('navigation_item_assigned_properties')
                ->join('navigation_item_properties', 'navigation_item_properties.id', '=', 'navigation_item_assigned_properties.property')
                ->where('navigation_item_assigned_properties.navigation_item', '=', $items[$i]->id)
                ->where('navigation_item_properties.is_setting', '=', 0)
                ->get(['navigation_item_assigned_properties.id', 'navigation_item_properties.title', 'navigation_item_assigned_properties.value']);

            $obj = new stdClass();
            foreach ($properties as $property) {

                if ($property->title == 'title') {

                    $t = TranslationController::getTranslatedForCell(app()->getLocale(), 'navigation_item_assigned_properties', 'value', $property->id);
                    $obj->{$property->title} = $t != null ? $t : $property->value;

                } else {
                    $obj->{$property->title} = $property->value;
                }

//                $obj->{$property->title} = $property->value;
            }
//            return $properties;
            $items[$i]->properties = $obj;

        }

//        return $items;

        $res = "<table>";
        $res .= "<tr>";

        $res .= "<th>enabled</th>";
        $res .= "<th>delete</th>";
        $res .= "<th>title</th>";
//        $res .= "<th>route</th>";
//        $res .= "<th>key</th>";
//        $res .= "<th>value</th>";


        $res .= "<th>url</th>";

        $res .= "</tr>";

        foreach ($items as $item) {
            $res .= "<tr>";
            if (isset($item->properties->enabled) && $item->properties->enabled == 1) {
                $res .= "<td><div class='switch'><label>Off<input type='checkbox' id='enabled-{$item->id}' checked><span class='lever'></span>On</label></div></td>";
            } else if (isset($item->properties->enabled) == false || $item->properties->enabled == 0) {
                $res .= "<td><div class='switch'><label>Off<input type='checkbox' id='enabled-{$item->id}'><span class='lever'></span>On</label></div></td>";
            }
//            $res .= "<td>{$item->properties->enabled}</td>";

            $res .= "<td><input type='button' value='حذف' class='btn red' id='delete-{$item->id}'></td>";

//            $s= __('messages.input_titles')[$item->properties->title]

            $res .= "<td>{$item->properties->title}</td>";
//            $res .= "<td>{$item->properties->route}</td>";
            if (isset($item->properties->key) && isset($item->properties->value)) {

                $url = route($item->properties->route, [$item->properties->key => $item->properties->value]);
                $res .= "<td dir='ltr'><a href='$url' target='_blank'>$url</a></td>";
//                $res .= "<td>{$item->properties->key}</td>";
//                $res .= "<td>{$item->properties->value}</td>";
            } else {
                $url = route($item->properties->route);
                $res .= "<td dir='ltr'><a href='$url' target='_blank'> $url</a></td>";

//                $res .= "<td></td>";
//                $res .= "<td></td>";
            }
            $res .= "</tr>";
        }

        $res .= "</table>";
//        return $res;
        return response()->json(['error' => false, 'message' => $res]);
    }

    public
    function getRoutes(Request $request)
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


    public
    function changeProperty(Request $request)
    {
        $did = $request->input('id');
        $value = $request->input('value');
        $key = $request->input('key');


        //        return response()->json(["error" => 0, 'message' => "dassasdadds"]);
//        return response()->json(["error" => 0, 'message' => $did . " " . $value . " " . $key]);


        $dtid = NavigationItem::where('id', '=', $did)->get();
        $nav_id = $dtid[0]->navigation;

        $setts = NavigationItemProperty::where('navigation', '=', $nav_id)->where('is_setting', '=', 1)->get();
        $max_items = 0;
        foreach ($setts as $sett) {
            if ($sett->title == 'max-navigation-items') {
                $max_items = $sett->default_value;
            }
        }

        $p = NavigationItemProperty::where('title', '=', $key)->where('navigation', '=', 1)->get();
        $pid = $p[0]->id;


        $nvs = NavigationItem::where('navigation', '=', $nav_id)->get();
        $navs = [];
        foreach ($nvs as $nv) {
            $navs [] = $nv->id;
        }

        if ($max_items != 0) {

            $ttc = DB::table('navigation_item_assigned_properties')
                ->whereIn('navigation_item', $navs)
                ->where('property', '=', $pid)
                ->where('value', '=', 1)
                ->get();

            $current_enabled_items = count($ttc);

            if ($value == 1 && $max_items == $current_enabled_items) {
                return response()->json(["error" => 1, 'message' => 'max items']);
            }

        }
//        return response()->json(["error" => 0, 'message' => 'success']);

        DB::table('navigation_item_assigned_properties')
            ->where('navigation_item', '=', $did)
            ->where('property', '=', $pid)
            ->update([
                'value' => $value
            ]);

//        return response()->json(["error" => 0, 'message' => $pid ]);

        return response()->json(["error" => 0, 'message' => 'success']);
    }


}
