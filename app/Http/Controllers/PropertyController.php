<?php

namespace App\Http\Controllers;

use App\Navigation;
use App\Relation;
use App\RelationProperty;
use App\Rules\AppUnique;
use App\Rules\CheckLanguage;
use App\Template;
use DB;
use Illuminate\Http\Request;
use Image;
use Morilog\Jalali\jDateTime;
use stdClass;
use URL;

class PropertyController extends Controller
{


    public static function removeInvalidChars($value)
    {
        $search = array("\\", "\x00", "\n", "\r", "'", '"', "\x1a");
        $replace = array("\\\\", "\\0", "\\n", "\\r", "\'", '\"', "\\Z");
        return str_replace($search, $replace, $value);
    }

    public static function createValidationRulesForTypeOperations()
    {

        $rules = [
            'title' => 'required',
            'can_have_item' => 'required',
        ];

        return $rules;
    }


    public static function createValidationRulesForPropertyOperations()
    {

        $rules = [
            'title' => 'required',
            'level' => 'required',
            'default_value' => 'required',
            'input_type' => 'required',
        ];

        $locales = config('base.locales');
        foreach ($locales as $locale) {
            $rules ['title-' . $locale] = 'required';
        }

        return $rules;
    }


    public static function createValidationRules($props, $base_type, $id = 0)
    {

        $rules = [];
        $final_arr = [];
        foreach ($props as $prop) {
            if ($prop->validation_rules != '') {
                $arr = explode('|', $prop->validation_rules);

                foreach ($arr as $ar) {
                    if ($ar == 'app_unique') {
                        $final_arr [] = new AppUnique($base_type, $id, $prop->id);
                    } elseif (BaseController::startsWith($ar, 'check_language')) {
                        $final_arr [] = new CheckLanguage(['fa', 'en', 'ar'], 'fa');
                    } else {
                        $final_arr [] = $ar;
                    }
                }

                $rules[$prop->title] = $final_arr;
            }
        }
        return $rules;
    }


    public static function getMultiImagesForRelatedProperty($object_type, $assigned_propery_id)
    {

        $vs = DB::table('relation_objects')
            ->where('object_type', '=', $object_type)
            ->where('object_id', '=', $assigned_propery_id)
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
        return $std;
    }


    public static function getPriceForRelatedProperty($object_type, $assigned_propery_id)
    {

        $vs = DB::table('relation_objects')
            ->where('object_type', '=', $object_type)
            ->where('object_id', '=', $assigned_propery_id)
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

        return $std;

    }


    public static function getItems(
        $properties,
        $translations
    )
    {

        for ($i = 0; $i < count($properties); $i++) {

            $trs = [];
            foreach ($translations as $translation) {
                if ($translation->record == $properties[$i]->id) {
                    $trs [] = $translation;
                }
            }

            $ts = [];
            foreach ($trs as $tr) {
                $ts[$tr->locale] = $tr->value;
            }

            $properties[$i]->locales = $ts;
        }

        return $properties;

    }


