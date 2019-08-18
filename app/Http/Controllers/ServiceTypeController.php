<?php

namespace App\Http\Controllers;

use App\Libraries\MyLib\MyPluralizer;
use App\ServiceType;
use Illuminate\Http\Request;
use Validator;

class ServiceTypeController extends Controller
{

    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }

    public static function getPermissions()
    {
        $permissions = [];
        $permissions['create'] = "services.types.create";
        $permissions['store'] = "services.types.store";
        $permissions['update'] = "services.types.update";
        $permissions['edit'] = "services.types.edit";
        $permissions['change'] = "services.types.change";
        $permissions['destroy'] = "services.types.destroy";
        return $permissions;

    }

    public static function getUrls($id = 0)
    {
        $urls = [];
        $urls['index'] = route("services.types.index");
        $urls['create'] = route("services.types.create");
        $urls['destroy'] = route("services.types.destroy");
        $urls['store'] = route("services.types.store");
        $urls['update'] = route("services.types.update", ['id' => $id]);
        return $urls;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data);

        $datas = ServiceType::all();

        $data['datas'] = $datas;

        $data ['widgets'] = WidgetController::getWidgets("services.types.index", 'service');

        $data['urls'] = self::getUrls();

        $data['permissions'] = self::getPermissions();

        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(trans('messages.types.services'));
        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(trans('messages.types.services')),
                'url' => ''
            ]
        ];


        return view('admin.types.views.index', $data);


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data);

        $data['urls'] = self::getUrls();

        $data['permissions'] = self::getPermissions();

        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(trans('messages.types.services'));
        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(trans('messages.types.services')),
                'url' => route('services.types.index')
            ],
            [
                'title' => trans('messages.create new type'),
                'url' => ''
            ]
        ];


        return view('admin.types.views.create', $data);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), PropertyController::createValidationRulesForTypeOperations());
        if ($validator->passes()) {


            $dt = new ServiceType();
            $dt->title = $request->input('title');
            $dt->can_have_child = $request->input('can_have_child');
            $dt->can_have_item = $request->input('can_have_item');
            $dt->parent = 0;
            $dt->save();
            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);


        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\BaseTypes $baseTypes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\BaseTypes $baseTypes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data);
        $dt = ServiceType::find($id);
        $data['data'] = $dt;
        $data['id'] = $id;
        $data['urls'] = self::getUrls($id);

        $data['permissions'] = self::getPermissions();

        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(trans('messages.types.services'));
        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(trans('messages.types.services')),
                'url' => route('services.types.index')
            ],
            [
                'title' => trans('messages.edit existing type'),
                'url' => ''
            ]
        ];


        return view('admin.types.views.edit', $data);

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\BaseTypes $baseTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), PropertyController::createValidationRulesForTypeOperations());
        if ($validator->passes()) {


            $data = [];
            $dt = ServiceType::find($id);
            $dt->title = $request->input('title');
            $dt->can_have_child = $request->input('can_have_child');
            $dt->can_have_item = $request->input('can_have_item');
            $dt->parent = 0;
            $dt->save();
            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\BaseTypes $baseTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $dt = ServiceType::find($request->input('id'));
        $dt->delete();
        return response()->json(['error' => 0, 'message' => 'id is : ' . $id]);


        //
    }
}
