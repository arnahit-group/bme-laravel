<?php

namespace App\Http\Controllers;

use App\TemplateProperty;
use Illuminate\Http\Request;

class TemplatePropertyController extends Controller
{

    public static function createValidationRules($template_id, $is_setting = false)
    {
        $props = TemplateProperty::where('template', '=', $template_id)->where('is_setting', '=', $is_setting == true ? 1 : 0)->get();
        return PropertyController::createValidationRules($props);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TemplateProperty  $templateProperty
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateProperty $templateProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TemplateProperty  $templateProperty
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateProperty $templateProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TemplateProperty  $templateProperty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TemplateProperty $templateProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TemplateProperty  $templateProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateProperty $templateProperty)
    {
        //
    }
}
