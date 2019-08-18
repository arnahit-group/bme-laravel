<?php

namespace App\Http\Controllers;

use App;
use App\DocumentProperty;
use App\DocumentPropertyValue;
use App\DocumentType;
use App\Libraries\MyLib\MyPluralizer;
use App\Translation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;
use Validator;

class DocumentPropertyController extends Controller
{
    protected static $types_table_name = 'document_types';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function getBaseInforamation(&$data, $type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.documents.properties'))
                && $navs[$i]->properties->value == $type) {
                $navs[$i]->active = true;
            } else {
                $navs[$i]->active = false;
            }
        }

        $data['navigations'] = $navs;

    }


    public static function createValidationRules($type_id, $is_setting = false, $id = 0)
    {
        $props = DocumentProperty::where('type', '=', $type_id)->where('is_setting', '=', $is_setting == true ? 1 : 0)->get();
        return PropertyController::createValidationRules($props, 'document', $id);
    }

    public static function getItems($type)
    {

        $bt_id = DocumentType::where('title', '=', $type)->first();
        $properties = DocumentProperty::where('type', '=', $bt_id->id)->get();
        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $translations = Translation::where('table', '=', 'document_properties')
            ->where('field', '=', 'title')
            ->whereIn('record', $property_ids)
            ->get(['locale', 'record', 'value']);

        $properties = PropertyController::getItems($properties, $translations);


        $urls = [];
        for ($i = 0; $i < count($properties); $i++) {
            $urls['edit'] = route('documents.properties.edit', ['type' => $type, 'id' => $properties[$i]->id]);
            $properties[$i]->urls = $urls;
        }
        return $properties;

    }


    public static function getItem($id)
    {

        $props = DocumentProperty::find($id);


        $trs = Translation::where('table', '=', 'document_properties')
            ->where('field', '=', 'title')
            ->where('record', '=', $id)
            ->get(['locale', 'value']);

        $ts = [];
        foreach ($trs as $tr) {
            $ts[$tr->locale] = $tr->value;
        }

        $props->locales = $ts;

        $vls = DB::table('document_property_values')
            ->where('property', '=', $id)
            ->get();


        $values = [];
        foreach ($vls as $vl) {
            $values [] = $vl->value;

        }

        $props->values = $values;

        return $props;

    }


    public static function getPermissions($type)
    {
        $permissions = [];
        $permissions['create'] = "documents.properties.create" . ":" . $type;
        $permissions['store'] = "documents.properties.store" . ":" . $type;
        $permissions['update'] = "documents.properties.update" . ":" . $type;
        $permissions['edit'] = "documents.properties.edit" . ":" . $type;
        $permissions['destroy'] = "documents.properties.destroy" . ":" . $type;

        return $permissions;

    }

    public static function getUrls($type, $id = 0)
    {
        $urls = [];
        $urls['create'] = route("documents.properties.create", ['type' => $type]);
        $urls['destroy'] = route("documents.properties.ajax.destroy", ['type' => $type]);
        $urls['store'] = route("documents.properties.store", ['type' => $type]);
        $urls['index'] = route("documents.properties.index", ['type' => $type]);
        $urls['update'] = route("documents.properties.update", ['type' => $type, 'id' => $id]);
        return $urls;

    }


    public function settings($type)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data, $type);

        $bt_id = DocumentType::where('title', '=', $type)->first();
        $setts = DocumentProperty::where('is_setting', '=', 1)->where('type', '=', $bt_id->id)->get();

        $data['type'] = $type;

        $objects = User::where('type', '=', $bt_id->id)->get();
        for ($i = 0; $i < count($objects); $i++) {
            $ds = DB::table('user_assigned_properties')
                ->where('user_assigned_properties.user', '=', $objects[$i]->id)
                ->join('user_properties', 'user_assigned_properties.property', '=', 'user_properties.id')
                ->select('user_properties.title', 'user_assigned_properties.value')
                ->get();
            $cds = new stdClass();
            foreach ($ds as $d) {
                $cds->{$d->title} = $d->value;
            }
            $objects[$i]->properties = $cds;
        }

        $data['users'] = $objects;

        for ($i = 0; $i < count($setts); $i++) {


            if ($setts[$i]->input_type == 'multi-user') {
                $setts[$i]->assigned = explode(',', $setts[$i]->default_value);
            } else {
                $setts[$i]->assigned = $setts[$i]->default_value;
            }

            $trs = Translation::where('table', '=', 'document_properties')
                ->where('field', '=', 'title')
                ->where('record', '=', $setts[$i]->id)
                ->get(['locale', 'value']);

            $ts = [];
            foreach ($trs as $tr) {
                $ts[$tr->locale] = $tr->value;
            }
            $setts[$i]->locales = $ts;

        }

        $data['properties'] = $setts;
        $urls = [];
        $urls['update'] = route("documents.settings.update", ['type' => $type]);
        $data['urls'] = $urls;

