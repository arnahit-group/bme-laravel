<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceType;

class AdminController extends Controller
{


    public function index()
    {

        $data = [];
        $data ['user'] = UserController::getCurrentUserData();

        $data['navigations'] = NavigationController::getNavigation('admin');

        $data['customer_count'] = UserController::getUserCount(config('base.user_types.customer'));
        $data['user_count'] = UserController::getUserCount(config('base.user_types.user'));
        $data['gallery_count'] = DocumentController::getDocumentsCount(config('base.document_types.gallery'));

        $d = ServiceController::getServices('reserve');
        $data = array_merge($data, $d);

//        $bt_id = ServiceType::where('title', '=', 'reserve')->first();
//        $objects = Service::where('service_type', '=', $bt_id->id)->get();
//        $waiting_reserves = [];
//        $all_reserves = [];
//        $verified_reserves = [];
//        for ($i = 0; $i < count($objects); $i++) {
//            $objects[$i]->properties = ServiceController::getServiceProperties($objects[$i]->id);
//            $all_reserves [] = $objects[$i];
//            if (isset($objects[$i]->properties['situation']) && ($objects[$i]->properties['situation']->title == 1 || $objects[$i]->properties['situation']->title == 3)) {
//                $waiting_reserves[] = $objects[$i];
//            } else {
//                $verified_reserves[] = $objects[$i];
//            }
//        }
//
//
//        $data['verified_reserves'] = $verified_reserves;
//        $data['waiting_reserves'] = $waiting_reserves;
//        $data['all_reserves'] = $all_reserves;

        $data['users'] = UserController::get('user');
        $data['customers'] = UserController::get('customer');
        $data['rooms'] = DataController::getItems('room');


//        return $data['rooms'];

//        return;
        return view('admin.index', $data);
    }

    //
}
