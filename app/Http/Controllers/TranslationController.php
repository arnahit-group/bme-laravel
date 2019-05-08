<?php

namespace App\Http\Controllers;

use App\Translation;
use Illuminate\Http\Request;
use stdClass;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function getTranslatedForCell($locale, $table, $field, $record)
    {

//        echo "<br>";
//        echo "<br>";
//        echo "<br>";
//        echo "start";
//        echo "<br>";
//
//        echo $locale;
//        echo "<br>";
//        echo $table;
//        echo "<br>";
//        echo $field;
//        echo "<br>";
//        echo $record;
//        echo "<br>";
//        echo "end";
//        echo "<br>";
//        echo "<br>";
//        echo "<br>";

        $obj = Translation::where('locale', '=', $locale)
            ->where('table', '=', $table)
            ->where('field', '=', $field)
            ->where('record', '=', $record)
            ->get(['value']);


        if (count($obj) == 0)
            return null;

//        echo $obj[0]->value;
//        echo "<br>";

        return $obj[0]->value;

    }

    public static function getTranslatedForRecord($locale, $table, $record)
    {

        $objs = Translation::where('locale', '=', $locale)
            ->where('table', '=', $table)
            ->where('record', '=', $record)
            ->get(['field', 'value']);

        if (count($objs) == 0)
            return null;


        $std = new stdClass();
        foreach ($objs as $obj) {

            $std->{$obj->field} = $obj->value;

        }

        return $std;

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
     * @param  \App\Translation $translation
     * @return \Illuminate\Http\Response
     */
    public function show(Translation $translation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Translation $translation
     * @return \Illuminate\Http\Response
     */
    public function edit(Translation $translation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Translation $translation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Translation $translation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Translation $translation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Translation $translation)
    {
        //
    }
}
