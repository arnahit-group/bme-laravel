<?php

namespace App\Http\Controllers;

use App\ConversationType;
use App\Libraries\MyLib\MyPluralizer;
use Illuminate\Http\Request;
use Validator;

class ConversationTypeController extends Controller
{
    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }

    public static function getPermissions()
    {
        $permissions = [];
        $permissions['create'] = "conversations.types.create";
        $permissions['store'] = "conversations.types.store";
        $permissions['update'] = "conversations.types.update";
        $permissions['edit'] = "conversations.types.edit";
        $permissions['destroy'] = "conversations.types.destroy";

        return $permissions;

    }
    public static function getUrls($id = 0)
    {
        $urls = [];
        $urls['index'] = route("conversations.types.index");
        $urls['create'] = route("conversations.types.create");
        $urls['destroy'] = route("conversations.types.destroy");
        $urls['store'] = route("conversations.types.store");
        $urls['update'] = route("conversations.types.update", ['id' => $id]);
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

        $datas = ConversationType::all();

        $data['datas'] = $datas;
        $data ['widgets'] = WidgetController::getWidgets("conversations.types.index", 'conversation');

        $data['urls'] = self::getUrls();

        $data['permissions'] = self::getPermissions();


        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(trans('messages.types.conversations'));
        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(trans('messages.types.conversations')),
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

        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(trans('messages.types.conversations'));
        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(trans('messages.types.conversations')),
                'url' => route('conversations.types.index')
            ],
            [
                'title' => trans('messages.create new type'),
                'url' => ''
            ]
        ];

        return view('admin.types.views.create', $data);

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


            $dt = new ConversationType();
            $dt->title = $request->input('title');
            $dt->can_have_child = $request->input('can_have_child');
            $dt->can_have_item = $request->input('can_have_item');
            $dt->parent = 0;
            $dt->save();
            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);


    }

    /**
     * Display the specified resource.
     *
     * @param \App\ConversationType $conversationType
     * @return \Illuminate\Http\Response
     */
    public function show(ConversationType $conversationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ConversationType $conversationType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data);
        $dt = ConversationType::find($id);
        $data['data'] = $dt;
        $data['id'] = $id;
        $data['urls'] = self::getUrls($id);

        $data['permissions'] = self::getPermissions();


        $data['page_title'] = trans('messages.list of') . MyPluralizer::plural(trans('messages.types.conversations'));
        $data['breadcrumbs'] = [
            [
                'title' => trans('messages.navigation_titles.dashboard'),
                'url' => route('admin.index')
            ],
            [
                'title' => MyPluralizer::plural(trans('messages.types.conversations')),
                'url' => route('conversations.types.index')
            ],
            [
                'title' => trans('messages.edit existing type'),
                'url' => ''
            ]
        ];


        return view('admin.types.views.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ConversationType $conversationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), PropertyController::createValidationRulesForTypeOperations());
        if ($validator->passes()) {

            $data = [];
            $dt = ConversationType::find($id);
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
     * @param \App\ConversationType $conversationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $dt = ConversationType::find($request->input('id'));
        $dt->delete();
        return response()->json(['error' => 0, 'message' => 'id is : ' . $id]);

        //
    }
}
