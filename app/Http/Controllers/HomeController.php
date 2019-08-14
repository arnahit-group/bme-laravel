<?php

namespace App\Http\Controllers;

use App;
use App\Conversation;
use App\ConversationType;
use App\Data;
use App\DataType;
use App\Document;
use App\DocumentProperty;
use App\DocumentType;
use App\Jobs\SendNotificationSms;
use App\Service;
use App\ServiceProperty;
use App\ServicePropertyValue;
use App\ServiceType;
use App\User;
use App\UserProperty;
use Auth;
use DateInterval;
use DateTime;
use Gateway;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Larabookir\Gateway\Sadad\Sadad;
use Morilog\Jalali\jDateTime;
use Route;
use Session;
use stdClass;
use URL;
use View;


class HomeController extends Controller
{

    public function t2()
    {
        $class = new stdClass();
        $class->message = "test";
        $class->recipient = "09365982333";
//        $sendSms = new SendNotificationSms("09365982333", "test");
        $sendSms = new SendNotificationSms();
        $sendSms->dispatch();
//        $sendSms->dispatch()->allOnConnection('redis')->allOnQueue('podcasts');
//        SendNotificationSms::dispatch();


    }


    ///TEST
    public function createReport()
    {
        $data = [
            'foo' => 'bar'
        ];


        $view = View::make('temp.pdf', [
            'data' => 'Hello World !'
        ]);

        $html = $view->render();
//        echo $html;

        File::put('uploads/temp/itsolutionstuff.html', $html);
        return url('uploads/temp/itsolutionstuff.html');
//        $pdf = PDF::loadView('temp.pdf', $data);
//        return $pdf->stream('document.pdf');

//        $data = ['title' => 'Welcome to HDTuto.com'];
//        $pdf = PDF::loadView('temp.pdf', $data);
//        $pdf->save('uploads/temp/itsolutionstuff.pdf');
//        return response()->json(['error' => false, 'message' => url('uploads/temp/itsolutionstuff.pdf')]);


    }


//TEST


    public static function getBaseInforamation(&$data)
    {
        $data['useful_links'] = NavigationController::getNavigation('useful-links');
        $data['facility_links'] = NavigationController::getNavigation('facility-links');
        $data['navigations'] = NavigationController::getNavigation('public');
        $data['mobile_navigations'] = NavigationController::getNavigation('mobile');

        $bt_id = DataType::where('title', '=', 'website')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['website'] = DataController::getDataProperties2($bt_id->id);

        $bt_id = DataType::where('title', '=', 'map')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['map'] = DataController::getDataProperties2($bt_id->id);

        $data['map_locations'] = DataController::getItems('map-location');

        $data['chats'] = CommunicationController::getItems('external-chat-system');

    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function test()
    {


//        $path = 'http://localhost/online-hotel/uploads/post4.jpg';
        $path = 'http://localhost/online-hotel/public/uploads/post4.jpg';
        $path1 = "";
        if (stripos($path, '/public/') === false) {
            $path1 = substr_replace($path, '/public', strlen(url('/')), 0);

        } else {
            $path1 = str_replace('/public/', '/', $path);
        }


//        $us = User::where('email', '=', "kami")->get();
//
//        if (count($us) > 0) {
//            echo "1";
//        }

        $data = [];
        $data['path'] = $path;
        $data['path1'] = $path1;
        $data['base_url'] = url('/');
        $u = url('/');
        $data['base_url_count'] = strlen($u);


//        echo path1;
        return $data;
//        return view('public.service');
    }

    public function cropper()
    {
        return view('cropper-test');
    }


    public function cropper_save(Request $request)
    {
        $file = $request->input('file');
        if (!empty($file)) {
            $destinationPath = public_path() . '/uploads/test/';

            $file = str_replace('data:image/png;base64,', '', $file);
            $img = str_replace(' ', '+', $file);
            $data = base64_decode($img);
            $filename = date('ymdhis') . '_croppedImage' . ".png";
            $file = $destinationPath . $filename;
            $success = file_put_contents($file, $data);

            // THEN RESIZE IT
            $returnData = 'uploads/test/' . $filename;
            $image = Image::make(file_get_contents(URL::asset($returnData)));
            $image = $image->resize(300, 300)->save($destinationPath . $filename);

            if ($success) {
                return response()->json(['error' => false, 'message' => "success"]);
            }
        }
    }

    public function index()
    {
        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);
        $data['navigations'] = NavigationController::getNavigation('index');
        $cc = User::where('type', '=', 2)->count();
        $data['customer_count'] = $cc;
        $data ['datas'] = DocumentController::getItems('main-slide-show');
        return view('public.themes.hotel.views.index', $data);

    }

