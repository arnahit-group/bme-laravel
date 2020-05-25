<?php

namespace App\Http\Controllers;

use App;
use App\Data;
use App\DataType;
use App\Http\Controllers\Base\BaseController;
use App\Http\Controllers\Item\ItemController;
use App\Http\Controllers\Navigation\NavigationController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Widget\WidgetController;
use App\Libraries\Utilities\DateUtility;
use App\Libraries\Utilities\ItemUtility;
use App\Libraries\Utilities\TrackerUtility;
use App\Service;
use App\ServiceProperty;
use Gateway;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Larabookir\Gateway\Sadad\Sadad;
use Route;
use Kavenegar;
use PragmaRX\Tracker\Vendor\Laravel\Facade as Tracker;


class HomeController extends Controller
{

    public static function getBaseInformation(&$data)
    {

        $data['useful_links'] = NavigationController::getNavigation('useful-links');
        $data['facility_links'] = NavigationController::getNavigation('facility-links');
        $data['navigations'] = NavigationController::getNavigation('public');
        $data['mobile_navigations'] = NavigationController::getNavigation('mobile');


        $data['website'] = ItemUtility::getItems('website')[0];
        $data['hotel'] = ItemUtility::getItems('hotel')[0];
//        dd($data['hotel']);
        $data['application'] = ItemUtility::getItems('application')[0];
        $data['map'] = ItemUtility::getItems('map')[0];
        $data['map_locations'] = ItemUtility::getItems('map_locations');

        $data['current_date'] = DateUtility::toJalali();
        $visits = [];
        $visits['today'] = TrackerUtility::getTodayVisitorsCount();
        $visits['week'] = TrackerUtility::getThisWeekVisitorsCount();
        $visits['month'] = TrackerUtility::getThisMonthVisitorsCount();
        $visits['all'] = TrackerUtility::getAllVisitorsCount();
        $data['visits'] = $visits;

    }

    public function index()
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);
        $data['navigations'] = NavigationController::getNavigation('index');
//        $data ['datas'] = DocumentController::getItems3('main-slide-show');
        return view('public.themes.hotel-new.views.index', $data);

    }

    public function index2()
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);
        $data['home_page_middle_navigations'] = NavigationController::getNavigation('home-page-middle');
        $data['rooms'] = ItemUtility::getItems('room');
//        $data ['slides'] = DocumentController::getItems3('second-slide-show');
//        $data ['galleries'] = DocumentController::getItems3('gallery');
        return view('public.themes.hotel-new.views.index2', $data);
    }

    public function showItems($type)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);

        $data['datas'] = ItemUtility::getItems('room');
        $data ['widgets'] = WidgetController::getWidgets("public.data", $type);
//        return $data;
        return view('public.themes.hotel-new.views.data', $data);

    }

    public function showItem($type, $id)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);
        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);
        $data['object'] = ItemUtility::getItem('room', $id);
        $data ['widgets'] = WidgetController::getWidgets2("public.data", Route::currentRouteName(), $type);
        return view('public.themes.hotel-new.views.data', $data);
    }


    public function showEnterPage($type)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);

        $data ['type'] = $type;

        $data ['widgets'] = WidgetController::getWidgets2("public.user", 'user', $type, Route::currentRouteName());
        return view("public.themes.hotel-new.views.user", $data);
    }


    public function showLoginPage($type)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);

        $data ['type'] = $type;

        $data ['widgets'] = WidgetController::getWidgets2("public.user", 'user', $type, Route::currentRouteName());
        return view("public.themes.hotel-new.views.user", $data);
    }

    public function showRegisterPage($type)
    {
        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);

        $data ['type'] = $type;

        $data ['widgets'] = WidgetController::getWidgets2("public.user", 'user', $type, Route::currentRouteName());
        return view("public.themes.hotel-new.views.user", $data);
    }

    public function saveCheck(Request $request)
    {

        $service_id = $request->input('service_id');

        if ($request->hasFile('path')) {

            $image = $request->file('path');
            $ext = $image->getClientOriginalExtension();
            $on = $image->getClientOriginalName();
            $name = sha1(time()) . "." . $ext;
            $image->move(public_path('uploads/checks'), $name);


            return response()->json(['error' => false, 'message' => 'success']);

        } else {
            return response()->json(['error' => false, 'message' => 'no file']);
        }

    }


    public function saveService(Request $request)
    {


    }

    public function printVoucher($code = null)
    {

        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data);

        return view('public.themes.hotel-new.views.voucher', $data);

    }

    public function payout($code = null)
    {

        if ($code != null) {

            $sd = ServiceProperty::where('title', '=', 'code')
                ->get();

            $sd_id = $sd[0]->id;
            $r = DB::table('service_assigned_properties')
                ->where('property', '=', $sd_id)
                ->where('value', '=', $code)
                ->get();

            $reserve_id = $r[0]->service;
            $props = ServiceController::getDataProperties3('reserve', $reserve_id);

        }


        try {

            $gateway = Gateway::make(new Sadad());
            $gateway->setCallback(route('home.return.from.bank', ['code' => $code]));

            if (env('PRICE_TEST_MODE') == 1) {
                $gateway->price(1000)->ready();
            } else {
                $gateway->price($props['price']->value * 10)->ready();
            }

//            $gateway->price(1000)->ready();
            $refId = $gateway->refId();
            $transID = $gateway->transactionId();
            // Your code here
            return $gateway->redirect();

        } catch (Exception $e) {

            echo $e->getMessage();
        }


    }

    public function returnFromBank($code)
    {

        try {
            $gateway = Gateway::verify();
            $trackingCode = $gateway->trackingCode();
            $refId = $gateway->refId();
            $cardNumber = $gateway->cardNumber();

            return redirect()->route('home.service', ['type' => 'reserve', 'step' => 3, 'code' => $code]);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function cancelService(Request $request)
    {

        $service_id = $request->input('service_id');
        $service = Service::find($service_id);
        $service->delete();

        return response()->json(['error' => false, 'message' => $service_id]);

    }


}
