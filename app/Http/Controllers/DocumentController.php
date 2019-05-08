<?php

namespace App\Http\Controllers;

use App\Document;
use App\DocumentProperty;
use App\DocumentType;
use DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use stdClass;
use URL;

class DocumentController extends Controller
{

    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }


    public static function getDocuments($document_type = null)
    {
        $bt_id = DocumentType::where('title', '=', $document_type)->first();

        if (is_null($bt_id))
            return;

//        if(count($bt_id) == 0)
//            return;


//        return $bt_id;
        $data ['document_type'] = $document_type;
        $objects = [];
        if ($document_type == null) {
            $objects = Document::all();
        } else {
            $objects = Document::where('document_type', '=', $bt_id->id)->get();
        }

        for ($i = 0; $i < count($objects); $i++) {
            $ds = DB::table('document_assigned_properties')
                ->where('document_assigned_properties.document', '=', $objects[$i]->id)
                ->join('document_properties', 'document_assigned_properties.property', '=', 'document_properties.id')
                ->select('document_properties.title', 'document_assigned_properties.value')
                ->get();
            $cds = new stdClass();
            foreach ($ds as $d) {
                $cds->{$d->title} = $d->value;
            }
            $objects[$i]->properties = $cds;
        }

        return $objects;
    }


    public static function getDocumentsCount($type)
    {
        $cc = Document::where('document_type', '=', $type)->count();
        return $cc;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($document_type)
    {
        $data = BaseController::createBaseInformations();
        DocumentController::getBaseInforamation($data);

        $data ['datas'] = DocumentController::getDocuments($document_type);
        $data ['document_type'] = $document_type;

        $data ['widgets'] = WidgetController::getWidgets("document.index", 'document', $document_type);

//        return $data;
        return view("document.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($document_type)
    {
        $data = BaseController::createBaseInformations();
        DocumentController::getBaseInforamation($data);

        $bt_id = DocumentType::where('title', '=', $document_type)->first();

        $properties = DocumentProperty::where('document_type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();
        $settings = DocumentProperty::where('document_type', '=', $bt_id->id)->where('is_setting', '=', 1)->get();

        $data['document_type'] = $document_type;
        $data['properties'] = $properties;

        $sett = new stdClass();
        foreach ($settings as $setting) {
            $sett->{$setting->title} = $setting->default_value;
        }


        if (isset($sett->width) == true && isset($sett->height) == true) {
            $sett->aspect_ratio = $sett->width / $sett->height;
        } else {
            $sett->aspect_ratio = "";
        }

        $data['settings'] = $sett;

//        return $data;
        return view("document.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $document_type)
    {
        $bt_id = DocumentType::where('title', '=', $document_type)->first();
        $data = new Document();
        $data->document_type = $bt_id->id;
        $data->save();

        $settings = DocumentProperty::where('document_type', '=', $bt_id->id)->where('is_setting', '=', 1)->get();
        $sett = new stdClass();
        foreach ($settings as $setting) {
            $sett->{$setting->title} = $setting->default_value;
        }
        $properties = DocumentProperty::where('document_type', '=', $bt_id->id)->get();

        if ($request->hasFile('path')) {
            $image = $request->file('path');
            $ext = $image->getClientOriginalExtension();
            $name = sha1(time()) . "." . $ext;

            //resize
            $image_resize = Image::make($image->getRealPath());
            if (isset($sett->width) && isset($sett->height)) {
                $image_resize->resize($sett->width, $sett->height);
            }
            $image_resize->save(public_path('uploads/' . $name));

//        $image->move(public_path('uploads'), $name);
            $path = url('uploads/') . "/" . $name;
            $date = round(microtime(true) * 1000, 0);
            $request->merge(['path' => $path, 'date' => $date]);
//        $request->merge(['date' => $date]);

        }

        $cropper_check = false;
        foreach ($properties as $property) {
            if ($property->input_type == 'cropper') {
                $cropper_check = true;
            }
        }

        if ($cropper_check == true) {

            $file = $request->input('path');
//            return $file;

            if (!empty($file)) {

                $destinationPath = public_path() . '/uploads/';

                $file = str_replace('data:image/png;base64,', '', $file);
                $img = str_replace(' ', '+', $file);
                $data1 = base64_decode($img);
                $name = sha1(time());
                $filename = $name . ".png";
                $file = $destinationPath . $filename;
                $success = file_put_contents($file, $data1);

                // THEN RESIZE IT
                $returnData = 'uploads/' . $filename;
                $image = Image::make(file_get_contents(URL::asset($returnData)));

                if (isset($sett->width) && isset($sett->height)) {
                    $image = $image->resize($sett->width, $sett->height)->save($destinationPath . $filename);
                }

                $path = url('uploads/') . "/" . $filename;
                $date = round(microtime(true) * 1000, 0);
                $request->merge(['path' => $path, 'date' => $date]);

//                echo $path;

            }

        }


        $keys = $request->keys();
//        $request->merge(['date' => $date]);

//        return $keys;
        foreach ($properties as $property) {
            foreach ($keys as $key) {
                if ($property->title == $key) {
                    $pid = $property->id;
                    $value = $request->input($key);
                    $did = $data->id;
                    DB::table('document_assigned_properties')->insert(
                        [
                            'property' => $pid,
                            'value' => ($value == null ? '' : $value),
                            'document' => $did,
                        ]
                    );
                    break;
                }
            }
        }

        return redirect()->route("documents.index", ['document_type' => $document_type]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function show($document_type, $id)
    {

        $data = BaseController::createBaseInformations();
        DocumentController::getBaseInforamation($data);

        $bt_id = DocumentType::where('title', '=', $document_type)->first();
        $hotel = Document::where('document_type', '=', $bt_id->id)->where('id', '=', $id)->get();

        $data ['hotel'] = $hotel;


        return view("document.index", $data);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function edit($document_type, $id)
    {
        $data = BaseController::createBaseInformations();
        DocumentController::getBaseInforamation($data);

        $bt_id = DocumentType::where('title', '=', $document_type)->first();

        $properties = DocumentProperty::where('document_type', '=', $bt_id->id)->where('is_setting', '=', 0)->get();
        $settings = DocumentProperty::where('document_type', '=', $bt_id->id)->where('is_setting', '=', 1)->get();

        $data['document_type'] = $document_type;


        $assigned = DB::table("document_assigned_properties")->where('document', '=', $id)->get();

        for ($i = 0; $i < count($properties); $i++) {
            $properties[$i]->assigned = "";
            foreach ($assigned as $item) {
                if ($item->property == $properties[$i]->id) {
                    $properties[$i]->assigned = $item->value;
                    break;
                }
            }
        }


        $data['properties'] = $properties;


        $data['id'] = $id;


        $sett = new stdClass();
        foreach ($settings as $setting) {
            $sett->{$setting->title} = $setting->default_value;
        }

        if (isset($sett->width) == true && isset($sett->height) == true) {
            $sett->aspect_ratio = $sett->width / $sett->height;
        } else {
            $sett->aspect_ratio = "";
        }

        $data['settings'] = $sett;

//        return $data;

        return view("document.edit", $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $document_type, $id)
    {


//        return;

        $bt_id = DocumentType::where('title', '=', $document_type)->first();


        $settings = DocumentProperty::where('document_type', '=', $bt_id->id)->where('is_setting', '=', 1)->get();
        $sett = new stdClass();
        foreach ($settings as $setting) {
            $sett->{$setting->title} = $setting->default_value;
        }


        $properties = DocumentProperty::where('document_type', '=', $bt_id->id)->get();

        if ($request->hasFile('path')) {
            $image = $request->file('path');
            $ext = $image->getClientOriginalExtension();
            $name = sha1(time()) . "." . $ext;

            //resize
            $image_resize = Image::make($image->getRealPath());
            if (isset($sett->width) && isset($sett->height)) {
                $image_resize->resize($sett->width, $sett->height);
            }
            $image_resize->save(public_path('uploads/' . $name));

//        $image->move(public_path('uploads'), $name);
            $path = url('uploads/') . "/" . $name;
            $date = round(microtime(true) * 1000, 0);
            $request->merge(['path' => $path, 'date' => $date]);
//        $request->merge(['date' => $date]);

        }

        $cropper_check = false;
        foreach ($properties as $property) {
            if ($property->input_type == 'cropper') {
                $cropper_check = true;
            }
        }

        if ($cropper_check == true) {

            $file = $request->input('path');
//            return $request->input('path');

            if (!empty($file)) {

                $destinationPath = public_path() . '/uploads/';

                $file = str_replace('data:image/png;base64,', '', $file);
                $img = str_replace(' ', '+', $file);
                $data1 = base64_decode($img);
                $name = sha1(time());
                $filename = $name . ".png";
                $file = $destinationPath . $filename;
                $success = file_put_contents($file, $data1);

                // THEN RESIZE IT
                $returnData = 'uploads/' . $filename;
                $image = Image::make(file_get_contents(URL::asset($returnData)));

                if (isset($sett->width) && isset($sett->height)) {
                    $image = $image->resize($sett->width, $sett->height)->save($destinationPath . $filename);
                }

                $path = url('uploads/') . "/" . $filename;
                $date = round(microtime(true) * 1000, 0);
                $request->merge(['path' => $path, 'date' => $date]);

//                return $path;

            }

        }


        $keys = $request->keys();
//        $request->merge(['date' => $date]);
//        return $keys;

//        return;

        DB::table('document_assigned_properties')
            ->where('document', '=', $id)
            ->delete();

        foreach ($properties as $property) {
            foreach ($keys as $key) {
                if ($property->title == $key) {
                    $pid = $property->id;
                    $value = $request->input($key);
                    $did = $id;
                    DB::table('document_assigned_properties')->insert(
                        [
                            'property' => $pid,
                            'value' => ($value == null ? '' : $value),
                            'document' => $did,
                        ]
                    );
                    break;
                }
            }
        }

        return redirect()->route("documents.index", ['document_type' => $document_type]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');


        $document = Document::find($id);
        $document->delete();

        DB::table('document_assigned_properties')->where('document', '=', $id)->delete();

        return response()->json(['error' => 0, 'message' => 'id is : ' . $id]);
        //
    }
}