    public function index2()
    {
        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);

//        $data['navigations'] = NavigationController::getNavigation('public');
        $cc = User::where('type', '=', config('base.user_types.customer'))->count();
        $data['customer_count'] = $cc;
//        $data ['user'] = UserController::getCurrentUserData();
        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['data'] = DataController::getDataProperties2($bt_id->id);


//        $bt_id = DataType::where('title', '=', 'application')->first();
//        $bt_id = Data::where('type', '=', $bt_id->id)->first();
//        $data['application'] = DataController::getDataProperties2($bt_id->id);

        $data['application'] = DataController::getItem('application');

        $data['rooms'] = DataController::getItems('room');
        $data ['slides'] = DocumentController::getItems('second-slide-show');
        $data ['galleries'] = DocumentController::getItems('gallery');


        $bt_id = DataType::where('title', '=', 'map')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['map'] = DataController::getDataProperties2($bt_id->id);

//        $bt_id = DataType::where('title', '=', 'map-location')->first();
//        $data['map_locations'] = DataController::getDataProperties($bt_id->id);


//        return $data;

//        app()->setLocale('en');


        return view('public.themes.hotel.views.index2', $data);
    }


    public function showDocument($type = null, $id = null)
    {

//        return $document_type;
        if ($type == null) {
            abort(404);
        }

        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);

//        $data['navigations'] = NavigationController::getNavigation('public');
        $cc = User::where('type', '=', 2)->count();
        $data['customer_count'] = $cc;

        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['data'] = DataController::getDataProperties2($bt_id->id);
//        return $data['data'];
        $data ['slides'] = DocumentController::getItems('second-slide-show');
        $data ['galleries'] = DocumentController::getItems('gallery');
        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);
        $data ['type'] = $type;


        $bt_id = DataType::where('title', '=', 'map')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['map'] = DataController::getDataProperties2($bt_id->id);


        if (DocumentController::isPage($type)) {
            $bt_id = DocumentType::where('title', '=', $type)->first();
            $bt = Document::where('type', '=', $bt_id->id)->first();
            $bt['properties'] = DocumentController::getDataProperties2($bt->id);
            $data ['datas'] = $bt;
//            return $bt;
        } else {
            if ($type == 'gallery') {

                $data ['datas'] = DocumentController::getItems($type);
                if (!is_null($id))
                    $data ['id'] = $id;

            } else {

                $data ['datas'] = DocumentController::getItems($type);

            }
        }

        $data ['widgets'] = WidgetController::getWidgets2("public.document", 'document', $type, Route::currentRouteName());
//        return $data;
//        return;
        return view("public.themes.hotel.views.document", $data);
    }


    public function showEnterPage($type)
    {
        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);

//        $data['navigations'] = NavigationController::getNavigation('public');
        $cc = User::where('type', '=', 2)->count();
        $data['customer_count'] = $cc;
        $data ['type'] = $type;

        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);

        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['data'] = DataController::getDataProperties2($bt_id->id);


        $data ['widgets'] = WidgetController::getWidgets2("public.user", 'user', $type, Route::currentRouteName());
        return view("public.themes.hotel.views.user", $data);
    }


    public function showLoginPage($type)
    {
        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);

//        $data['navigations'] = NavigationController::getNavigation('public');
        $cc = User::where('type', '=', 2)->count();
        $data['customer_count'] = $cc;
        $data ['type'] = $type;

        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);

        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['data'] = DataController::getDataProperties2($bt_id->id);


        $data ['widgets'] = WidgetController::getWidgets2("public.user", 'user', $type, Route::currentRouteName());
        return view("public.themes.hotel.views.user", $data);
    }

    public function showRegisterPage($type)
    {
        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);

