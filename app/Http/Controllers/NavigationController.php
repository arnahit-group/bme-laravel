<?php

namespace App\Http\Controllers;

use App\Navigation;
use App\NavigationItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use stdClass;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        return view("navigation.index", $data);
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
    public function destroy(Navigation $navigation)
    {
        //
    }

    public static function getNavigation($navigation)
    {
        $nav = Navigation::where('title', '=', $navigation)->first();
        $nav_id = $nav->id;

        $items = NavigationItem::where('navigation', '=', $nav_id)->get(['id', 'link_type']);


        for ($i = 0; $i < count($items); $i++) {

            $properties = DB::table('navigation_item_assigned_properties')
                ->join('navigation_item_properties', 'navigation_item_properties.id', '=', 'navigation_item_assigned_properties.property')
                ->where('navigation_item_assigned_properties.navigation_item', '=', $items[$i]->id)
                ->get(['navigation_item_properties.title', 'navigation_item_assigned_properties.value']);

            $obj = new stdClass();
            foreach ($properties as $property) {
                $obj->{$property->title} = $property->value;
            }

//            return $properties;
            $items[$i]->properties = $obj;

        }

        return $items;

    }

    public function getItems(Request $request)
    {

        $id = $request->input('id');

        $items = NavigationItem::where('navigation', '=', $id)->get(['id', 'link_type']);

        for ($i = 0; $i < count($items); $i++) {
            $properties = DB::table('navigation_item_assigned_properties')
                ->join('navigation_item_properties', 'navigation_item_properties.id', '=', 'navigation_item_assigned_properties.property')
                ->where('navigation_item_assigned_properties.navigation_item', '=', $items[$i]->id)
                ->get(['navigation_item_properties.title', 'navigation_item_assigned_properties.value']);

            $obj = new stdClass();
            foreach ($properties as $property) {
                $obj->{$property->title} = $property->value;
            }
//            return $properties;
            $items[$i]->properties = $obj;

        }

//        return $items;

        $res = "<table>";
        $res .= "<tr>";

        $res .= "<th>enabled</th>";
        $res .= "<th>title</th>";
//        $res .= "<th>route</th>";
//        $res .= "<th>key</th>";
//        $res .= "<th>value</th>";


        $res .= "<th>url</th>";

        $res .= "</tr>";

        foreach ($items as $item) {
            $res .= "<tr>";
            if (isset($item->properties->enabled) && $item->properties->enabled == 1) {
                $res .= "<td>  <i class='material-icons'>check</i></td>";
            } else if (isset($item->properties->enabled) == false || $item->properties->enabled == 0) {
                $res .= "<td><i class='material-icons'>clear</i></td>";
            }
//            $res .= "<td>{$item->properties->enabled}</td>";



//            $s= __('messages.input_titles')[$item->properties->title]

            $res .= "<td>{$item->properties->title}</td>";
//            $res .= "<td>{$item->properties->route}</td>";
            if (isset($item->properties->key) && isset($item->properties->value)) {

                $url = route($item->properties->route,[$item->properties->key =>$item->properties->value]);
                $res .= "<td dir='ltr'>$url</td>";
//                $res .= "<td>{$item->properties->key}</td>";
//                $res .= "<td>{$item->properties->value}</td>";
            } else {
                $url = route($item->properties->route);
                $res .= "<td dir='ltr'>$url</td>";

//                $res .= "<td></td>";
//                $res .= "<td></td>";
            }
            $res .= "</tr>";
        }

        $res .= "</table>";
//        return $res;
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

}
