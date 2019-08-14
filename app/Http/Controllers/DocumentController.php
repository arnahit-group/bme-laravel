<?php

namespace App\Http\Controllers;

use App\Document;
use App\DocumentProperty;
use App\DocumentPropertyValue;
use App\DocumentType;
use App\Template;
use App\TemplateProperty;
use DB;
use Illuminate\Http\Request;
use stdClass;

class DocumentController extends Controller
{

    public static function getBaseInforamation(&$data, $type)
    {
        $navs = NavigationController::getNavigation('admin');

        for ($i = 0; $i < count($navs); $i++) {
            if (in_array($navs[$i]->properties->route, config('base.routes.documents.items'))
                && $navs[$i]->properties->value == $type) {
                $navs[$i]->active = true;
            } else {
                $navs[$i]->active = false;
            }
        }

        $data['navigations'] = $navs;

    }

    public static function getPermissions($type)
    {
        $permissions = [];
        $permissions['create'] = "documents.create" . ":" . $type;
        $permissions['store'] = "documents.store" . ":" . $type;
        $permissions['update'] = "documents.update" . ":" . $type;
        $permissions['edit'] = "documents.edit" . ":" . $type;
        $permissions['destroy'] = "documents.destroy" . ":" . $type;

        return $permissions;

    }

    public static function getUrls($type, $id = 0)
    {

        $urls = [];
        $urls['index'] = route("documents.index", ['type' => $type]);
        $urls['create'] = route("documents.create", ['type' => $type]);
        $urls['store'] = route("documents.store", ['type' => $type]);
        $urls['update'] = route("documents.update", ['type' => $type, 'id' => $id]);
        $urls['change'] = route("documents.change", ['type' => $type]);
        $urls['destroy'] = route("documents.destroy", ['type' => $type]);

        return $urls;

    }


    public static function isPage($type)
    {
        $bt_id = DocumentType::where('title', '=', $type)->first();
        $p = $bt_id->parent;

        if ($p == 0) {
            return false;
        }

        $bt_id = DocumentType::where('id', '=', $p)->first();
        if ($bt_id->title == 'pages') {
            return true;
        } else {
            return false;
        }

    }

    public static function createChildTypeUsingTemplate($parent_type, $title_en, $title_fa, $title_ar, $template, $navigation)
    {

        $bt_id = DocumentType::where('title', '=', $parent_type)->first();

        $dt = new DocumentType();
        $dt->title = str_replace(' ', '-', $title_en);
        $dt->can_have_child = 0;
        $dt->can_have_item = 1;
        $dt->parent = $bt_id->id;
        $dt->save();

        $tm = Template::where('title', '=', $template)->first();
        $tm_props = TemplateProperty::where('template', '=', $tm->id)->get();

        $d = new Document();
        $d->type = $dt->id;
        $d->save();

        foreach ($tm_props as $tm_prop) {

            $dp = new DocumentProperty();
            $dp->title = $tm_prop->title;
            $dp->input_type = $tm_prop->input_type;
            $dp->default_value = $tm_prop->default_value;
            $dp->level = $tm_prop->level;
            $dp->is_setting = $tm_prop->is_setting;
            $dp->is_key = $tm_prop->is_key;
            $dp->is_fillable = $tm_prop->is_fillable;
            $dp->should_be_validated = $tm_prop->should_be_validated;
            $dp->validation_rules = $tm_prop->validation_rules;
            $dp->parent = $tm_prop->parent;
            $dp->type = $dt->id;
            $dp->save();

        }

        WidgetController::createWidgetUsingTemplate(
            'public.document',
            'home.document.all',
            config('base.object_types.document'),
            $dt->id,
            $tm->widget);

        if ($navigation != "" && $navigation != "None") {
            NavigationController::createNavigationItem($navigation, $title_en, $title_fa, $title_ar);
        }


    }

    public static function getSettings($type)
    {
        $bt_id = DocumentType::where('title', '=', $type)->first();
        $settings = DocumentProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 1)->get();
        $sett = new stdClass();
        foreach ($settings as $setting) {
            $sett->{$setting->title} = $setting->default_value;
        }