//        $data['navigations'] = NavigationController::getNavigation('public');
        $cc = User::where('type', '=', 2)->count();
        $data['customer_count'] = $cc;
        $data ['type'] = $type;

        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);

        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['data'] = DataController::getDataProperties2($bt_id->id);


        $data ['widgets'] = WidgetController::getWidgets2("public.user", 'user', $type, Route::currentRouteName());
        return view("public.themes.hotel.views.user", $data);
    }


    public function showService($type = null, Request $request)
    {
        if ($type == null) {
            abort(404);
        }


        $step = $request->get('step');

        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $settings = ServiceProperty::where('type', '=', $bt_id->id)->where('is_setting', '=', 1)->get();
        $sett = new stdClass();
        foreach ($settings as $setting) {
            $sett->{$setting->title} = $setting->default_value;
        }

        $data['settings'] = $sett;

        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['data'] = DataController::getDataProperties2($bt_id->id);
        $data ['slides'] = DocumentController::getItems('second-slide-show');
        $data ['galleries'] = DocumentController::getItems('gallery');
        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);

        if ($step == 1) {

            $start = $request->get('start');
            $sts = explode("/", $start);
            $jy = $sts [0];
            $jm = $sts [1];
            $jd = $sts [2];

            $gy = 0;
            $gm = 0;
            $gd = 0;

            if (jDateTime::checkDate($jy, $jm, $jd, true) == true) {
                $gts = jDateTime::toGregorian($jy, $jm, $jd);
                $gy = $gts[0];
                $gm = $gts[1];
                $gd = $gts[2];
            }
            $count = $request->get('count');
            $dates = [];
            for ($i = 0; $i < $count; $i++) {
                $test = new DateTime("$gm/$gd/$gy");
                $test->add(new DateInterval('P' . $i . 'D'));
                $date1 = jDateTime::toJalali($test->format("Y"), $test->format("m"), $test->format("d"));
                $dates [] = "{$date1[0]}/{$date1[1]}/{$date1[2]}";
            }

            $data['dates'] = $dates;


            $data['navigations'] = NavigationController::getNavigation('public');
            $cc = User::where('type', '=', 2)->count();
            $data['customer_count'] = $cc;


            //TODO BUG
            $data_type = $request->get('type');
            $object = $request->get('object');
            $count = $request->get('count');
            $data['count'] = $count;

            $obj = new stdClass();
            $obj->id = $object;
            $obj->properties = DataController::getDataProperties2($object);
            $data['object'] = $obj;

            return view("public.themes.hotel.views.service", $data);

        } elseif ($step == 2) {


            $sd = ServiceProperty::where('title', '=', 'code')
                ->get();
            $sd_id = $sd[0]->id;
            $r = DB::table('service_assigned_properties')
                ->where('property', '=', $sd_id)
                ->where('value', '=', $request->get('code'))
                ->get();

            $reserve_id = $r[0]->service;

            $props = ServiceController::getDataProperties2($reserve_id);

            $obj = new stdClass();
            $obj->id = $reserve_id;
            $obj->properties = $props;

            $data['reserve'] = $obj;
//            return $data;
            return view("public.themes.hotel.views.service", $data);


        } elseif ($step == 3) {

            $sd = ServiceProperty::where('title', '=', 'code')
                ->get();
            $sd_id = $sd[0]->id;
            $r = DB::table('service_assigned_properties')
                ->where('property', '=', $sd_id)
                ->where('value', '=', $request->get('code'))
                ->get();

            $reserve_id = $r[0]->service;

            $props = ServiceController::getDataProperties2($reserve_id);


            $obj = new stdClass();
            $obj->id = $reserve_id;
            $obj->properties = $props;

            $data['reserve'] = $obj;
//            return $data;


            if ($obj->properties['situation']->title != 7 && $obj->properties['situation']->title != 9) {
                abort(404);
            }

            return view("public.themes.hotel.views.service", $data);

        }


    }

    public function updateServiceForm(Request $request)
    {


        $start = $request->input('start');
        $count = $request->input('count');
        $price = $request->input('price');


        $sts = explode("/", $start);
        $jy = $sts [0];
        $jm = $sts [1];
        $jd = $sts [2];

        $gy = 0;
        $gm = 0;
        $gd = 0;

        if (jDateTime::checkDate($jy, $jm, $jd, true) == true) {
            $gts = jDateTime::toGregorian($jy, $jm, $jd);
            $gy = $gts[0];
            $gm = $gts[1];
            $gd = $gts[2];
        }

        $test = new DateTime("$gm/$gd/$gy");
//        return date_format($test, 'Y-m-d');
//        $test->add(new DateInterval("P1D"));
//        return date_format($test, 'Y-m-d');
//        echo date('Y-m-d', strtotime($test. ' + 1 days'));

        $dates = [];
        for ($i = 0; $i < $count; $i++) {

//            $t1 = $test;
            $test = new DateTime("$gm/$gd/$gy");
            $test->add(new DateInterval('P' . $i . 'D'));
            $date1 = jDateTime::toJalali($test->format("Y"), $test->format("m"), $test->format("d"));
//            $t = new DateTime("{$date1[1]}/{$date1[2]}/{$date1[0]}");
            $dates [] = "{$date1[0]}/{$date1[1]}/{$date1[2]}";
//            echo date_format($test, 'Y-m-d');
//            echo "<br>";
//            echo $test->format("Y");
//            echo "<br>";
//            echo "<br>";
//            echo "<br>";

        }

        $data['dates'] = $dates;
        $data['price'] = $price;
        return response()->json(['error' => false, 'message' => $data]);

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

            ServiceController::changePropertyValue($service_id, 'situation', 5);

            $bt_id = DocumentType::where('title', '=', "check")->first();
            $data = new Document();
            $data->type = $bt_id->id;
            $data->save();
            $dt_id = $data->id;

            $properties = DocumentProperty::where('type', '=', $bt_id->id)->get();

            foreach ($properties as $property) {

                if ($property->title == 'date') {
                    $res_date = round(microtime(true) * 1000, 0);
                    DB::table('document_assigned_properties')
                        ->insert(
                            [
                                'property' => $property->id,
                                'document' => $dt_id,
                                'value' => $res_date
                            ]
                        );

                } elseif ($property->title == 'path') {

                    DB::table('document_assigned_properties')
                        ->insert(
                            [
                                'property' => $property->id,
                                'document' => $dt_id,
                                'value' => url('uploads/checks/') . "/" . $name
                            ]
                        );
                } elseif ($property->title == 'title') {
                    DB::table('document_assigned_properties')
                        ->insert(
                            [
                                'property' => $property->id,
                                'document' => $dt_id,
                                'value' => 'check for service:' . $service_id
                            ]
                        );
                }

            }


            $rels = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.service'))
                ->where('object_id', '=', $service_id)
                ->get(['relation']);

            $rel_id = $rels[0]->relation;

            DB::table('relation_objects')
                ->insert(
                    [
                        'relation' => $rel_id,
                        'object_type' => config('base.object_types.document'),
                        'object_id' => $dt_id,
                    ]
                );

            return response()->json(['error' => false, 'message' => 'success']);

        } else {
            return response()->json(['error' => false, 'message' => 'no file']);
        }

    }


    public function getServicePropertyValue(Request $request)
    {

        $service_id = $request->input('service_id');
        $property = $request->input('property');
        $service = Service::find($service_id);

        $properties = ServiceProperty::where('type', '=', $service->type)
            ->where('title', '=', $property)
            ->get();

        $p_id = $properties[0]->id;

        $vs = DB::table('service_assigned_properties')
            ->where('service', '=', $service_id)
            ->where('property', '=', $p_id)
            ->get();

        $v = 0;
        if (count($vs) > 0) {
            $v = $vs [0]->value;
        }

        return response()->json(['error' => 1, 'message' => $v]);
    }


    public function saveService(Request $request)
    {

        $us = ServicePropertyController::getSettingValue('reserve', 'users-to-get-notifications');
        $user_ids = explode(',', $us);

        $sp = UserProperty::where('title', '=', 'mobile')->where('type', '=', 1)->get();
        $sp_id = $sp[0]->id;

        $mobiles = DB::table('user_assigned_properties')
            ->where('property', '=', $sp_id)
            ->whereIn('user', $user_ids)
            ->get();

//        $m_t = "09113334886";

//        dd($request);

//        $pdf = PDF::loadView('pdf.invoice');
//        return $pdf->download('invoice.pdf');

        $step = 0;
        if ($request->input('step'))
            $step = $request->input('step');

        if ($step == 1) {


            $email = $request->input('email');
            $res = UserController::isUserExistsBasedOnEmail($email);
            $user = UserController::getUserBasedOnEmail($email);
            $user_id = 0;
            if ($res > 0) {
                $user_id = $res;
                Auth::login($user);
            } else {

                $t_pass = substr(md5(microtime()), rand(0, 25), 6);

                $user = new User();
                $user->email = $email;
                $user->type = config('base.user_types.customer');
                $user->password = bcrypt($t_pass);
                $user->save();
                $user_id = $user->id;

                UserController::saveProperties($request, 'customer', $user_id);


                Auth::login($user);

                $me = "کاربر گرامی نام اکانت شما فعال میباشد. برای پیگیری های بعدی از اطلاعات زیر استفاده نمایید";
                $me .= "\n";
                $me .= 'ایمیل :' . $email;
                $me .= "\n";
                $me .= 'رمز عبور:' . $t_pass;
                require_once app_path() . '/Libraries/api_send_sms.php';
                Send_SMS('sabouri-hotel', 'sabourihotel', '10002972', $request->input('mobile'), $me, 0, false);


            }


            $request->merge(['customer' => $user_id]);

            $service = new  Service();
            $service->type = 1;
            $service->save();
            $service_id = $service->id;

//            return response()->json(['error' => false, 'message' => ['reserve_id' => $service_id, 'code' => 0000, 'url' => 'sdfdsff']]);

            $res_date = round(microtime(true) * 1000, 0);

            $st_date = $request->input('start_date');
            $st_dates = explode('/', $st_date);
            $gr_st_dates = jDateTime::toGregorian($st_dates[0], $st_dates[1], $st_dates[2]);
            $gr_st_date = new DateTime("{$gr_st_dates[1]}/{$gr_st_dates[2]}/{$gr_st_dates[0]}");
            $gr_st_date = round($gr_st_date->getTimestamp() * 1000, 0);
            $request->merge(['start_date' => $gr_st_date]);


            $en_date = $request->input('end_date');
            $en_dates = explode('/', $en_date);
            $gr_en_dates = jDateTime::toGregorian($en_dates[0], $en_dates[1], $en_dates[2]);
            $gr_en_date = new DateTime("{$gr_en_dates[1]}/{$gr_en_dates[2]}/{$gr_en_dates[0]}");
            $gr_en_date = round($gr_en_date->getTimestamp() * 1000, 0);
            $request->merge(['end_date' => $gr_en_date]);

            $uniqueId = time() . '-' . mt_rand();
            $request->merge(['code' => $uniqueId]);


            $request->merge(['start_date' => $gr_st_date]);
            $request->merge(['confirmation_date' => $gr_st_date]);
            $request->merge(['date' => $res_date]);
            $request->merge(['last-date-situation-updated' => $res_date]);


            $spv = ServicePropertyValue::where('value', '=', 'room requested')
                ->where('property', '=', 8)
                ->get();

            $request->merge(['situation' => $spv[0]->id]);
            $request->merge(['condition' => $spv[0]->id]);


            ServiceController::saveProperties($request, 'reserve', $service_id);


            $rels = [];
            $rel_d = new stdClass();
            $rel_d->object_id = $user_id;
            $rel_d->object_type = config("base.object_types.user");
            $rels[] = $rel_d;

            $rel_d = new stdClass();
            $rel_d->object_id = 1;
            $rel_d->object_type = config("base.object_types.user");
            $rels[] = $rel_d;

            $rel_u = new stdClass();
            $rel_u->object_id = $service_id;
            $rel_u->object_type = config("base.object_types.service");
            $rels[] = $rel_u;

            $rel_u = new stdClass();
            $rel_u->object_id = $request->input('data_id');
            $rel_u->object_type = config("base.object_types.data");
            $rels[] = $rel_u;

            RelationController::createRelation('reserve', $rels);


            Session::put('reserve_id', $service_id);

            $me = " مدیر گرامی، رزرو در هتل صبوری رشت منتظر تایید اتاق میباشد. ";
            $me .= "\n";
            $me .= url("/admin");
            require_once app_path() . '/Libraries/api_send_sms.php';

            foreach ($mobiles as $mobile) {

//                $sendSms = new SendNotificationSms($mobile->value, $me);
//                $this->dispatch($sendSms);

                Send_SMS('sabouri-hotel', 'sabourihotel', '10002972', $mobile->value, $me, 0, false);
            }

            $next_step_url = route('home.service', ['type' => 'reserve', 'step' => 2, 'code' => $uniqueId]);
            return response()->json(['error' => false, 'message' => ['reserve_id' => $service_id, 'code' => $uniqueId, 'url' => $next_step_url]]);
        } elseif ($step == 2) {


        } elseif ($step == 3) {


        }


//        Send_SMS('iran', '123456', '100002972', '09388002972', 'Hello World!', 0, false);


    }


    public function saveMessage(Request $request)
    {


        $email = $request->input('email');
        $name = $request->input('$name');
        $mobile = $request->input('mobile');


//        return response()->json(['error' => false, 'message' => 'ok']);

        $u = UserController::getUserBasedOnEmail($email);

        $u_id = 0;
        if (!is_null($u)) {

            $u_id = $u->id;

        } else {

            $t_pass = substr(md5(microtime()), rand(0, 25), 6);
            $user = new User();
            $user->email = $email;
            $user->type = config('base.user_types.customer');
            $user->password = bcrypt($t_pass);
            $user->save();
            $u_id = $user->id;
        }


        $bt_id = ConversationType::where('title', '=', 'message')->first();
        $data = new Conversation();
        $data->type = $bt_id->id;
        $data->save();

        $request->merge(['date' => round(microtime(true) * 1000, 0)]);
        $request->merge(['reply-to' => 0]);
        $request->merge(['sender' => $u_id]);


        ConversationController::saveProperties($request, 'message', $data->id);

        return response()->json(['error' => false, 'message' => 'ok']);

    }

    public function testReserve($id)
    {
        $props = ServiceController::getDataProperties2($id);


        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['hotel'] = DataController::getDataProperties2($bt_id->id);


        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);

