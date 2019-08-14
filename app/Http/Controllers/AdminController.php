<?php

namespace App\Http\Controllers;

use DateTime;

class AdminController extends Controller
{

    function __construct()
    {
//        $this->middleware(['auth', 'authAdmin']);
    }


    public function index()
    {

        $data = [];
        $data ['user'] = UserController::getCurrentUserData();

        $data['navigations'] = NavigationController::getNavigation('admin');

        $data['customer_count'] = UserController::getUserCount(config('base.user_types.customer'));
        $data['user_count'] = UserController::getUserCount(config('base.user_types.user'));
//        $data['gallery_count'] = DocumentController::getDocumentsCount(config('base.document_types.gallery'));


        $d = ServiceController::getServices('reserve');
        $data = array_merge($data, $d);

        $data['users'] = UserController::get('user');
        $data['customers'] = UserController::get('customer');
        $data['rooms'] = DataController::getItems('room');


        $d = date('d');
        $m = date('m');
        $y = date('Y');

        $gr_st_date = new DateTime("$m/$d/$y");
        $today_timestamp = round($gr_st_date->getTimestamp() * 1000, 0);


        $data['today'] =  $d . "-" . $m . ' - ' . $y;

//        return $data;
        return view('admin.index', $data);
    }

    //
}
