<?php

namespace App\Http\Controllers;

use App\Data;
use App\DataProperty;
use App\DataPropertyValue;
use App\DataType;
use App\Relation;
use App\RelationProperty;
use App\Translation;
use DB;
use Illuminate\Http\Request;
use stdClass;

class BaseController extends Controller
{

    public static function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    public static function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

    public static function createBaseInformations()
    {
        $data = [];
        $data['locales'] = config('base.locales');
        $data['user'] = UserController::getCurrentUserData();
        return $data;
    }

    public static function normalizePath($path)
    {
        if (stripos($path, '/public/') === false) {
            $path1 = substr_replace($path, '/public', strlen(url('/')), 0);
        } else {
            $path1 = str_replace('/public/', '/', $path);
        }
        return $path1;

    }

    public static function getBaseLocale()
    {
        $base_locale = DataController::getPropertyValue('website', 'base_locale');
        return $base_locale != app()->getLocale() ? true : false;
    }

    //

    public static function getDataProperties2($data_id)
    {
        $use_translates = BaseController::getBaseLocale();
        $data_type_id = Data::find($data_id)->data_type;
        $properties = DataProperty::where('data_type', '=', $data_type_id)->get();
        $assigned_properties = DB::table('data_assigned_properties')
            ->where('data', '=', $data_id)
            ->get();

        $assigned_property_ids = [];
        foreach ($assigned_properties as $assigned_property) {
            $assigned_property_ids[] = $assigned_property->id;
        }

        $assigned_values = DB::table('data_assigned_property_values')
            ->whereIn('assigned_property', $assigned_property_ids)
            ->get();

        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }


        $property_title_translations = TranslationController::getTranslationsForTable('data_properties', 'title', $property_ids, true);
        $assigned_property_value_translations = TranslationController::getTranslationsForTable('data_assigned_properties', 'value', $assigned_property_ids, true);

//        $props = PropertyController::getDataProperties2(
//            "data_properties",
//            "data_assigned_properties",
//            "data_assigned_property_values",
//            $properties,
//            $assigned_properties,
//            config('base.object_types.data_assigned_property')
//        );
//
//        return $props;