//
//        $data = [];
//        $data ['service'] = $props;
//        $pdf = PDF::loadView('temp.pdf');
//        $pdf->save('uploads/temp/itsolutionstuff.pdf');
//        return response()->json(['error' => false, 'message' => url('uploads/temp/itsolutionstuff.pdf')]);


        $data['reserve'] = $props;

        return $data;
    }


    public function printVoucher($code = null)
    {


        $sd = ServiceProperty::where('title', '=', 'code')
            ->get();
        $sd_id = $sd[0]->id;
        $r = DB::table('service_assigned_properties')
            ->where('property', '=', $sd_id)
            ->where('value', '=', $code)
            ->get();

        if (count($r) == 0)
            abort('404');

        $reserve_id = $r[0]->service;

        $props = ServiceController::getDataProperties2($reserve_id);

        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['hotel'] = DataController::getDataProperties2($bt_id->id);

        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);


        $rel_id = DB::table('relation_objects')
            ->where('object_type', '=', config('base.object_types.service'))
            ->where('object_id', '=', $reserve_id)
            ->get();


        $rel_id = $rel_id[0]->relation;

        $relations = DB::table('relation_objects')
            ->where('relation', '=', $rel_id)
            ->get();

//        return $relations;
        foreach ($relations as $relation) {
            if ($relation->object_type == config('base.object_types.user')) {
                $obj_id = $relation->object_id;
                $usr = User::find($obj_id);
                if ($usr->type == config('base.user_types.user')) {
                    $data['user'] = UserController::getDataProperties2($obj_id);
                } elseif ($usr->type == config('base.user_types.customer')) {
                    $data['customer'] = UserController::getDataProperties2($obj_id);
                }
            } elseif ($relation->object_type == config('base.object_types.data')) {
                $obj_id = $relation->object_id;
                $data['room'] = DataController::getDataProperties2($obj_id);
            }
        }


