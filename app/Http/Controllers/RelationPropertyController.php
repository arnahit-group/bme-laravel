<?php

namespace App\Http\Controllers;

use App\RelationProperty;
use Illuminate\Http\Request;

class RelationPropertyController extends Controller
{

    public static function createValidationRules($type_id, $is_setting = false)
    {
        $props = RelationProperty::where('type', '=', $type_id)->where('is_setting', '=', $is_setting == true ? 1 : 0)->get();
        return PropertyController::createValidationRules($props);
    }

    public static function getPermissions($type)
    {
        $permissions = [];
        $permissions['create'] = "relations.properties.create" . ":" . $type;
        $permissions['store'] = "relations.properties.store" . ":" . $type;
        $permissions['update'] = "relations.properties.update" . ":" . $type;
        $permissions['edit'] = "relations.properties.edit" . ":" . $type;
        $permissions['destroy'] = "relations.properties.destroy" . ":" . $type;

        return $permissions;

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
     * @param  \App\RelationProperty  $relationProperty
     * @return \Illuminate\Http\Response
     */
    public function show(RelationProperty $relationProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RelationProperty  $relationProperty
     * @return \Illuminate\Http\Response
     */
    public function edit(RelationProperty $relationProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RelationProperty  $relationProperty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RelationProperty $relationProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RelationProperty  $relationProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelationProperty $relationProperty)
    {
        //
    }
}
