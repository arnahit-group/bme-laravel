<?php

namespace App\Http\Controllers\Service;

use App;
use App\DataProperty;
use App\DataType;
use App\Http\Controllers\Base\BaseController;
use App\Http\Controllers\Base\PropertyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Item\ItemController;
use App\Http\Controllers\Navigation\NavigationController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Widget\WidgetController;
use App\Libraries\MyLib\MyPluralizer;
use App\Libraries\Utilities\BuiltInMethods;
use App\Libraries\Utilities\CarbonDateUtility;
use App\Libraries\Utilities\CodeUtilities\MethodUtility;
use App\Libraries\Utilities\ItemUtility;
use App\Libraries\Utilities\TextUtility;
use App\Libraries\Utilities\TypeUtility;
use App\Relation;
use App\Service;
use App\ServiceProperty;
use App\ServicePropertyValue;
use App\ServiceType;
use App\User;
use Carbon\Carbon;
use ChrisKonnertz\StringCalc\StringCalc;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Morilog\Jalali\jDateTime;
use Route;
use stdClass;
use Validator;
use Kavenegar;

class ServiceController extends Controller
{

    public static function getItem($type, $step = true)
    {
        $services = DB::table('services')->where('name', '=', $type)->get();

        if (count($services) == 0 || count($services) >= 2)
            return null;

        $service = $services [0];
        $commands = DB::table('service_commands')->where('service', '=', $service->id)
            ->get(['service_commands.*']);

        foreach ($commands as &$command) {
            $command->input = TextUtility::isJsonText($command->input) ? json_decode($command->input, true) : $command->input;
//            $command->output = TextUtility::isJsonText($command->output) ? json_decode($command->output, true) : $command->output;
            $command->operation = TextUtility::isJsonText($command->operation) ? json_decode($command->operation, true) : $command->operation;
        }

        $service->commands = $commands;
        return $service;

    }

    public function resumeService(Request $request, $type, $step, $refer = null)
    {

        $command = null;
        $service = ServiceController::getItem($type, true);
        $commands = $service->commands;

        foreach ($commands as $comm) {
            if ($comm->step_no == $step) {
                $command = $comm;
            }
        }

        if (!is_null($command)) {
            if ($command->operation['operate'] == "open") {
                return redirect()->route('home.services.launch', ['type' => $type, 'step' => $command->step_no])->send();
            } else {
                $request->setMethod('POST');
                $this->launchService($request, $type, $command->step_no, null);
            }
        }

    }