//        return $data;
//        return $rel_id ;
//
//        $data = [];
//        $data ['service'] = $props;
//        $pdf = PDF::loadView('temp.pdf');
//        $pdf->save('uploads/temp/itsolutionstuff.pdf');
//        return response()->json(['error' => false, 'message' => url('uploads/temp/itsolutionstuff.pdf')]);


        $st_date = $props['start_date']->title;
        $st = date("d-m-Y", $st_date / 1000);
        $props['gr_start_date'] = new stdClass();
        $props['gr_start_date']->title = $st;

        $gy = date("Y", $st_date / 1000);
        $gm = date("m", $st_date / 1000);
        $gd = date("d", $st_date / 1000);
        $ja = jDateTime::toJalali($gy, $gm, $gd);
        $props['ja_start_date'] = new stdClass();
        $props['ja_start_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";


        $en_date = $props['end_date']->title;
        $props['gr_end_date'] = new stdClass();
        $props['gr_end_date']->title = date("d-m-Y", $en_date / 1000);

        $gy = date("Y", $en_date / 1000);
        $gm = date("m", $en_date / 1000);
        $gd = date("d", $en_date / 1000);
        $ja = jDateTime::toJalali($gy, $gm, $gd);
        $props['ja_end_date'] = new stdClass();
        $props['ja_end_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";


        $cn_date = $props['confirmation_date']->title;
        $props['gr_confirmation_date'] = new stdClass();
        $props['gr_confirmation_date']->title = date("d-m-Y", $cn_date / 1000);

        $gy = date("Y", $cn_date / 1000);
        $gm = date("m", $cn_date / 1000);
        $gd = date("d", $cn_date / 1000);
        $ja = jDateTime::toJalali($gy, $gm, $gd);
        $props['ja_confirmation_date'] = new stdClass();
        $props['ja_confirmation_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";


        $data['reserve'] = $props;
        if ($props['situation']->title != 7 && $props['situation']->title != 9) {
            abort(404);
        }

//        $view = View::make('temp.pdf', $data);
//        $html = $view->render();
//        echo $html;
//        File::put('uploads/temp/itsolutionstuff.html', $html);
//        return url('uploads/temp/itsolutionstuff.html');

        $me = " میهمان گرامی، رزرو واحد مورد نظر شما در هتل صبوری رشت تایید گردید. ";
        $me .= "\n";
        $me .= "کد رهگیری شما :{$data['reserve']['code']->title}";
        $me .= "\n";
        $me .= "برای نمایش و پرینت واچر از آدرس زیر استفاده نمایید";
        $me .= "\n";
        $me .= url("/documents/ajax/voucher/{$data['reserve']['code']->title}");

        require_once app_path() . '/Libraries/api_send_sms.php';

        Send_SMS('sabouri-hotel', 'sabourihotel', '10002972', "{$data['customer']['mobile']->title}", $me, 0, false);


        //        return $data;
        return view('public.themes.hotel.views.voucher', $data);
//        return response()->json(['error' => false, 'message' => url('uploads/temp/itsolutionstuff.html')]);


    }

    public function payout($code = null)
    {
//        dd($code);

        if ($code != null) {

            $sd = ServiceProperty::where('title', '=', 'code')
                ->get();

            $sd_id = $sd[0]->id;
            $r = DB::table('service_assigned_properties')
                ->where('property', '=', $sd_id)
                ->where('value', '=', $code)
                ->get();

            $reserve_id = $r[0]->service;
            $props = ServiceController::getDataProperties2($reserve_id);

//            ServiceController::changePropertyValue($reserve_id, 'situation', 7);
        }


//        require_once app_path() . '/Libraries/sadad/Function.php';
////            $key = "QWe5bq2b3KuAu8/WaYFh0yxbGa8XnDMv";
//        $key = "LAK6dRBCSZuFQD+OR0lSKrgAMtp1CmLA";
////        $key = "iokHodHGVbEW7kg7p5uMNKII2gbaDL54rjqgaayMJLY=";
//        $MerchantId = "000000140330029";
//        $TerminalId = 24052487;
//        $Amount = 12541; //Rials
//        $OrderId = time();
////        date_default_timezone_set('Asia/Tehran');
//        $LocalDateTime = date("m/d/Y g:i:s a");
////        $ReturnUrl = route('home.return.from.bank', ['code' => $code]);
//        $ReturnUrl = url('/');
//        $SignData = encrypt_pkcs7("$TerminalId;$OrderId;$Amount", "$key");
////        dd($SignData);
//        $data = array('TerminalId' => $TerminalId,
//            'MerchantId' => $MerchantId,
//            'Amount' => $Amount,
//            'SignData' => $SignData,
//            'ReturnUrl' => $ReturnUrl,
//            'LocalDateTime' => $LocalDateTime,
//            'OrderId' => $OrderId);
//        $str_data = json_encode($data);
//        $res = CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Request/PaymentRequest', $str_data);
//        $arrres = json_decode($res);
//        if ($arrres->ResCode == 0) {
//            $Token = $arrres->Token;
//            $url = "https://sadad.shaparak.ir/VPG/Purchase?Token=$Token";
//            header("Location:$url");
//        } else {
//            echo $arrres->ResCode;
//            echo "<br>";
//            die($arrres->Description);
//
//        }


        try {

            $gateway = Gateway::make(new Sadad());
            $gateway->setCallback(route('home.return.from.bank', ['code' => $code]));

            if (env('PRICE_TEST_MODE') == 1) {
                $gateway->price(1000)->ready();
            } else {
                $gateway->price($props['price']->title * 10)->ready();
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


            $sd = ServiceProperty::where('title', '=', 'code')
                ->get();

            $sd_id = $sd[0]->id;
            $r = DB::table('service_assigned_properties')
                ->where('property', '=', $sd_id)
                ->where('value', '=', $code)
                ->get();

            $reserve_id = $r[0]->service;
            ServiceController::changePropertyValue($reserve_id, 'situation', 9);

            return redirect()->route('home.service', ['type' => 'reserve', 'step' => 3, 'code' => $code]);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function tracking(Request $request)
    {

        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);


        $data['found'] = false;

        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['data'] = DataController::getDataProperties2($bt_id->id);


        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);

        $bt_id = DataType::where('title', '=', 'map')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['map'] = DataController::getDataProperties2($bt_id->id);


        $sd = ServiceProperty::where('title', '=', 'code')
            ->get();
        $sd_id = $sd[0]->id;
        $r = DB::table('service_assigned_properties')
            ->where('property', '=', $sd_id)
            ->where('value', '=', $request->get('code'))
            ->get();



        if (count($r) == 0) {
            $data['found'] = false;
            return view('public.service', $data);

        }else
        {
            $data['found'] = true;
        }


        $reserve_id = $r[0]->service;

        $props = ServiceController::getDataProperties2($reserve_id);

        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['hotel'] = DataController::getDataProperties2($bt_id->id);

        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);


        $rel_id = DB::table('relation_objects')
            ->where('object_type', '=', config('base.object_types.service'))
            ->where('object_id', '=', $reserve_id)
            ->get();


        $rel_id = $rel_id[0]->relation;

        $relations = DB::table('relation_objects')
            ->where('relation', '=', $rel_id)
            ->get();

//        return $relations;
        foreach ($relations as $relation) {
            if ($relation->object_type == config('base.object_types.user')) {
                $obj_id = $relation->object_id;
                $usr = User::find($obj_id);
                if ($usr->type == config('base.user_types.user')) {
                    $data['user'] = UserController::getDataProperties2($obj_id);
                } elseif ($usr->type == config('base.user_types.customer')) {
                    $data['customer'] = UserController::getDataProperties2($obj_id);
                }
            } elseif ($relation->object_type == config('base.object_types.data')) {
                $obj_id = $relation->object_id;
                $data['room'] = DataController::getDataProperties2($obj_id);
            }
        }

        $st_date = $props['start_date']->title;
        $st = date("d-m-Y", $st_date / 1000);
        $props['gr_start_date'] = new stdClass();
        $props['gr_start_date']->title = $st;

        $gy = date("Y", $st_date / 1000);
        $gm = date("m", $st_date / 1000);
        $gd = date("d", $st_date / 1000);
        $ja = jDateTime::toJalali($gy, $gm, $gd);
        $props['ja_start_date'] = new stdClass();
        $props['ja_start_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";


        $en_date = $props['end_date']->title;
        $props['gr_end_date'] = new stdClass();
        $props['gr_end_date']->title = date("d-m-Y", $en_date / 1000);

        $gy = date("Y", $en_date / 1000);
        $gm = date("m", $en_date / 1000);
        $gd = date("d", $en_date / 1000);
        $ja = jDateTime::toJalali($gy, $gm, $gd);
        $props['ja_end_date'] = new stdClass();
        $props['ja_end_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";


        $cn_date = $props['confirmation_date']->title;
        $props['gr_confirmation_date'] = new stdClass();
        $props['gr_confirmation_date']->title = date("d-m-Y", $cn_date / 1000);

        $gy = date("Y", $cn_date / 1000);
        $gm = date("m", $cn_date / 1000);
        $gd = date("d", $cn_date / 1000);
        $ja = jDateTime::toJalali($gy, $gm, $gd);
        $props['ja_confirmation_date'] = new stdClass();
        $props['ja_confirmation_date']->title = "{$ja[2]}/{$ja[1]}/{$ja[0]}";

        $data['reserve'] = $props;


        return view('public.themes.hotel.views.service', $data);

    }

    public function cancelService(Request $request)
    {

        $service_id = $request->input('service_id');
        $service = Service::find($service_id);
        $service->delete();

        return response()->json(['error' => false, 'message' => $service_id]);

    }


    public function showData($type = null, $id = null)
    {


//        app()->setlocale('ar');
        if ($type == null) {
            abort(404);
        }


        $data = BaseController::createBaseInformations();
        HomeController::getBaseInforamation($data);


//        $data['locale1'] = app()->getlocale();

//        $data['navigations'] = NavigationController::getNavigation('public');
        $cc = User::where('type', '=', 2)->count();
        $data['customer_count'] = $cc;
        $bt_id = DataType::where('title', '=', 'hotel')->first();
        $data['data'] = DataController::getDataProperties2($bt_id->id);
        $data ['slides'] = DocumentController::getItems('second-slide-show');
        $data ['galleries'] = DocumentController::getItems('gallery');
        $data ['type'] = $type;

        $bt_id = DataType::where('title', '=', 'application')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['application'] = DataController::getDataProperties2($bt_id->id);

        $bt_id = DataType::where('title', '=', 'map')->first();
        $bt_id = Data::where('type', '=', $bt_id->id)->first();
        $data['map'] = DataController::getDataProperties2($bt_id->id);


        if ($id == null) {
            $bt_id = DataType::where('title', '=', $type)->first();
            $objects = Data::where('type', '=', $bt_id->id)->get();

            for ($i = 0; $i < count($objects); $i++) {
                $objects[$i]->properties = DataController::getDataProperties2($objects[$i]->id);
            }
            $data['datas'] = $objects;
        } else {

            $object = new stdClass();
            $object->id = $id;
            $object->properties = DataController::getDataProperties2($id);

            $res_date = round(microtime(true) * 1000, 0);
            $rels = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.data'))
                ->where('object_id', '=', $object->id)
                ->get(['relation']);

            $base_rels = [];
            foreach ($rels as $rel) {
                $base_rels[] = $rel->relation;
            }

            $rel2s = DB::table('relation_objects')
                ->where('object_type', '=', config('base.object_types.service'))
                ->whereIn('relation', $base_rels)
                ->get(['object_id']);

            $situation = 'free';
            foreach ($rel2s as $rel2) {

                $std = new stdClass();

                $prps = DB::table('service_assigned_properties')
                    ->join('service_properties', 'service_assigned_properties.property', '=', 'service_properties.id')
                    ->where('service_assigned_properties.service', '=', $rel2->object_id)
                    ->get(['service_properties.title', 'service_assigned_properties.value']);

                foreach ($prps as $prp) {
                    $std->{$prp->title} = $prp->value;
                }

                if (isset($std->situation) && $std->situation == 7 && isset($std->end_date) && $std->end_date > $res_date) {
                    $situation = 'reserved';
                }
            }


            $object->situation = $situation;

            $data['object'] = $object;
//            return $data;
        }


        $data ['widgets'] = WidgetController::getWidgets2("public.data", 'data', $type, Route::currentRouteName());
//        return $data;


//        App::setLocale('en');
//        return $data;
        return view("public.themes.hotel.views.data", $data);
    }


}