        $props = [];
        foreach ($properties as $property) {

            if ($property->parent != 0)
                continue;

            $cds = new stdClass();
            $cds->input_type = $property->input_type;
            $cds->level = $property->level;


//            print_r($property_title_translations);

//            return;

            $cds->locales = isset($property_title_translations[$property->id]) ? $property_title_translations[$property->id] : [];
//            foreach ($property_title_translations as $property_title_translation) {
//                if ($property_title_translation->record == $property->id) {
//                    $cds->locales[$property_title_translation->locale] = $property_title_translation->value;
//                }
//            }


            if ($property->input_type == "multi-text") {

                foreach ($assigned_properties as $assigned_property) {
                    if ($assigned_property->property == $property->id) {
                        $values = [];
                        foreach ($assigned_values as $assigned_value) {
                            if ($assigned_value->assigned_property == $assigned_property->id) {
                                $values [] = $assigned_value->value;
                            }
                        }
                        $cds->title = $values;
                        break;
                    }
                }

            } elseif ($property->input_type == 'multi-relation-document-images') {

                foreach ($assigned_properties as $assigned_property) {
                    if ($assigned_property->property == $property->id) {

                        $vs = DB::table('relation_objects')
                            ->where('object_type', '=', config('base.object_types.data_assigned_property'))
                            ->where('object_id', '=', $assigned_property->id)
                            ->select('relation_objects.relation')
                            ->get();

                        $std = [];
                        foreach ($vs as $v) {
                            $rs = DB::table('relation_objects')
                                ->join('document_assigned_properties', 'document_assigned_properties.document', '=', 'relation_objects.object_id')
                                ->where('relation', '=', $v->relation)
                                ->where('object_type', '=', config('base.object_types.document'))
                                ->where('property', '=', 4)
                                ->select('object_id', 'document_assigned_properties.value as path')
                                ->get();
                            if (count($rs) > 0)
                                $std[] = $rs[0]->path;
                        }

                        $cds->slides = $std;
//                        $cds->slides = PropertyController::getMultiImagesForRelatedProperty(config('base.object_types.data_assigned_property'), $assigned_property->id);
                        break;
                    }
                }

            } elseif ($property->input_type == 'single-relation-price') {

                foreach ($assigned_properties as $assigned_property) {
                    if ($assigned_property->property == $property->id) {


                        $vs = DB::table('relation_objects')
                            ->where('object_type', '=', config('base.object_types.data_assigned_property'))
                            ->where('object_id', '=', $assigned_property->id)
                            ->select('relation_objects.relation')
                            ->get();
                        $std = [];
                        foreach ($vs as $v) {
                            $rs = DB::table('relation_assigned_properties')
                                ->join('relation_properties', 'relation_assigned_properties.property', '=', 'relation_properties.id')
                                ->where('relation', '=', $v->relation)
                                ->select('relation_properties.title', 'relation_assigned_properties.property', 'relation_assigned_properties.value')
                                ->get();

                            if (count($rs) > 0)
                                $std[] = $rs[0]->value;

                        }

                        $cds->prices = $std;

                        //                        $cds->prices = PropertyController::getPriceForRelatedProperty(config('base.object_types.data_assigned_property'), $assigned_property->id);
                        break;
                    }
                }

            } elseif ($property->input_type == 'array-text') {


                $sub_props = [];
                $subs = [];
                foreach ($properties as $prop) {
                    if ($prop->parent == $property->id) {
                        $subs [] = $prop;
                    }
                }

                foreach ($subs as $sub) {

                    $cds_sub = new stdClass();

                    $svs = [];
                    foreach ($assigned_properties as $assigned_property) {
                        if ($assigned_property->property == $sub->id) {
                            $svs [] = $assigned_property;
                        }
                    }


//                    $svs = DB::table('data_assigned_properties')
//                        ->where('property', '=', $sub->id)
//                        ->get();


                    $vs = [];

                    foreach ($svs as $sv) {
                        if ($use_translates) {


                            $t = "";
                            $t = isset($assigned_property_value_translations[$sv->id][app()->getLocale()]) ? $assigned_property_value_translations[$sv->id][app()->getLocale()] : "";


//                            foreach ($assigned_property_value_translations as $assigned_property_value_translation) {
//                                if ($assigned_property_value_translation->record == $sv->id && $assigned_property_value_translation->locale == app()->getLocale()) {
//                                    $t = $assigned_property_value_translation->value;
//                                    break;
//                                }
//                            }
                            $vs[] = $t != null && $t != "" ? $t : $sv->value;

//                            $t = TranslationController::getTranslatedForCell(app()->getLocale(), 'data_assigned_properties', 'value', $sv->id);


                        } else {
                            $vs[] = $sv->value;
                        }
                    }

                    $cds_sub->title = $vs;
                    $cds_sub->input_type = $sub->input_type;
                    $cds_sub->level = $sub->level;
                    $sub_props[$sub->title] = $cds_sub;

                }


                $cds->sub_properties = $sub_props;


            } else {

                foreach ($assigned_properties as $assigned_property) {
                    if ($assigned_property->property == $property->id) {


                        if ($use_translates == true) {


                            $t = "";
                            $t = isset($assigned_property_value_translations[$assigned_property->id][app()->getLocale()]) ? $assigned_property_value_translations[$assigned_property->id][app()->getLocale()] : "";

//                            foreach ($assigned_property_value_translations as $assigned_property_value_translation) {
//                                if ($assigned_property_value_translation->record == $assigned_property->id && $assigned_property_value_translation->locale == app()->getLocale()) {
//                                    $t = $assigned_property_value_translation->value;
//                                    break;
//                                }
//                            }

                            $cds->title = $t != null && $t != "" ? $t : $assigned_property->value;

//                            $t = TranslationController::getTranslatedForCell(app()->getLocale(), 'data_assigned_properties', 'value', $assigned_property->id);
//                            $cds->title = $t != null ? $t : $assigned_property->value;


//                            $l = "";
//                            foreach ($property_title_translations as $property_title_translation) {
//                                if ($property_title_translation->record == $property->id && $property_title_translation->locale == app()->getLocale()) {
//                                    $l = $property_title_translation->value;
//                                    if ($l != "")
//                                        $cds->locale_text = $l;
//                                    break;
//                                }
//                            }

                            $l = "";
                            $l = isset($property_title_translations[$property->id][app()->getLocale()]) ? $property_title_translations[$property->id][app()->getLocale()] : "";
                            if ($l != "")
                                $cds->locale_text = $l;

//                            $l = TranslationController::getTranslatedForCell(app()->getLocale(), 'data_properties', 'title', $property->id);
//                            if (!is_null($l))
//                                $cds->locale_text = $l;


                        } else {
                            $cds->title = $assigned_property->value;
                        }


                        break;
                    }
                }

            }


            $props[$property->title] = $cds;
        }