    public function launchService(Request $request, $type, $step = 1, $refer = null)
    {

        $next_command = null;
        $command = null;
        $service = ServiceController::getItem($type, true);
        $commands = $service->commands;
//        dd($request->getMethod() );

        foreach ($commands as $comm) {
            if ($comm->step_no == $step) {
                $command = $comm;
            }
        }

        if (is_null($command))
            abort("500");

        if ($request->getMethod() == "GET") {

            $widgets = WidgetController::getWidgetsUsingRoute(Route::currentRouteName(), $type);

            $data['useful_links'] = NavigationController::getNavigation('useful-links');
            $data['facility_links'] = NavigationController::getNavigation('facility-links');
            $data['navigations'] = NavigationController::getNavigation('public');
            $data['mobile_navigations'] = NavigationController::getNavigation('mobile');

            $data['command'] = $command;
            $data['step'] = $step;
            $data['widgets'] = $widgets;

            if (!is_null($refer)) {
                $refers = json_decode(urldecode($refer), true);
                foreach ($refers as $k => $v) {
                    $items = ItemUtility::getItems($k);
                    foreach ($items as $item) {
                        if ($item->id == $v) {
                            $data[$k] = $item;
                        }
                    }
                }
            }
//            return $data;
            if (!is_null($data['command'])) {
                return view($widgets[0]->view, $data);
            }

        } else {

            $data = [];

            if ($command->operation['operate'] == "open") {
//                $data['command'] = $command;
//                $data['step'] = $step;
//                return response()->redirectToRoute('home.services.launch', ['type' => $type, 'step' => $data['step']]);

            } elseif ($command->operation['operate'] == "do") {

                $expecting_result = null;
                if (isset($command->operation['custom_function'])) {
                    $expecting_result = MethodUtility::launchMethod($command->operation['custom_function'], $request->all());
                }

                foreach ($commands as $comm) {
                    if ($comm->step_no == $command->operation['next']) {
                        $next_command = $comm;
                    }
                }

                if (is_null($next_command)) {
                    if (!is_null($expecting_result)) {
                        if (\Request::ajax()) {
                            return response()->json(['error' => 0, 'result' => $expecting_result]);
                        }
                    }
                }

            } elseif ($command->operation['operate'] == "update") {

//                $refers = json_decode(urldecode($refer), true);
//                $table = $command->operation['table'];
//                ItemController::checkType($table);
//                ItemController::checkTables();
//                $received_data = $request->all();
//                $separated_data = ItemController::separateReceivedData($received_data);
//                ItemController::storeData($table, $separated_data['item'], $separated_data['property']);


            } elseif ($command->operation['operate'] == "create") {


                $table = $command->operation['table'];
                $received_data = $request->all();
                $separated_data = ItemUtility::separateReceivedData($table, $received_data);
                ItemUtility::storeData($table, $separated_data['item'], $separated_data['property']);


                foreach ($commands as $comm) {
                    if ($comm->step_no == $command->operation['next']) {
                        $next_command = $comm;
                    }
                }

            } elseif ($command->operation['operate'] == "condition") {

                if (isset($command->operation['custom_function'])) {
                    $expecting_result = MethodUtility::launchMethod($command->operation['custom_function'], $request->all());
                    if (!is_null($expecting_result)) {
                        foreach ($command->operation['conditions'] as $condition) {
                            if ($condition['condition'] == $expecting_result) {
                                foreach ($commands as $comm) {
                                    if ($comm->step_no == $condition['output']['next']) {
                                        $next_command = $comm;
                                    }
                                }
                            }
                        }
                    }
                }
            }

            if (!is_null($next_command)) {
                if ($next_command->operation['operate'] == "open") {
                    return redirect()->route('home.services.launch', ['type' => $type, 'step' => $next_command->step_no])->send();
                } else {
                    $this->launchService($request, $type, $next_command->step_no, null);
                }
            } else {
                if (isset($command->operation['back_to_running_service'])) {

                    $request->setMethod("GET");
                    $d = DB::table('running_services')
                        ->join('services', 'services.id', '=', 'running_services.service')
                        ->where('running_services.id', '=', $command->operation['back_to_running_service'])
                        ->get(['services.name', 'running_services.step_no']);
                    $this->resumeService($request, $d[0]->name, $d[0]->step_no);
                }
            }
        }
    }

    public static function launchTrigger($type_obj, $id, $trigger)
    {

        $v = '[{"conditions":{"event": "update","arguments": {"situation":"7,9"}},"actions": {"command": "days","source": ["start-date:end-date"],"destination": "object.inactive-days"}}]';
        $properties = self::getProperties($type_obj->title, $id);

//        dd($properties);
        $method = $trigger['actions']['command'];
        $args = $trigger['actions']['source'];
        $target = $trigger['actions']['destination'];

        $targets = [];
        if (strstr($target, '.')) {
            $targets = explode('.', $target);
        }

        if (strstr($args[0], ':')) {
            $prps = explode(':', $args[0]);
        }

        if ($method == 'days') {

            $vals = [];
            foreach ($prps as $prp) {
                foreach ($properties as $property) {
                    if ($property->title == $prp) {
                        if ($property->input_type == 'date') {
                            try {
                                $vals[$prp] = Carbon::createFromTimestamp($property->assigned['timestamp'] / 1000);
                            } catch (\Exception $ex) {
                            }

                        } else {
                            $vals[$prp] = $property->assigned;
                        }
                        break;
                    }
                }
            }


            $dates = CarbonDateUtility::generateDateRange($vals[$prps[0]], $vals[$prps[1]], false);


//            dd($properties);

            foreach ($properties as $property) {
                if ($property->title == $targets[0]) {
                    $t_prop = $property;
                    break;
                }
            }

//            dd($dates );
//            dd($t_prop);
            if ($t_prop->input_type == 'data:room') {

//                dd($t_prop);
                $d_t_id = DataType::where('title', '=', 'room')->first()['id'];
                $p_id = DataProperty::where('type', '=', $d_t_id)->where('title', '=', $targets[1])->first()['id'];

//                dd( $t_prop->assigned['id']);

                $old_data = "";
                $old_data_as = DB::table('data_assigned_properties')
                    ->where('property', '=', $p_id)
                    ->where('data', '=', $t_prop->assigned['id'])
                    ->get();

//                dd($old_data_as);

                if (count($old_data_as) != 0) {
                    $old_data = $old_data_as[0]->value;
                    $old_data = explode(',', $old_data);
                    $new_data = array_merge($old_data, $dates);
                    $new_data = array_unique($new_data);
                    sort($new_data);
                    DB::table('data_assigned_properties')
                        ->where('property', '=', $p_id)
                        ->where('data', '=', $t_prop->assigned['id'])
                        ->update(['value' => implode(',', $new_data)]);

                } else {
                    DB::table('data_assigned_properties')
                        ->insert(
                            [
                                'property' => $p_id,
                                'data' => $t_prop->assigned['id'],
                                'value' => implode(',', $dates)
                            ]
                        );
                }

            }

        }


    }