//        return $data;
        return view('admin.settings.views.index', $data);
        //
    }

    public function updateSettings(Request $request, $type)
    {

        $bt_id = DocumentType::where('title', '=', $type)->first();

        $data_type_id = $bt_id->id;
        $rules = DataPropertyController::createValidationRules($data_type_id, true);
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {

            $keys = $request->keys();
//        return $keys;

            foreach ($keys as $key) {
                $value = $request->input($key);
                DB::table('document_properties')
                    ->where('type', '=', $bt_id->id)
                    ->where('title', '=', $key)
                    ->update(
                        [
                            'default_value' => $value
                        ]
                    );
            }

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);


//        return redirect()->route('documents.settings', ['type' => $type]);
    }


    public function index($type)
    {


        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data, $type);
        $data ['type'] = $type;


        $data ['properties'] = self::getItems($type);

        $data ['widgets'] = WidgetController::getWidgets("document.property.index", 'document', $type);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);


        $bt_id = DocumentType::where('title', '=', $type)->first();

        $data['page_title'] = trans('messages.list of') . trans('messages.properties') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id));

        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => trans('messages.properties') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id)),
                'url' => ''
            ]
        ];


        return view("admin.properties.views.index", $data);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {


        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data, $type);

        $data['type'] = $type;

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);


        $bt_id = DocumentType::where('title', '=', $type)->first();

        $data['page_title'] = trans('messages.list of') . trans('messages.properties') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id));

        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => trans('messages.properties') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id)),
                'url' => route('data.properties.index', ['type' => $type])
            ],
            [
                'title' => trans('messages.create new property'),
                'url' => ''
            ]

        ];


        return view("admin.properties.views.create", $data);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {


        $validator = Validator::make($request->all(), PropertyController::createValidationRulesForPropertyOperations());
        if ($validator->passes()) {

            $bt_id = DocumentType::where('title', '=', $type)->first();
            $title_en = $request->input("title-en");
            $title = str_replace(' ', '-', trim($title_en));
            $default_value = $request->input('default_value');
            $input_type = $request->input('input_type');
            $level = $request->input('level');

            $dp = new DocumentProperty();
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
                    $dpv = new DocumentPropertyValue();
                    $dpv->property = $dp->id;
                    $dpv->value = $value;
                    $dpv->save();
                }
            }

            $translates = [];
            $translates[] = [
                'locale' => 'fa',
                'table' => 'document_properties',
                'field' => 'title',
                'record' => $dp->id,
                'value' => $request->input('title')
            ];

            $locales = config('base.locales');
            foreach ($locales as $locale) {
                $title_loc = $request->input("title-{$locale}");
                $translates[] = [
                    'locale' => $locale,
                    'table' => 'document_properties',
                    'field' => 'title',
                    'record' => $dp->id,
                    'value' => $title_loc,
                ];
            }

            DB::table('translations')->insert(
                $translates
            );

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);

//        return redirect()->route('data.properties.index', ['data_type' => $data_type]);


        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\DocumentProperty $documentProperty
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentProperty $documentProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\DocumentProperty $documentProperty
     * @return \Illuminate\Http\Response
     */
    public function edit($type, $id)
    {


        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data, $type);

        $bt_id = DocumentType::where('title', '=', $type)->first();