        return $props;
    }


    public static function saveProperties(Request $request, $data_type, $data_id)
    {
        $locales = ['en', 'ar'];

        $bt_id = DataType::where('title', '=', $data_type)->first();
        $properties = DataProperty::where('data_type', '=', $bt_id->id)->get();


        $keys = $request->keys();
        $to_add_arrs = [];


        foreach ($properties as $property) {
            $to_add_arr = [];

            if (array_search($property->title, $keys) !== false) {
                $k_t = $keys[array_search($property->title, $keys)];
                $value = $request->input($k_t);


                if ($property->input_type == 'multi-relation-document-images') {


//                    continue;

                    $paths = $value;
                    $dp_id = DB::table('data_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'data' => $data_id,
                        ]
                    );


                    foreach ($paths as $path) {


                        $d = DB::table('document_assigned_properties')
                            ->where('value', '=', $path)
                            ->orWhere('value', '=', BaseController::normalizePath($path))
                            ->get();

                        $d_id = $d[0]->document;


                        $relation = new Relation();
                        $relation->title = 'raleted image to room';
                        $relation->relation_type = 1;
                        $relation->save();
                        $r_id = $relation->id;


                        DB::table('relation_objects')->insert(
                            [
                                'relation' => $r_id,
                                'object_type' => config('base.object_types.document'),
                                'object_id' => $d_id,
                            ]
                        );

                        DB::table('relation_objects')->insert(
                            [
                                'relation' => $r_id,
                                'object_type' => config('base.object_types.data_assigned_property'),
                                'object_id' => $dp_id,
                            ]
                        );

                    }


                } elseif ($property->input_type == 'single-relation-price') {

                    $dp_id = DB::table('data_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'data' => $data_id,
                        ]
                    );

                    $relation = new Relation();
                    $relation->title = 'related room to price';
                    $relation->relation_type = 5;
                    $relation->save();
                    $r_id = $relation->id;


                    DB::table('relation_objects')->insert(
                        [
                            'relation' => $r_id,
                            'object_type' => config('base.object_types.data_assigned_property'),
                            'object_id' => $dp_id,
                        ]
                    );


                    $r_props = RelationProperty::where('relation_type', '=', config('base.relation_types.price'))->get();

                    foreach ($r_props as $r_prop) {

//                        echo $r_props->id;
//                        echo "<br>";
//                        continue;
                        if ($r_prop->title == $property->title) {

                            DB::table('relation_assigned_properties')
                                ->insert(
                                    [
                                        'relation' => $r_id,
                                        'property' => $r_prop->id,
                                        'value' => $value,
                                    ]
                                );

                        } else {

                            DB::table('relation_assigned_properties')
                                ->insert(
                                    [
                                        'relation' => $r_id,
                                        'property' => $r_prop->id,
                                        'value' => 0,
                                    ]
                                );
                        }
                    }

                } elseif ($property->input_type == 'multi-text') {


                    $vs = $value;
                    $dp_id = DB::table('data_assigned_properties')->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            'data' => $data_id
                        ]
                    );

                    foreach ($vs as $v) {
                        DB::table('data_assigned_property_values')->insert(
                            [
                                'assigned_property' => $dp_id,
                                'value' => $v
                            ]
                        );
                    }


                } else {

                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => ($value == null ? '' : $value),
                        'data' => $data_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }


            } else {


                if ($property->input_type == 'check') {
                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '0',
                        'data' => $data_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }

            }
        }

        DB::table('data_assigned_properties')->insert(
            $to_add_arrs
        );


        $translates = [];
        foreach ($properties as $property) {
            if ($property->input_type == 'text') {
                $ptitle = $property->title;
                $pid = $property->id;
                $tr = [];
                foreach ($locales as $locale) {
                    if (array_search("$ptitle-{$locale}", $keys)) {

                        $k_t = $keys[array_search("$ptitle-{$locale}", $keys)];
                        $pvalue = $request->input($k_t);

                        $regid = DB::table('data_assigned_properties')
                            ->where('data', '=', $data_id)
                            ->where('property', '=', $property->id)
                            ->get(['id']);


                        $translates[] = [
                            'locale' => $locale,
                            'table' => 'data_assigned_properties',
                            'field' => 'value',
                            'record' => $regid[0]->id,
                            'value' => $pvalue,
                        ];
//                        DB::table('translations')->insert([
//                            'locale' => $locale,
//                            'table' => 'data_assigned_properties',
//                            'field' => 'value',
//                            'record' => $regid[0]->id,
//                            'value' => $pvalue,
//                        ]);
                    }
                }
            }
        }