    public static function getDataProperties2(
        $properties_table_name,
        $assigned_properties_table_name,
        $assigned_property_values_table_name,
        $properties,
        $assigned_properties,
        $object_assigned_property_code)
    {

        $use_translates = BaseController::getBaseLocale();


        $assigned_property_ids = [];
        foreach ($assigned_properties as $assigned_property) {
            $assigned_property_ids[] = $assigned_property->id;
        }

        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $property_title_translations = TranslationController::getTranslationsForTable(
            $properties_table_name, 'title', $property_ids, true);

        $assigned_property_value_translations = TranslationController::getTranslationsForTable(
            $assigned_properties_table_name, 'value', $assigned_property_ids, true);

        $assigned_values = DB::table($assigned_property_values_table_name)
            ->whereIn('assigned_property', $assigned_property_ids)
            ->get();

        foreach ($properties as $property) {
            foreach ($assigned_properties as $assigned_property) {
                if ($assigned_property->property == $property->id) {
                    $property->assigned = $assigned_property;
                    break;
                }
            }
        }


        $props = [];
        foreach ($properties as $property) {

            if ($property->parent != 0)
                continue;

            $cds = new stdClass();
            $cds->input_type = $property->input_type;
            $cds->level = $property->level;
            $cds->locales = isset($property_title_translations[$property->id]) ? $property_title_translations[$property->id] : [];

            if ($property->input_type == "multi-text") {

                if (!isset($property->assigned))
                    continue;

                $values = [];
                foreach ($assigned_values as $assigned_value) {
                    if ($assigned_value->assigned_property == $property->assigned->id) {
                        $values [] = $assigned_value->value;
                    }
                }
                $cds->title = $values;

            } elseif ($property->input_type == 'single-user-relation') {


                $r_id = $property->assigned->value;


                $rels = DB::table('relation_objects')
                    ->where('relation', '=', $r_id)
                    ->where('object_type', '=', config('base.object_types.user'))
                    ->get();

                $u_id = $rels[0]->object_id;
                $user = UserController::getItem($u_id);

                $cds->title = $user->email;

            } elseif ($property->input_type == 'multi-relation-document-images') {

                if (!isset($property->assigned))
                    continue;

                $cds->slides = PropertyController::getMultiImagesForRelatedProperty(
                    $object_assigned_property_code, $property->assigned->id);


            } elseif ($property->input_type == 'single-relation-price') {

                if (!isset($property->assigned))
                    continue;

                $cds->prices = PropertyController::getPriceForRelatedProperty(
                    $object_assigned_property_code,
                    $property->assigned->id);


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


                    $vs = [];

                    foreach ($svs as $sv) {
                        if ($use_translates) {

                            $t = isset($assigned_property_value_translations[$sv->id][app()->getLocale()])
                                ? $assigned_property_value_translations[$sv->id][app()->getLocale()] : "";
                            $vs[] = $t != null && $t != "" ? $t : $sv->value;

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

            } elseif ($property->input_type == 'date') {


                $sec = $property->assigned->value / 1000;
                $gr = date("d-m-Y", $sec);
                $gy = date("Y", $sec);
                $gm = date("m", $sec);
                $gd = date("d", $sec);
                $ja = jDateTime::toJalali($gy, $gm, $gd);


                $cds->title = $property->assigned->value;
                $cds->values['gr'] = $gr;
                $cds->values['ja'] = "{$ja[2]}/{$ja[1]}/{$ja[0]}";


            } else {

                if (!isset($property->assigned))
                    continue;

                if ($use_translates == true) {
                    $t = isset($assigned_property_value_translations[$property->assigned->id][app()->getLocale()]) ?
                        $assigned_property_value_translations[$property->assigned->id][app()->getLocale()] : "";
                    $cds->title = $t != null && $t != "" ? $t : $property->assigned->value;
                    $l = isset($property_title_translations[$property->id][app()->getLocale()])
                        ? $property_title_translations[$property->id][app()->getLocale()] : "";
                    if ($l != "")
                        $cds->locale_text = $l;
                } else {
                    $cds->title = $property->assigned->value;
                }

            }


            $props[$property->title] = $cds;
        }
        return $props;
    }


    public static function saveProperties(
        Request $request,
        $item_type,
        $item_id,
        $properties,
        $assigned_properties_table_name,
        $assigned_property_values_table_name,
        $object_assigned_property_code,
        $settings = null)
    {


//        dd($properties);

        $locales = ['en', 'ar'];

        $keys = $request->keys();
        $to_add_arrs = [];
        foreach ($properties as $property) {
            if ($property->parent != 0)
                continue;


            $to_add_arr = [];
            if (array_search($property->title, $keys) !== false) {

                $k_t = $keys[array_search($property->title, $keys)];

                if ($request->hasFile($k_t)) {
                    $value = $request->file($k_t);
                } else {
                    $value = $request->input($k_t);
                }


                if ($property->input_type == 'multi-relation-document-images') {

                    $paths = $value;
                    $dp_id = DB::table($assigned_properties_table_name)->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            $item_type => $item_id,
                        ]
                    );


//                    dd($item_id);


                    foreach ($paths as $path) {


                        $d = DB::table('document_assigned_properties')
                            ->where('value', '=', $path)
                            ->orWhere('value', '=', BaseController::normalizePath($path))
                            ->get();

                        $d_id = $d[0]->document;


                        $relation = new Relation();
                        $relation->title = 'raleted image to room';
                        $relation->type = 1;
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
                                'object_type' => $object_assigned_property_code,
                                'object_id' => $dp_id,
                            ]
                        );

                    }

                } elseif ($property->input_type == 'file') {

                    $ext = $value->getClientOriginalExtension();
                    $orig_name = pathinfo($value->getClientOriginalName(),PATHINFO_FILENAME);
                    $dt = date('Y-m-d_h-i-s');
                    $name = $orig_name . '_' . $dt . "." . $ext;


                    if (in_array($ext, config('base.image_extensions'))) {


                        $small_name = $orig_name . '_' . $dt . "_small." . $ext;
                        $medium_name = $orig_name . '_' . $dt . "_medium." . $ext;
                        $large_name = $orig_name . '_' . $dt . "_large." . $ext;
                        Image::make($value->getRealPath())->fit(160)->save(public_path('uploads/' . $small_name));
                        Image::make($value->getRealPath())->fit(300)->save(public_path('uploads/' . $medium_name));
                        Image::make($value->getRealPath())->fit(1024, null, function ($constraint) {
                            $constraint->upsize();
                        })->save(public_path('uploads/' . $large_name));


                        $image_resize = Image::make($value->getRealPath());
                        if (isset($settings->width) && isset($settings->height)
                            && $settings->width != "" && $settings->width != 0
                            && $settings->height != "" && $settings->height != 0) {
                            $image_resize->resize($settings->width, $settings->height);
                        }

                        $image_resize->save(public_path('uploads/' . $name));
                        $path = url('uploads/') . "/" . $name;
                        $date = round(microtime(true) * 1000, 0);

                    } elseif (in_array($ext, config('base.video_extensions'))) {
                        $value->move(public_path('/uploads/'), $name);
                        $path = url('uploads/') . "/" . $name;
                    } elseif ($ext == 'swf') {
                        $value->move(public_path('/uploads/'), $name);
                        $path = url('uploads/') . "/" . $name;
                    }

                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => $path,
                        $item_type => $item_id
                    ];
                    $to_add_arrs[] = $to_add_arr;


                } elseif ($property->input_type == 'cropper') {


                    $destinationPath = public_path() . '/uploads/';
                    $file = str_replace('data:image/png;base64,', '', $value);
                    $img = str_replace(' ', '+', $file);
                    $data1 = base64_decode($img);
                    $name = sha1(time());
                    $filename = $name . ".png";
                    $file = $destinationPath . $filename;
                    $success = file_put_contents($file, $data1);

                    $returnData = 'uploads/' . $filename;
                    $image = Image::make(file_get_contents(URL::asset($returnData)));

                    if (isset($settings->width) && isset($settings->height) && $settings->width != "" && $settings->width != 0 && $settings->height != "" && $settings->height != 0) {
                        $image = $image->resize($settings->width, $settings->height)->save($destinationPath . $filename);
                    }

                    $path = url('uploads/') . "/" . $filename;
                    $date = round(microtime(true) * 1000, 0);

                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => $path,
                        $item_type => $item_id
                    ];
                    $to_add_arrs[] = $to_add_arr;


                } elseif ($property->input_type == 'single-relation-price') {


                    $dp_id = DB::table($assigned_properties_table_name)->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            $item_type => $item_id,
                        ]
                    );

                    $relation = new Relation();
                    $relation->title = 'related room to price';
                    $relation->type = 5;
                    $relation->save();
                    $r_id = $relation->id;


                    DB::table('relation_objects')->insert(
                        [
                            'relation' => $r_id,
                            'object_type' => $object_assigned_property_code,
                            'object_id' => $dp_id,
                        ]
                    );


                    $r_props = RelationProperty::where('type', '=', config('base.relation_types.price'))->get();

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


                } elseif ($property->input_type == 'single-user-relation') {


                    $rel = new Relation();
                    $rel->type = 1;
                    $rel->title = 'connect user to message';
                    $rel->save();
                    $rel_id = $rel->id;

                    $ser_ass_id = DB::table($assigned_properties_table_name)
                        ->insertGetId(
                            [
                                'property' => $property->id,
                                'value' => $rel_id,
                                $item_type => $item_id
                            ]
                        );


                    DB::table('relation_objects')
                        ->insert(
                            [
                                'relation' => $rel_id,
                                'object_type' => $object_assigned_property_code,
                                'object_id' => $ser_ass_id,
                            ]
                        );

                    DB::table('relation_objects')
                        ->insert(
                            [
                                'relation' => $rel_id,
                                'object_type' => config('base.object_types.user'),
                                'object_id' => $value,
                            ]
                        );


                } elseif ($property->input_type == 'multi-text') {


                    $vs = $value;
                    $dp_id = DB::table($assigned_properties_table_name)->insertGetId(
                        [
                            'property' => $property->id,
                            'value' => '-',
                            $item_type => $item_id
                        ]
                    );

                    foreach ($vs as $v) {
                        DB::table($assigned_property_values_table_name)->insert(
                            [
                                'assigned_property' => $dp_id,
                                'value' => $v
                            ]
                        );
                    }

                } elseif ($property->input_type == 'summernote') {


                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => ($value == null ? '' : self::removeInvalidChars($value)),
                        $item_type => $item_id
                    ];
                    $to_add_arrs[] = $to_add_arr;

                } else {

                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => ($value == null ? '' : $value),
                        $item_type => $item_id
                    ];
                    $to_add_arrs[] = $to_add_arr;
                }


            } else {

                if ($property->input_type == 'check') {

                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '0',
                        $item_type => $item_id
                    ];
                    $to_add_arrs[] = $to_add_arr;


                } elseif ($property->input_type == 'text') {

                    $to_add_arr = [
                        'property' => $property->id,
                        'value' => '',
                        $item_type => $item_id,
                    ];
                    $to_add_arrs[] = $to_add_arr;


                } elseif ($property->input_type == 'array-of-sub-properties') {


                    $subs = [];
                    foreach ($properties as $prop) {
                        if ($prop->parent == $property->id) {
                            $subs[] = $prop;
                        }
                    }

                    foreach ($subs as $sub) {

                        if ($sub->input_type == 'select' && $sub->title == 'condition') {
                            $to_add_arr = [
                                'property' => $sub->id,
                                'value' => $request->input('condition'),
                                $item_type => $item_id,
                            ];

                        } elseif ($sub->input_type == 'single-relation-users-all' && $sub->title == 'user') {

                            $rel = new Relation();
                            $rel->type = 1;
                            $rel->title = 'connect user to service log';
                            $rel->save();
                            $rel_id = $rel->id;


                            $ser_ass_id = DB::table('service_assigned_properties')
                                ->insertGetId(
                                    [
                                        'property' => $sub->id,
                                        'value' => $rel_id,
                                        $item_type => $item_id
                                    ]
                                );


                            DB::table('relation_objects')
                                ->insert(
                                    [
                                        'relation' => $rel_id,
                                        'object_type' => config('base.object_types.service_assigned_property'),
                                        'object_id' => $ser_ass_id,
                                    ]
                                );

                            DB::table('relation_objects')
                                ->insert(
                                    [
                                        'relation' => $rel_id,
                                        'object_type' => config('base.object_types.user'),
                                        'object_id' => $request->input('customer'),
                                    ]
                                );


                        } elseif ($sub->input_type == 'date') {

                            $to_add_arr = [
                                'property' => $sub->id,
                                'value' => $request->input('date'),
                                $item_type => $item_id,
                            ];

                        }

                        $to_add_arrs[] = $to_add_arr;
                    }


                } elseif ($property->input_type == 'array-text') {

                    $subs = [];
                    foreach ($properties as $prop) {
                        if ($prop->parent == $property->id) {
                            $subs[] = $prop;
                        }
                    }
                    foreach ($subs as $sub) {

                        $vals = $request->input($sub->title);
                        $vals_en = $request->input($sub->title . '-en');
                        $vals_ar = $request->input($sub->title . '-ar');

                        for ($i = 0; $i < count($vals); $i++) {

                            $id = DB::table('data_assigned_properties')
                                ->insertGetId(
                                    [
                                        $item_type => $item_id,
                                        'property' => $sub->id,
                                        'value' => $vals[$i]
                                    ]
                                );


                            DB::table('translations')
                                ->insert(
                                    [
                                        'locale' => 'en',
                                        'table' => $assigned_properties_table_name,
                                        'field' => 'value',
                                        'record' => $id,
                                        'value' => $vals_en[$i],
                                    ]
                                );

                            DB::table('translations')
                                ->insert(
                                    [
                                        'locale' => 'ar',
                                        'table' => $assigned_properties_table_name,
                                        'field' => 'value',
                                        'record' => $id,
                                        'value' => $vals_ar[$i],
                                    ]
                                );

                        }
                    }
                }

            }
        }

        DB::table($assigned_properties_table_name)->insert(
            $to_add_arrs
        );


        $translates = [];
        foreach ($properties as $property) {
            if ($property->input_type == 'text' || $property->input_type == 'summernote') {
                $ptitle = $property->title;
                $pid = $property->id;
                $tr = [];
                foreach ($locales as $locale) {
                    if (array_search("$ptitle-{$locale}", $keys)) {

                        $k_t = $keys[array_search("$ptitle-{$locale}", $keys)];
                        $pvalue = $request->input($k_t);

                        $regid = DB::table($assigned_properties_table_name)
                            ->where($item_type, '=', $item_id)
                            ->where('property', '=', $property->id)
                            ->get(['id']);


                        $translates[] = [
                            'locale' => $locale,
                            'table' => $assigned_properties_table_name,
                            'field' => 'value',
                            'record' => $regid[0]->id,
                            'value' => $pvalue,
                        ];
                    }
                }
            }
        }