        if (isset($sett->width) == true && isset($sett->height) == true) {
            if (($sett->width == "" || $sett->width == 0) && ($sett->height == "" || $sett->height == 0)) {
                $sett->aspect_ratio = "";
            } else {
                $sett->aspect_ratio = $sett->width / $sett->height;
            }
        } else {
            $sett->aspect_ratio = "";
        }

        return $sett;
    }


    public static function saveProperties(Request $request, $type, $document_id)
    {
        $bt_id = DocumentType::where('title', '=', $type)->first();
        $properties = DocumentProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();

        PropertyController::saveProperties(
            $request,
            'document',
            $document_id,
            $properties,
            'document_assigned_properties',
            'document_assigned_property_values',
            config('base.object_types.document_assigned_property'),
            self::getSettings($type));

    }


    public static function getDataProperties2($document_id)
    {
        $type_id = Document::find($document_id)->type;
        $properties = DocumentProperty::where('type', '=', $type_id)->get();
        $assigned_properties = DB::table('document_assigned_properties')
            ->where('document', '=', $document_id)
            ->get();

        $props = PropertyController::getDataProperties2(
            "document_properties",
            "document_assigned_properties",
            "document_assigned_property_values",
            $properties,
            $assigned_properties,
            config('base.object_types.document_assigned_property')
        );

        return $props;

    }

    public static function getItems($type)
    {
        $bt_id = DocumentType::where('title', '=', $type)->first();
        $data ['data_type'] = $type;
        $objects = Document::where('type', '=', $bt_id->id)->get();

        for ($i = 0; $i < count($objects); $i++) {
            $props = self::getDataProperties2($objects[$i]->id);

            $urls = [];
            $urls['edit'] = route('documents.edit', ['type' => $type, 'id' => $objects[$i]->id]);
            $objects[$i]->urls = $urls;

            if (isset($props['path']->title) &&
                in_array(pathinfo($props['path']->title, PATHINFO_EXTENSION),config('base.image_extensions')))
            {

                $path = $props['path']->title;
                $base_len = strlen($path);
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $ext_len = strlen($ext);

                $small_url = substr($path, 0, $base_len - $ext_len - 1) . '_small' . '.' . $ext;
                $props['path']->small = $small_url;

                $medium_url = substr($path, 0, $base_len - $ext_len - 1) . '_medium' . '.' . $ext;
                $props['path']->medium = $medium_url;

                $large_url = substr($path, 0, $base_len - $ext_len - 1) . '_large' . '.' . $ext;
                $props['path']->large = $large_url;

            }

            $objects[$i]->properties = $props;
        }
        return $objects;
    }

    public static function getProperties($type, $id = null)
    {

        $bt_id = DocumentType::where('title', '=', $type)->first();
        $properties = DocumentProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 0)->orderBy('level')->get();

        $property_ids = [];
        foreach ($properties as $property) {
            $property_ids [] = $property->id;
        }

        $property_values = DocumentPropertyValue::whereIn('property', $property_ids)->get();

        if (is_null($id)) {
            $assigned_properties = null;
        } else {
            $assigned_properties = DB::table("document_assigned_properties")->where('document', '=', $id)->get();
        }

        return PropertyController::getProperties(
            'document_properties',
            'document_assigned_properties',
            'document_assigned_property_values',
            $properties,
            $property_values,
            $assigned_properties,
            config('base.object_types.document_assigned_property')
        );

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data,$type);

        $bt_id = DocumentType::where('title', '=', $type)->first();

        if ($bt_id->can_have_child == 1 && $bt_id->can_have_item == 0) {

            $subs = DocumentType::where('parent', '=', $bt_id->id)->get();
            for ($i = 0; $i < count($subs); $i++) {
                $id = $subs[$i]->id;
                $ds = Document::where('type', '=', $id)->first();
                $subs[$i]->id = $ds->id;
            }
            $data ['datas'] = $subs;

        } else {

            $data ['datas'] = self::getItems($type);


        }

        $data ['type'] = $bt_id;
        $data ['widgets'] = WidgetController::getWidgets("document.index", 'document', $type);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);

        $breadcrumbs = [];
        $breadcrumbs [] = ['title' => 'داشبورد', 'url' => route('admin.index')];
        $breadcrumbs [] = ['title' => 'آیتم ها', 'url' => ''];
        $data['breadcrumbs'] = $breadcrumbs;