    public static function launchTriggers($type_obj, $id, array $condition)
    {
        $v = '[{"conditions":{"event": "update","arguments": {"situation":"7,9"}},"actions": {"command": "days","source": ["start-date:end-date"],"destination": "object.inactive-days"}}]';


        $triggers = [];
        $b = false;
        foreach ($type_obj->triggers as $trigger) {

            $b = true;
            if ($trigger['conditions']['event'] == $condition['event']) {

                foreach ($condition['args'] as $k => $v) {
                    if (strpos($trigger['conditions']['arguments'][$k], strval($v)) === false) {
                        $b = false;
                    }

                }
            }

            if (!$b)
                continue;

            self::launchTrigger($type_obj, $id, $trigger);
            $triggers[] = $trigger;


        }


        return $triggers;
    }

    public static function launchAllSchedules()
    {

        $builtInMethods = new  App\Libraries\Utilities\BuiltInMethods();
        $data = [];

        $sts = ServiceType::all();

        foreach ($sts as $st) {
            $st->schedules = (array)json_decode($st->schedules, true);
            if (is_array($st->schedules) && count($st->schedules) == 0)
                continue;

            $objects = self::getItems3($st->title, []);
            $settings = ServicePropertyController::getSettings($st->title);
            foreach ($objects as $object) {
                foreach ($st->schedules as $schedule) {
                    $conditions = $schedule['conditions'];
                    $to_launch = true;
                    foreach ($conditions as $condition) {
                        foreach (config("base.comparison_operators") as $comparison_operator) {
                            if (strpos($condition, $comparison_operator) == true) {
                                $expression = explode($comparison_operator, $condition)[0];
                                $expecting_result = explode($comparison_operator, $condition)[1];
                                $data[] = $expression;

                                if (in_array($expecting_result, config('base.built_in_methods'))) {
                                    $expecting_result = call_user_func(array($builtInMethods, $expecting_result));
                                }

                                foreach ($object->properties as $k => $v) {
                                    if (!is_array($v->value))
                                        $expression = str_replace("{" . $k . "}", $v->value, $expression);
                                    else
                                        if ($v->input_type == 'date' && isset($v->value['timestamp']))
                                            $expression = str_replace("{" . $k . "}", $v->value['timestamp'], $expression);
                                }

                                foreach ($settings as $setting) {
                                    if (!is_array($setting->assigned))
                                        if (strpos($setting->title, 'time'))
                                            $expression = str_replace("{" . $setting->title . "}", $setting->assigned * 60 * 1000, $expression);
                                        else
                                            $expression = str_replace("{" . $setting->title . "}", $setting->assigned, $expression);
                                }


                                try {
                                    $stringCals = new StringCalc();
                                    $calculated_result = $stringCals->calculate($expression);
                                } catch (\Exception $e) {
                                    dd($expression, $e->getMessage());
                                }

                                $data[] = $calculated_result;
                                switch ($comparison_operator) {
                                    case '==' :
                                        if ($calculated_result != $expecting_result)
                                            $to_launch = false;
                                        break;
                                    case '!=' :
                                        if ($calculated_result == $expecting_result)
                                            $to_launch = false;
                                        break;
                                    case '>=' :
                                        if ($calculated_result < $expecting_result)
                                            $to_launch = false;
                                        break;
                                    case '<=' :
                                        if ($calculated_result > $expecting_result)
                                            $to_launch = false;
                                        break;
                                    case '>' :
                                        if ($calculated_result <= $expecting_result)
                                            $to_launch = false;
                                        break;
                                    case '<' :
                                        if ($calculated_result >= $expecting_result)
                                            $to_launch = false;
                                        break;
                                }

                                //check situation


//                    echo $var . $comparison_operator . $num . "<br>";
                            }

                        }

                        if (!$to_launch)
                            break;


                    }

//                    dd($data,$to_launch);

                    if ($to_launch) {
                        $actions = $schedule['actions'];
                        foreach ($actions as $action) {
                            $command = $action['command'];
                            $source = $action['source'];
                            $destinations = $action['destination'];
                            if ($command == 'change') {
                                foreach ($destinations as $destination) {
                                    $prp = explode('=', $destination)[0];
                                    $vlu = explode('=', $destination)[1];
                                    if (in_array($vlu, config('base.built_in_methods'))) {
                                        if ($vlu == 'now') {
                                            $vlu = call_user_func(array($builtInMethods, $vlu));
                                        }
                                    }
                                    self::changeProperty($object->id, $prp, $vlu);
                                }

                            }
                        }
                    }
                }
            }
        }
    }


