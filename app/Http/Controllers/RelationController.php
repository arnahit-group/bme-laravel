<?php

namespace App\Http\Controllers;

use App\Relation;
use App\RelationProperty;
use App\RelationType;
use DB;
use Illuminate\Http\Request;
use stdClass;

class RelationController extends Controller
{

    public static function getBaseInforamation(&$data,$type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.relations.items'))
                && $navs[$i]->properties->value == $type) {
                $navs[$i]->active = true;
            } else {
                $navs[$i]->active = false;
            }
        }

        $data['navigations'] = $navs;

    }
















    public static function createRelation($relation_type, $rels = [])
    {
        $relation = new Relation();
        $relation->title = 'insert ' . $relation_type;
        $relation->type = '1';
        $relation->save();

        foreach ($rels as $rel) {
            DB::table('relation_objects')->insert(
                [
                    'object_type' => $rel->object_type,
                    'relation' => $relation->id,
                    'object_id' => $rel->object_id,
                ]
            );
        }

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {

        $data = BaseController::createBaseInformations();
        RelationController::getBaseInforamation($data,$type);

        $bt_id = RelationType::where('title', '=', $type)->first();

        $children = RelationType::where('parent', '=', $bt_id->id)->get();
        if (count($children) > 0) {

            $data['relations'] = $children;
        } else {

            $data['relation'] = $children;
        }

        $data['type'] = $type;

        $data ['widgets'] = WidgetController::getWidgets("relation.index", 'relation', $type);

//        return $data ['widgets'];


        return view("relation.index", $data);

        //
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
        RelationController::getBaseInforamation($data,$type);

        $data['type'] = $type;


        $bt_id = RelationType::where('title', '=', $type)->first();
        $properties = RelationProperty::where('type', '=', $bt_id->id)->get();

//        for ($i = 0; $i < count($properties); $i++) {
//            if ($properties[$i]->input_type == 'select') {
//                $values = DataPropertyValue::where('property', '=', $properties[$i]->id)->get();
//                $properties[$i]->values = $values;
//            }
//        }

        $data['properties'] = $properties;

        $data['rooms'] = DataController::getItems('room');


//        return $data;


        return view('relation.create', $data);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request, $type)
    {

        $bt_id = RelationType::where('title', '=', $type)->first();

        $relationType = new RelationType();
        $relationType->parent = $bt_id->id;
        $relationType->title = $request->input('title');
        $relationType->save();

        $properties = RelationProperty::where('type', '=', $bt_id->id)->get(['id', 'title']);


        $to_add = [];
        foreach ($properties as $property) {
            if ($request->input($property->title) == null) {

                if ($property->input_type == "date") {
                    $date = round(microtime(true) * 1000, 0);
                    $to_add[$property->title] = $date;
                } else {
                    $to_add[$property->title] = "";
                }

            }
        }

        $request->merge($to_add);
        $keys = $request->keys();

        $vs = [];

        $prices = $request->input('price');

        $ex = 'price';

        foreach ($prices as $key => $value) {

            $relation = new Relation();
            $relation->title = "";
            $relation->type = $relationType->id;
            $relation->save();

            $rel_obj = DB::table('relation_objects')
                ->insertGetId(
                    [
                        'relation' => $relation->id,
                        'object_type' => 1,
                        'object_id' => $key
                    ]
                );


            foreach ($properties as $property) {
                $add_to_database = [];
                foreach ($keys as $k) {
                    if ($property->title == $k) {
                        $add_to_database['property'] = $property->id;

                        if ($property->title == $ex) {
                            $add_to_database['value'] = $value;
                        } else {
                            $add_to_database['value'] = $request->input($k);
                        }

                        $add_to_database['relation'] = $relation->id;
                    }
                }

                DB::table('relation_assigned_properties')
                    ->insert($add_to_database);
            }

        }


        return redirect()->route("relations.index", ['type' => $type]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Relation $relation
     * @return \Illuminate\Http\Response
     */
    public
    function show(Relation $relation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relation $relation
     * @return \Illuminate\Http\Response
     */
    public
    function edit(Relation $relation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Relation $relation
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, Relation $relation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relation $relation
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Relation $relation)
    {
        //
    }


    public
    function getRelation(Request $request)
    {

        $id = $request->input('type');


    }


    public
    function getItems(Request $request)
    {

        $id = $request->input('id');
        $items = Relation::where('type', '=', $id)->get(['id', 'type']);

        for ($i = 0; $i < count($items); $i++) {

            $properties = DB::table('relation_objects')
                ->join('data', 'relation_objects.object_id', '=', 'data.id')
                ->join('data_properties', 'data_properties.data_type', '=', 'data.data_type')
                ->join('data_assigned_properties', 'data_assigned_properties.property', '=', 'data_properties.id')
                ->where('relation_objects.object_type', '=', 1)
                ->where('relation_objects.relation', '=', $items[$i]->id)
                ->get(['data_properties.title', 'data_assigned_properties.value']);

            $obj = new stdClass();
            foreach ($properties as $property) {
                $obj->{$property->title} = $property->value;
            }
            $items[$i]->properties = $obj;

        }

//        $res = "<table>";
//        $res .= "<tr>";
//
//        $res .= "<th>key</th>";
//        $res .= "<th>value</th>";
//
//        $res .= "</tr>";
//
//
//        foreach ($items as $item) {
//            $res .= "<tr>";
//
//
//            foreach ($item->properties as $key => $value) {
//                $res .= "<td>{$key}</td>";
//                $res .= "<td>{$value}</td>";
//            }
//
//            $res .= "</tr>";
//        }
//
//        $res .= "</table>";

        return response()->json(['error' => false, 'message' => $items]);
    }


}