//        return;
        DB::table('translations')->insert(
            $translates
        );


    }


    public static function getProperties($data_type, $id = null)
    {


        $bt_id = DataType::where('title', '=', $data_type)->first();
        $properties = DataProperty::where('data_type', '=', $bt_id->id)->orderBy('level')->get();

        for ($i = 0; $i < count($properties); $i++) {
            $values = DataPropertyValue::where('property', '=', $properties[$i]->id)->get();
            if (count($values) > 0)
                $properties[$i]->values = $values;

            $trs = Translation::where('table', '=', 'data_properties')
                ->where('field', '=', 'title')
                ->where('record', '=', $properties[$i]->id)
                ->get(['locale', 'value']);

            $ts = [];
            foreach ($trs as $tr) {
                $ts[$tr->locale] = $tr->value;
            }

            $properties[$i]->locales = $ts;

        }

        if (is_null($id))
            return $properties;


        $assigned = DB::table("data_assigned_properties")->where('data', '=', $id)->get();

        for ($i = 0; $i < count($properties); $i++) {

            $properties[$i]->assigned = "";
            if ($properties[$i]->input_type == 'multi-relation-document-images') {


                $ds_id = 0;
                foreach ($assigned as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $ds_id = $item->id;
                        break;
                    }
                }
                $rels = DB::table('relation_objects')
                    ->where('object_type', '=', config('base.object_types.data_assigned_property'))
                    ->where('object_id', '=', $ds_id)
                    ->get();

                $relations = [];
                foreach ($rels as $rel) {
                    $relations[] = $rel->relation;
                }
                $rels = DB::table('relation_objects')
                    ->join('document_assigned_properties', 'document_assigned_properties.document', '=', 'relation_objects.object_id')
                    ->whereIn('relation', $relations)
                    ->where('object_type', '=', config('base.object_types.document'))
                    ->where('document_assigned_properties.property', '=', 4)
                    ->get(['document_assigned_properties.value', 'document_assigned_properties.document']);
                $properties[$i]->assigned = $rels;


            } elseif ($properties[$i]->input_type == 'single-relation-price') {


                $ds_id = 0;
                foreach ($assigned as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $ds_id = $item->id;
                        break;
                    }
                }

                $rels = DB::table('relation_objects')
                    ->where('object_type', '=', config('base.object_types.data_assigned_property'))
                    ->where('object_id', '=', $ds_id)
                    ->get();

                if (count($rels) > 0) {
                    $relations = [];
                    foreach ($rels as $rel) {
                        $relations[] = $rel->relation;
                    }

                    $rel_id = $relations[0];

                    $rs_props = DB::table('relation_assigned_properties')
                        ->where('relation', '=', $rel_id)
                        ->where('property', '=', 1)
                        ->get();

                    $properties[$i]->assigned = $rs_props[0]->value;

                }


            } elseif ($properties[$i]->input_type == 'multi-text') {


                $dps_id = 0;
                foreach ($assigned as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $dps_id = $item->id;
                        break;
                    }
                }

                if ($dps_id == 0)
                    continue;

                $dpsvs = DB::table('data_assigned_property_values')
                    ->where('assigned_property', '=', $dps_id)
                    ->get(['data_assigned_property_values.value']);

                $ds = [];


                foreach ($dpsvs as $dpsv) {
                    $ds[] = $dpsv->value;
                }


                $properties[$i]->assigned = $ds;

            } else {


                foreach ($assigned as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $properties[$i]->assigned = $item->value;

                        if ($properties[$i]->input_type == 'text') {
                            $trs = DB::table('translations')
                                ->where('table', '=', 'data_assigned_properties')
                                ->where('field', '=', 'value')
                                ->where('record', '=', $item->id)
                                ->get(['locale', 'value']);

                            foreach ($trs as $tr) {

                                $k = 'assigned-' . $tr->locale;
                                $properties[$i]->{$k} = $tr->value;
                            }
                        }
                        break;
                    }
                }
            }
        }


        return $properties;
    }


    public static function getItems($data_type)
    {
        $bt_id = DataType::where('title', '=', $data_type)->first();
        $data ['data_type'] = $data_type;
        $objects = Data::where('data_type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($objects); $i++) {
            $objects[$i]->properties = self::getDataProperties2($objects[$i]->id);


            $res_date = round(microtime(true) * 1000, 0);

            $rels = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.data'))
                ->where('object_id', '=', $objects[$i]->id)
                ->get(['relation']);

            $base_rels = [];
            foreach ($rels as $rel) {
                $base_rels[] = $rel->relation;
            }

            $rel2s = DB::table('relation_objects')
//                ->join('service_assigned_properties', 'relation_objects.object_id', '=', 'service_assigned_properties.service')
//                ->join('service_properties', 'service_properties.id', '=', 'service_assigned_properties.property')
                ->where('object_type', '=', config('base.object_types.service'))
                ->whereIn('relation', $base_rels)
//                ->get(['service_properties.title', 'service_assigned_properties.value']);
                ->get(['object_id']);


            $situation = 'free';
            foreach ($rel2s as $rel2) {

                $std = new stdClass();
                $prps = DB::table('service_assigned_properties')
                    ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
                    ->where('service_assigned_properties.service', '=', $rel2->object_id)
                    ->get(['service_properties.title', 'service_assigned_properties.value']);

                foreach ($prps as $prp) {
                    $std->{$prp->title} = $prp->value;
                }

                if (isset($std->situation) && $std->situation == 7 && isset($std->end_date) && $std->end_date > $res_date) {
                    $situation = 'reserved';
                }
            }

//            $situation = 'free';
//            foreach ($rel2s as $rel2) {
//                if ($rel2->title = 'end_date' && $rel2->value > $res_date) {
//                    $situation = 'reserved';
//                    break;
//                }
//            }
            $objects[$i]->situation = $situation;

//            $objects[$i]->relation_count = count($rels);
//            $objects[$i]->relations = $rel2s;


        }
        return $objects;
    }


}