    public static function getBaseInformation(&$data, $type)
    {
        $navs = NavigationController::getNavigation('admin', true);

        foreach ($navs as $k => $nav) {
            foreach ($nav as $k1 => $nav1) {
                if (in_array($nav1->properties->route, config('base.routes.services.items'))
                    && $nav1->properties->value == $type) {
                    $nav1->active = true;
                } else {
                    $nav1->active = false;
                }
            }
        }

        $data['navigations'] = $navs;

    }

    public static function getPermissions($type)
    {

        $permissions = [];
        $permissions['index'] = "services.index" . ":" . $type;
        $permissions['show'] = "services.show" . ":" . $type;
        $permissions['create'] = "services.create" . ":" . $type;
        $permissions['store'] = "services.store" . ":" . $type;
        $permissions['update'] = "services.update" . ":" . $type;
        $permissions['edit'] = "services.edit" . ":" . $type;
        $permissions['change'] = "services.change" . ":" . $type;
        $permissions['destroy'] = "services.destroy" . ":" . $type;


        $permissions['properties.store'] = "services.properties.store" . ":" . $type;
        $permissions['settings.edit'] = "services.settings" . ":" . $type;

        return $permissions;


    }

    public static function getUrls($type, $id = 0)
    {

        $urls = [];
        $urls['index'] = route("services.index", ['type' => $type]);
        $urls['change'] = route("services.change", ['type' => $type]);
        $urls['destroy'] = route("services.destroy", ['type' => $type]);
        $urls['properties.store'] = route("services.properties.store", ['type' => $type]);
        $urls['settings.edit'] = route("services.settings.edit", ['type' => $type]);
        return $urls;

    }