//        return;
        DB::table('translations')->insert(
            $translates
        );


    }


    public
    static function getProperties(
        $properties_table_name,
        $assigned_properties_table_name,
        $assigned_property_values_table_name,
        $properties,
        $property_values,
        $assigned_properties,
        $object_assigned_property_code)
    {


        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }
        $property_title_translations = TranslationController::getTranslationsForTable($properties_table_name, 'title', $property_ids, true);

        for ($i = 0; $i < count($properties); $i++) {

            $rules = [];
            if ($properties[$i]->validation_rules != '') {
                $arr = explode('|', $properties[$i]->validation_rules);
                if (count($arr) > 1) {
                    foreach ($arr as $ar) {
                        $rs = explode(':', $ar);
                        if (count($rs) > 1) {
                            $rules[$rs[0]] = $rs[1];
                        } else {
                            $rules[$rs[0]] = $rs[0];
                        }
                    }
                    $properties[$i]->validation_rules = $rules;
                }
            }

            if ($properties[$i]->input_type == 'select-template') {
                $templates = Template::all();
                $values = [];
                $properties[$i]->input_type = 'select';
                foreach ($templates as $template) {
                    $s = new stdClass();

                    $s->title = $template->title;
                    $s->value = $template->title;

                    $values[] = $s;
                }
                $properties[$i]->values = $values;

            } else if ($properties[$i]->input_type == 'select-navigation') {

                $templates = Navigation::all();
                $values = [];

                $s = new stdClass();
                $s->title = "None";
                $s->value = "None";

                $values [] = $s;
                $properties[$i]->input_type = 'select';
                foreach ($templates as $template) {
                    $s = new stdClass();
                    $s->title = $template->title;
                    $s->value = $template->title;
                    $values[] = $s;
                }
                $properties[$i]->values = $values;

            } else {

                $values = [];
                foreach ($property_values as $property_value) {
                    if ($properties[$i]->id == $property_value->property) {
                        $values [] = $property_value;
                    }
                }

                if (count($values) > 0)
                    $properties[$i]->values = $values;
            }

            $properties[$i]->locales = isset($property_title_translations[$properties[$i]->id]) ? $property_title_translations[$properties[$i]->id] : [];

        }

        if (is_null($assigned_properties))
            return $properties;


        $assigned_property_ids = [];
        foreach ($assigned_properties as $assigned_property) {
            $assigned_property_ids[] = $assigned_property->id;
        }

        $assigned_property_value_translations = TranslationController::getTranslationsForTable(
            $assigned_properties_table_name, 'value', $assigned_property_ids, true);

        $assigned_property_values = DB::table($assigned_property_values_table_name)
            ->whereIn('assigned_property', $assigned_property_ids)
            ->get();


        for ($i = 0; $i < count($properties); $i++) {

            $properties[$i]->assigned = "";

            if ($properties[$i]->input_type == 'multi-relation-document-images') {

                $ds_id = 0;
                foreach ($assigned_properties as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $ds_id = $item->id;
                        break;
                    }
                }
                $rels = DB::table('relation_objects')
                    ->where('object_type', '=', $object_assigned_property_code)
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
                foreach ($assigned_properties as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $ds_id = $item->id;
                        break;
                    }
                }

                $rels = DB::table('relation_objects')
                    ->where('object_type', '=', $object_assigned_property_code)
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
                foreach ($assigned_properties as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $dps_id = $item->id;
                        break;
                    }
                }

                if ($dps_id == 0)
                    continue;


                $ds = [];

                foreach ($assigned_property_values as $assigned_property_value) {
                    if ($assigned_property_value->assigned_property == $dps_id) {
                        $ds[] = $assigned_property_value->value;
                    }
                }

                $properties[$i]->assigned = $ds;

            } elseif ($properties[$i]->input_type == 'array-text') {


                $subs = [];
                foreach ($properties as $property) {
                    if ($property->parent == $properties[$i]->id) {
                        $subs[] = $property;
                    }
                }

                $values = [];
                foreach ($subs as $sub) {

                    $v = [];
                    $v_en = [];
                    $v_ar = [];

                    $svs = DB::table($assigned_properties_table_name)
                        ->where('property', '=', $sub->id)
                        ->get();
                    foreach ($svs as $sv) {
                        $v[] = $sv->value;

                        $t = TranslationController::getTranslatedForCell("en", $assigned_properties_table_name, 'value', $sv->id);
                        $v_en[] = $t != null ? $t : "";
                        $t = TranslationController::getTranslatedForCell("ar", $assigned_properties_table_name, 'value', $sv->id);
                        $v_ar[] = $t != null ? $t : "";

                    }
                    $values[$sub->title] = $v;
                    $values[$sub->title . "-en"] = $v_en;
                    $values[$sub->title . "-ar"] = $v_ar;

                }

                $properties[$i]->assigned = $values;

            } else {

                foreach ($assigned_properties as $item) {
                    if ($item->property == $properties[$i]->id) {
                        $properties[$i]->assigned = $item->value;
                        if ($properties[$i]->input_type == 'text') {
                            if (isset($assigned_property_value_translations[$item->id])) {
                                $trs = $assigned_property_value_translations[$item->id];
                                foreach ($trs as $k => $v) {
                                    $k = 'assigned-' . $k;
                                    $properties[$i]->{$k} = $v;
                                }
                            }
                        }
                        break;
                    }
                }


            }
        }

        return $properties;

    }


}
