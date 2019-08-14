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

    public static function getTranslationsForTable($table, $field, $records = null, $normalize = false)
    {
        $trs = null;
        if (is_null($records)) {
            $trs = Translation::where('table', '=', $table)
                ->where('field', '=', $field)
                ->orderBy('record', 'asc')
                ->get(['locale', 'record', 'value']);
        } elseif (is_array($records)) {
            $trs = Translation::where('table', '=', $table)
                ->where('field', '=', $field)
                ->whereIn('record', $records)
                ->orderBy('record', 'asc')
                ->get(['locale', 'record', 'value']);
        } else {
            $trs = Translation::where('table', '=', $table)
                ->where('field', '=', $field)
                ->where('record', $records)
                ->orderBy('record', 'asc')
                ->get(['locale', 'record', 'value']);
        }


        if (is_null($trs))
            return null;


        if (!$normalize)
            return $trs;


        $translates = [];

        foreach ($trs as $tr) {
//            echo $tr->record;
//            echo "<br>";
            $translates[$tr->record][$tr->locale] = $tr->value;
        }

        return $translates;

    }


    public static function getTranslatedForCell($locale, $table, $field, $record)
    {

        $obj = Translation::where('locale', '=', $locale)
            ->where('table', '=', $table)
            ->where('field', '=', $field)
            ->where('record', '=', $record)
            ->get(['value']);


        if (count($obj) == 0)
            return null;

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