//        return $bt_id->id;
        $data['type'] = $type;
        $data['id'] = $id;


        $data['property'] = self::getItem($id);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type,$id);

        $bt_id = DocumentType::where('title', '=', $type)->first();

        $data['page_title'] = trans('messages.list of') . trans('messages.properties') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id));

        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => trans('messages.properties') . MyPluralizer::plural(TranslationController::getTranslatedForCell(App::getLocale(), self::$types_table_name, 'title', $bt_id->id)),
                'url' => route('data.properties.index', ['type' => $type])
            ],
            [
                'title' => trans('messages.edit existing property'),
                'url' => ''
            ]
        ];

//        return $data;
        return view("admin.properties.views.edit", $data);


        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\DocumentProperty $documentProperty
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $type, $id)
    {


        $validator = Validator::make($request->all(), PropertyController::createValidationRulesForPropertyOperations());
        if ($validator->passes()) {

            $bt_id = DocumentType::where('title', '=', $type)->first();

            $title_en = $request->input("title-en");
            $title = str_replace(' ', '-', trim($title_en));


            $default_value = $request->input('default_value');
            $input_type = $request->input('input_type');
            $level = $request->input('level');

            $dp = DocumentProperty::find($id);
            $dp->title = $title;
            $dp->data_type = $bt_id->id;
            $dp->default_value = $default_value;
            $dp->input_type = $input_type;
            $dp->level = $level;
            $dp->parent = 0;
            $dp->save();


            if ($request->input('values') != null) {
                $values = $request->input('values');

                DB::table('data_property_values')
                    ->where('property', '=', $id)
                    ->delete();

                foreach ($values as $value) {
                    $dpv = new DocumentPropertyValue();
                    $dpv->property = $dp->id;
                    $dpv->value = $value;
                    $dpv->save();

                }
            }


            $translates = [];
            $translates[] = [
                'locale' => 'fa',
                'table' => 'document_properties',
                'field' => 'title',
                'record' => $dp->id,
                'value' => $request->input('title')
            ];

            $locales = config('base.locales');
            foreach ($locales as $locale) {
                $title_loc = $request->input("title-{$locale}");
                $translates[] = [
                    'locale' => $locale,
                    'table' => 'document_properties',
                    'field' => 'title',
                    'record' => $dp->id,
                    'value' => $title_loc,
                ];
            }


            DB::table('translations')
                ->where('table', '=', 'document_properties')
                ->where('field', '=', 'title')
                ->where('record', '=', $id)
                ->delete();


            DB::table('translations')->insert(
                $translates
            );

            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);

        //        return redirect()->route('data.properties.index', ['data_type' => $data_type]);

        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\DocumentProperty $documentProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy($type, $id)
    {


        $data = [];
        $used = DB::table('document_assigned_properties')
            ->where('property', '=', $id)
            ->get();

        if (count($used) > 0) {
            $data['error'] = 1;
            $data['message'] = "you cant remove property that used before";
            return response()->json($data);
        }

        $dp = DocumentProperty::find($id);
        $dp->delete();

        DB::table('document_property_values')
            ->where('property', '=', $id)
            ->delete();


        $data['error'] = 0;
        $data['message'] = "property deleted";
        return response()->json($data);

        //
    }


    public function destroy_property(Request $request, $type)
    {

        $id = $request->input('id');

        $data = [];
        $used = DB::table('document_assigned_properties')
            ->where('property', '=', $id)
            ->get();

        if (count($used) > 0) {
            $data['error'] = 1;
            $data['message'] = "you cant remove property that used before";
            return response()->json($data);
        }

        $dp = DocumentProperty::find($id);
        $dp->delete();

        DB::table('document_property_values')
            ->where('property', '=', $id)
            ->delete();


        $data['error'] = 0;
        $data['message'] = "property deleted";
        return response()->json($data);

        //
    }

}
