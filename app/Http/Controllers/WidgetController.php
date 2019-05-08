<?php

namespace App\Http\Controllers;

use App\Widget;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function getWidgets($view, $type, $sub_type)
    {
//        echo $view;
//        echo "<br>";
//        echo config('base.object_types.' . $type);
//
//        echo "<br>";
//
//        echo config('base.' . $type . '_types.' . $sub_type);

        $widgets = Widget::where('view', '=', $view)
            ->join('widget_parts', 'widgets.id', '=', 'widget_parts.widget')
            ->join('widget_part_types', 'widget_part_types.id', '=', 'widget_parts.widget_part_type')
            ->where('object_type', '=', config('base.object_types.' . $type))
            ->where('object_id', '=', config('base.' . $type . '_types.' . $sub_type))
            ->get(['widget_parts.name', 'widget_part_types.title as type']);

        return $widgets;
    }

    public static function getWidgets2($view, $type, $sub_type, $route)
    {
//        echo $view;
//        echo "<br>";
//        echo config('base.object_types.' . $type);
//
//        echo "<br>";
//
//        echo config('base.' . $type . '_types.' . $sub_type);

        $widgets = Widget::where('view', '=', $view)
            ->join('widget_parts', 'widgets.id', '=', 'widget_parts.widget')
            ->join('widget_part_types', 'widget_part_types.id', '=', 'widget_parts.widget_part_type')
            ->where('object_type', '=', config('base.object_types.' . $type))
            ->where('route', '=', $route)
            ->where('object_id', '=', config('base.' . $type . '_types.' . $sub_type))
            ->get(['widget_parts.name', 'widget_part_types.title as type']);



//        dd($widgets);

        return $widgets;
    }


    public function index()
    {
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
     * @param  \App\Widget $widget
     * @return \Illuminate\Http\Response
     */
    public function show(Widget $widget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Widget $widget
     * @return \Illuminate\Http\Response
     */
    public function edit(Widget $widget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Widget $widget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Widget $widget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Widget $widget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Widget $widget)
    {
        //
    }
}