//        return $data;
        return view("admin.items.views.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data,$type);
        $data['properties'] = self::getProperties($type);
        $data['type'] = $type;
        $data ['images'] = DocumentController::getItems('general');
        $data['settings'] = self::getSettings($type);


        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type);


        return view("admin.items.views.create", $data);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {
//        dd($request);
        $bt_id = DocumentType::where('title', '=', $type)->first();
        if ($bt_id->can_have_item == 0 && $bt_id->can_have_child == 1) {
            self::createChildTypeUsingTemplate(
                $type,
                $request->input('page-title-en'),
                $request->input('page-title'),
                $request->input('page-title-ar'),
                $request->input('template'),
                $request->input('navigation')
            );

        } elseif ($bt_id->can_have_item != 0 && $bt_id->can_have_child == 0) {

//            return base_path('/uploads/');
//            dd($request);

            $bt_id = DocumentType::where('title', '=', $type)->first();
            $data = new Document();
            $data->type = $bt_id->id;
            $data->save();
            $date = round(microtime(true) * 1000, 0);
            $request->merge(['date' => $date]);
            self::saveProperties($request, $type, $data->id);
        }

        return redirect()->route("documents.index", ['type' => $type]);


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function show($type, $id)
    {

        $data = BaseController::createBaseInformations();
        DocumentController::getBaseInforamation($data,$type);

        $bt_id = DocumentType::where('title', '=', $type)->first();
        $hotel = Document::where('type', '=', $bt_id->id)->where('id', '=', $id)->get();

        $data ['hotel'] = $hotel;


        return view("document.index", $data);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function edit($type, $id)
    {
        $data = BaseController::createBaseInformations();
        DocumentController::getBaseInforamation($data,$type);
        $data['type'] = $type;
        $data['properties'] = self::getProperties($type, $id);
        $data ['images'] = DocumentController::getItems('general');
        $data['id'] = $id;
        $data['settings'] = self::getSettings($type);

        $data['permissions'] = self::getPermissions($type);
        $data['urls'] = self::getUrls($type, $id);


        return view("admin.items.views.edit", $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $type, $id)
    {

        if (self::isPage($type)) {


            DB::table('document_assigned_properties')
                ->where('document', '=', $id)
                ->delete();
            self::saveProperties($request, $type, $id);
            return redirect()->route("documents.index", ['type' => 'pages']);
        } else {

            DB::table('document_assigned_properties')
                ->where('document', '=', $id)
                ->delete();
            $date = round(microtime(true) * 1000, 0);
            $request->merge(['date' => $date]);
            self::saveProperties($request, $type, $id);
            return redirect()->route("documents.index", ['type' => $type]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $type)
    {

        $id = $request->input('id');

        $doc = Document::find($id);
        $dt_id = $doc->type;
        $doc_types = DocumentType::find($dt_id);
        $type = $doc_types->title;

        if (self::isPage($type)) {

            DB::table('document_types')->where('title', '=', $type)->delete();
            DB::table('documents')->where('type', '=', $dt_id)->delete();
            DB::table('document_assigned_properties')->where('document', '=', $id)->delete();

            NavigationController::removeNavigations($type);

            return response()->json(['error' => 0, 'message' => 'id is : ' . 'page']);

        } else {
//            return;
            $document = Document::find($id);
            $document->delete();
            DB::table('document_assigned_properties')->where('document', '=', $id)->delete();
            return response()->json(['error' => 0, 'message' => 'id is : ' . $id]);

        }


        //
    }
}
