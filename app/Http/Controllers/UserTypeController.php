<?php

namespace App\Http\Controllers;

use App\UserType;
use Illuminate\Http\Request;
use Validator;

class UserTypeController extends Controller
{
    public static function getBaseInforamation(&$data)
    {
        $data['navigations'] = NavigationController::getNavigation('admin');
    }

    public static function getPermissions()
    {
        $permissions = [];
        $permissions['create'] = "users.types.create";
        $permissions['store'] = "users.types.store";
        $permissions['update'] = "users.types.update";
        $permissions['edit'] = "users.types.edit";
        $permissions['change'] = "users.types.change";
        $permissions['destroy'] = "users.types.destroy";
        return $permissions;

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

        $datas = UserType::all();

        $data['datas'] = $datas;


        $urls = [];
        $urls['create'] = route("users.types.create");
        $urls['destroy'] = route("users.types.destroy");
        $urls['index'] = route("users.types.index");
        $data['urls'] = $urls;

        $data['permissions'] = self::getPermissions();


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

        $urls = [];
        $urls['store'] = route("users.types.store");
        $urls['index'] = route("users.types.index");
        $data['urls'] = $urls;

        $data['permissions'] = self::getPermissions();


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


            $dt = new UserType();
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
     * @param \App\DocumentType $documentType
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentType $documentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\DocumentType $documentType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInforamation($data);
        $dt = UserType::find($id);
        $data['data'] = $dt;
        $data['id'] = $id;
        $urls = [];
        $urls['update'] = route("users.types.update", ['id' => $id]);
        $urls['index'] = route("users.types.index");
        $data['urls'] = $urls;

        $data['permissions'] = self::getPermissions();

        return view('admin.types.views.edit', $data);

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\DocumentType $documentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), PropertyController::createValidationRulesForTypeOperations());
        if ($validator->passes()) {

            $data = [];
            $dt = UserType::find($id);
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
     * @param \App\DocumentType $documentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $dt = UserType::find($request->input('id'));
        $dt->delete();
        return response()->json(['error' => 0, 'message' => 'id is : ' . $id]);


        //
    }
}