    public function index($type)
    {

        if (!\Request::ajax()) {

            $data = BaseController::createBaseInformations();
            self::getBaseInformation($data, $type);
            $data['permissions'] = self::getPermissions($type);
            $data['urls'] = self::getUrls($type);

            $data ['widgets'] = WidgetController::getWidgets("service.index", $type);
            $data['page_title'] = trans('messages.list of') . Str::plural($type);
            $data['breadcrumbs'] = [
                [
                    'title' => trans('messages.navigation_titles.dashboard'),
                    'url' => route('admin.index')
                ],
                [
                    'title' => Str::plural($type),
                    'url' => ''
                ]
            ];
        }

        $data ['type'] = $type;
        $data['situations'] = trans('messages.service_situations');

        if (!\Request::ajax()) {
            return view("admin.items.views.index", $data);
        } else {
            return response()->json(['error' => 0, 'message' => $data]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

    }


    /**
     * Display the specified resource.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show($type, $id)
    {

//        return response()->json(['error' => 0, 'message' => "this is service reserve test"]);
//        return "dsaddasd";
        $data = BaseController::createBaseInformations();
        self::getBaseInformation($data, $type);

        $components['files']['images'] = DB::table('images')->get(['id', 'title', 'path']);

        $data['type'] = $type;

        $properties = self::getProperties($type, $id);
        $data['properties'] = $properties;

        $props = unserialize(serialize($properties));
        $data['groups'] = PropertyController::sortProperties($props);


//        return response()->json(['error' => 0, 'message' => $properties ]);

        $data['id'] = $id;
        $bt_id = ServiceType::where('title', '=', $type)->first();
        $bt_id->actions = PropertyController::parseTypeActions($bt_id->actions);
        $data['urls'] = self::getUrls($type, $id);
        $data['permissions'] = self::getPermissions($type);


        return response()->json(['error' => 0, 'message' => $data]);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type, $id)
    {
//        return response()->json(['success' => 'Added new records.']);

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $bt_id->actions = PropertyController::parseTypeActions($bt_id->actions);
        $bt_id->triggers = json_decode($bt_id->triggers, true);


        if ($request->input('part_update') && $request->input('part_update') == true) {

//            return response()->json(['success' => 'Added new records.1111111']);

            self::saveProperties($request, $type, $id, true);


            if (!is_null($request->input('situation')))
                self::launchTriggers($bt_id, $id, ['event' => 'update', 'args' => ['situation' => $request->input('situation')]]);


            if (!is_null($request->input('situation')) && $request->input('situation') == 7) {


                $props = ServiceController::getDataProperties3($type, $id);
                $rel_id = DB::table('relation_objects')
                    ->where('object_type', '=', config('base.object_types.service'))
                    ->where('object_id', '=', $id)
                    ->get();
                $rel_id = $rel_id[0]->relation;
                $relations = DB::table('relation_objects')
                    ->where('relation', '=', $rel_id)
                    ->get();
                foreach ($relations as $relation) {
                    if ($relation->object_type == config('base.object_types.user')) {
                        $obj_id = $relation->object_id;
                        $usr = User::find($obj_id);
                        if (is_null($usr)) {
                            $data['user'] = null;
                        } else {
                            if ($usr->type == config('base.user_types.user')) {
                                $data['user'] = UserController::getDataProperties3('user', $obj_id);
                            } elseif ($usr->type == config('base.user_types.customer')) {
                                $data['customer'] = UserController::getDataProperties3('customer', $obj_id);
                            }
                        }
                    } elseif ($relation->object_type == config('base.object_types.data')) {
                        $obj_id = $relation->object_id;
                        $data['room'] = DataController::getDataProperties3('room', $obj_id);
                    }
                }

                $data['reserve'] = $props;
                $me = " میهمان گرامی، رزرو واحد مورد نظر شما در هتل صبوری رشت تایید گردید. ";
                $me .= "\n";
                $me .= "کد رهگیری شما :{$data['reserve']['code']->value}";
                $me .= "\n";
                $me .= 'هتل صبوری';

                try {
                    $sender = "10008445";
                    $message = $me;
                    $receptor = array($data['customer']['mobile']->value);
                    $result = Kavenegar::Send($sender, $receptor, $message);
                } catch (\Kavenegar\Exceptions\ApiException $e) {
                    // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
                    echo $e->errorMessage();
                } catch (\Kavenegar\Exceptions\HttpException $e) {
                    // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
                    echo $e->errorMessage();
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }


            }


            return response()->json(['success' => 'Added new records.']);

        }


        $type_id = $bt_id->id;
        $rules = ServicePropertyController::createValidationRules($type_id, false, $id);

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {

//            DB::table('service_assigned_properties')
//                ->where('data', '=', $id)
//                ->delete();

//            dd($request);
            self::saveProperties($request, $type, $id);
            return response()->json(['success' => 'Added new records.']);
        }

        return response()->json(['error' => $validator->errors()->all()]);

//        return redirect()->route("data.index", ['type' => $type]);
        //


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    public function changeSituation(Request $request, $type)
    {


//        $situation = $request->input('situation');
        $service_id = $request->input('service_id');
        $property = '';
        if ($request->input('property') != null)
            $property = $request->input('property');

        $value = '';
        if ($request->input('value') != null)
            $value = $request->input('value');

        $b = self::changePropertyValue($service_id, $property, $value);
        if ($b == true) {
            return response()->json(['error' => 0, 'message' => 'success']);
        } else {
            return response()->json(['error' => 1, 'message' => 'failed']);
        }

    }


    public static function changeProperty($service_id, $property, $value)
    {

        $service = Service::find($service_id);
        $properties = ServiceProperty::where('type', '=', $service->type)
            ->where('title', '=', $property)
            ->get();

        $s_id = 0;
        if (count($properties) == 0) {
            return false;
        } else {
            $s_id = $properties[0]->id;
        }
        if ($s_id != 0) {
            DB::table('service_assigned_properties')
                ->where('property', '=', $s_id)
                ->where('service', '=', $service_id)
                ->update(
                    [
                        'value' => $value,
                    ]
                );
        }

    }

    public static function changePropertyValue($service_id, $property, $value)
    {


        $now = round(microtime(true) * 1000, 0);
        if ($property == '' || $value == '')
            return false;

        $service = Service::find($service_id);
        $properties = ServiceProperty::where('type', '=', $service->type)
            ->where('title', '=', $property)
            ->get();

        $s_id = 0;
        if (count($properties) == 0) {
            return false;
        } else {
            $s_id = $properties[0]->id;
        }

        if ($s_id != 0) {

            DB::table('service_assigned_properties')
                ->where('property', '=', $s_id)
                ->where('service', '=', $service_id)
                ->update(
                    [
                        'value' => $value,
                    ]
                );


            $prs = ServiceProperty::where('title', '=', 'last-date-situation-updated')
                ->where('type', '=', $service->type)
                ->get();

            $ls_id = $prs[0]->id;
            DB::table('service_assigned_properties')
                ->where('property', '=', $ls_id)
                ->where('service', '=', $service_id)
                ->update(
                    [
                        'value' => $now,
                    ]
                );


            $props = ServiceProperty::where('type', '=', $service->type)->get();
            $p_id = 0;
            foreach ($props as $prop) {
                if ($prop->title == 'logs') {
                    $p_id = $prop->id;
                }
            }

            $to_add_arrs = [];

            $subs = [];
            foreach ($props as $prop) {
                if ($prop->parent == $p_id) {
                    $subs[] = $prop;
                }
            }


            $to_add_arr = [];
            foreach ($subs as $sub) {

                if ($sub->input_type == 'select' && $sub->title == 'condition') {
                    $to_add_arr = [
                        'property' => $sub->id,
                        'value' => $value,
                        'service' => $service_id,
                    ];

                } elseif ($sub->input_type == 'single-relation-users-all' && $sub->title == 'user') {


                    $rel = new Relation();
                    $rel->type = 1;
                    $rel->title = 'connect user to service log';
                    $rel->save();
                    $rel_id = $rel->id;

                    $ser_ass_id = DB::table('service_assigned_properties')
                        ->insertGetId(
                            [
                                'property' => $sub->id,
                                'value' => $rel_id,
                                'service' => $service_id
                            ]
                        );


                    DB::table('relation_objects')
                        ->insert(
                            [
                                'relation' => $rel_id,
                                'object_type' => config('base.object_types.service_assigned_property'),
                                'object_id' => $ser_ass_id,
                            ]
                        );

                    DB::table('relation_objects')
                        ->insert(
                            [
                                'relation' => $rel_id,
                                'object_type' => config('base.object_types.user'),
                                'object_id' => \Auth::user()->id,
                            ]
                        );


                } elseif ($sub->input_type == 'date') {

                    $to_add_arr = [
                        'property' => $sub->id,
                        'value' => $now,
                        'service' => $service_id,
                    ];

                }

                $to_add_arrs[] = $to_add_arr;


            }

            DB::table('service_assigned_properties')->insert(
                $to_add_arrs
            );


            return true;
        }

        return false;
    }


    public function refresh(Request $request, $type)
    {


        $bt_id = ServiceType::where('title', '=', $type)->first();
        $bt_id->actions = PropertyController::parseTypeActions($bt_id->actions);
        $bt_id->triggers = TypeUtility::parseTriggers($bt_id->triggers);

        $data = [];

        $data ['reserves'] = self::getItems2($type, $bt_id->actions, false, false);

        $data['situations'] = trans('messages.service_situations');
        return response()->json(["error" => 0, 'message' => $data]);
    }

    public static function checkServicesProperties($type, $property)
    {

        $bt_id = ServiceType::where('title', '=', $type)->first();
        $setts = ServiceProperty::where('is_setting', '=', 1)->where('type', '=', $bt_id->id)->get();
        $objects = Service::where('type', '=', $bt_id->id)->get();

        $room_verification_time = 0;
        $check_verification_time = 0;
        $payout_time = 0;
        foreach ($setts as $sett) {
            if ($sett->title == 'room-verification-time') {
                $room_verification_time = $sett->default_value;
            } elseif ($sett->title == 'check-verification-time') {
                $check_verification_time = $sett->default_value;
            } elseif ($sett->title == 'payout-time') {
                $payout_time = $sett->default_value;
            }
        }

        for ($i = 0; $i < count($objects); $i++) {

//            $props = self::getDataProperties2($objects[$i]->id);
            $props = self::getDataProperties3($type, $objects[$i]->id);
//            dd($props['last-date-situation-updated']);
            $last_date_situation_updated = $props['last-date-situation-updated']->value['timestamp'];
//            echo $last_date_situation_updated . "<br>";
            $situation = $props['situation']->value;

            $now = round(microtime(true) * 1000, 0);

            if ($situation == 1) {

                $t = $room_verification_time * 60 * 1000;

                if ($last_date_situation_updated + $t < $now) {


                    $prs = ServiceProperty::where('title', '=', 'situation')
                        ->where('type', '=', $objects[$i]->type)
                        ->get();
                    $s_id = $prs[0]->id;

                    DB::table('service_assigned_properties')
                        ->where('property', '=', $s_id)
                        ->where('service', '=', $objects[$i]->id)
                        ->update(
                            [
                                'value' => 4,
                            ]
                        );


                    $prs = ServiceProperty::where('title', '=', 'last-date-situation-updated')
                        ->where('type', '=', $objects[$i]->type)
                        ->get();

                    $ls_id = $prs[0]->id;
                    DB::table('service_assigned_properties')
                        ->where('property', '=', $ls_id)
                        ->where('service', '=', $objects[$i]->id)
                        ->update(
                            [
                                'value' => $now,
                            ]
                        );


                }

            } elseif ($situation == 5) {

                $t = $check_verification_time * 60 * 1000;


                if ($last_date_situation_updated + $t < $now) {


                    $prs = ServiceProperty::where('title', '=', 'situation')
                        ->where('type', '=', $objects[$i]->type)
                        ->get();
                    $s_id = $prs[0]->id;

                    DB::table('service_assigned_properties')
                        ->where('property', '=', $s_id)
                        ->where('service', '=', $objects[$i]->id)
                        ->update(
                            [
                                'value' => 8,
                            ]
                        );


                    $prs = ServiceProperty::where('title', '=', 'last-date-situation-updated')
                        ->where('type', '=', $objects[$i]->type)
                        ->get();

                    $ls_id = $prs[0]->id;
                    DB::table('service_assigned_properties')
                        ->where('property', '=', $ls_id)
                        ->where('service', '=', $objects[$i]->id)
                        ->update(
                            [
                                'value' => $now,
                            ]
                        );


                }


            }


        }


    }


    public static function getServices($type)
    {

        self::checkServicesProperties($type, 'situation');

    }

}
