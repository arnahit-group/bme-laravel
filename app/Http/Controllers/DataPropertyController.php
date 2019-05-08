<?php

namespace App\Http\Controllers;

use App\DataProperty;
use App\DataPropertyValue;
use App\DataType;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPropertyController extends Controller
{

    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($data_type)
    {
        $data = BaseController::createBaseInformations();
        DataPropertyController::getBaseInforamation($data);


        $bt_id = DataType::where('title', '=', $data_type)->first();
        $properties = DataProperty::where('data_type', '=', $bt_id->id)->get();
        $data ['data_type'] = $data_type;
        $data ['properties'] = $properties;

        $data ['widgets'] = WidgetController::getWidgets("data.property.index", 'data', $data_type);

        return view("data.property.index", $data);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($data_type)
    {

        $data = BaseController::createBaseInformations();
        DataPropertyController::getBaseInforamation($data);

        $data['data_type'] = $data_type;
        return view("data.property.create", $data);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $data_type)
    {

        $bt_id = DataType::where('title', '=', $data_type)->first();

        $title = $request->input('title');
        $default_value = $request->input('default_value');
        $input_type = $request->input('input_type');
        $level = $request->input('level');

        $dp = new DataProperty();
        $dp->title = $title;
        $dp->data_type = $bt_id->id;
        $dp->default_value = $default_value;
        $dp->input_type = $input_type;
        $dp->level = $level;
        $dp->parent = 0;
        $dp->save();

        if ($request->input('values') != null) {
            $values = $request->input('values');
            foreach ($values as $value) {

                $dpv = new DataPropertyValue();
                $dpv->property = $dp->id;
                $dpv->value = $value;
                $dpv->save();

            }
        }

        $translates = [];
        $locales = config('base.locales');
        foreach ($locales as $locale) {

            $title_loc = $request->input("title-{$locale}");
            $translates[] = [
                'locale' => $locale,
                'table' => 'data_properties',
                'field' => 'title',
                'record' => $dp->id,
                'value' => $title_loc,
            ];
        }

        DB::table('translations')->insert(
            $translates
        );


//        return;


        return redirect()->route('data.properties.index', ['data_type' => $data_type]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show($data_type, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function edit($data_type, $id)
    {
        $data = BaseController::createBaseInformations();
        DataPropertyController::getBaseInforamation($data);

        $bt_id = DataType::where('title', '=', $data_type)->first();
//        return $bt_id->id;
        $data['data_type'] = $data_type;
        $data['id'] = $id;

        $props = DataProperty::find($id);
        $data['property'] = $props;

//        return $data;
        return view("data.property.edit", $data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $data_type, $id)
    {

        $bt_id = DataType::where('title', '=', $data_type)->first();

        $title = $request->input('title');
        $default_value = $request->input('default_value');
        $input_type = $request->input('input_type');
        $level = $request->input('level');

        $dp = DataProperty::find($id);
        $dp->title = $title;
        $dp->data_type = $bt_id->id;
        $dp->default_value = $default_value;
        $dp->input_type = $input_type;
        $dp->level = $level;
        $dp->parent = 0;
        $dp->save();

        if ($request->input('values') != null) {
            $values = $request->input('values');
            foreach ($values as $value) {

                $dpv = new DataPropertyValue();
                $dpv->property = $dp->id;
                $dpv->value = $value;
                $dpv->save();

            }
        }

        return redirect()->route('data.properties.index', ['data_type' => $data_type]);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($data_type, $id)
    {

        $data = [];
        $used = DB::table('data_assigned_properties')
            ->where('property', '=', $id)
            ->get();

        if (count($used) > 0) {
            $data['error'] = 1;
            $data['message'] = "you cant remove property that used before";
            return response()->json($data);
        }

        $dp = DataProperty::find($id);
        $dp->delete();

        DB::table('data_property_values')
            ->where('property', '=', $id)
            ->delete();


        $data['error'] = 0;
        $data['message'] = "property deleted";
        return response()->json($data);

        //
    }


    public function destroy_property(Request $request)
    {

        $id = $request->input('id');

        $data = [];
        $used = DB::table('data_assigned_properties')
            ->where('property', '=', $id)
            ->get();

        if (count($used) > 0) {
            $data['error'] = 1;
            $data['message'] = "you cant remove property that used before";
            return response()->json($data);
        }

        $dp = DataProperty::find($id);
        $dp->delete();

        DB::table('data_property_values')
            ->where('property', '=', $id)
            ->delete();


        $data['error'] = 0;
        $data['message'] = "property deleted";
        return response()->json($data);

        //
    }

}
