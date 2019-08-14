<?php
//use \App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

use App\Http\Controllers\ServicePropertyController;
use App\UserProperty;

Route::get('temp/app-contacts', function () {return view('temp.app-contacts2');})->name('temp.app-contacts');


Route::get('new/advance-ui-carousel', function () {return view('views.advance-ui-carousel');})->name('advance-ui-carousel');
Route::get('new/advance-ui-collapsibles', function () {return view('views.advance-ui-collapsibles');})->name('advance-ui-collapsibles');
Route::get('new/advance-ui-dropdown', function () {return view('views.advance-ui-dropdown');})->name('advance-ui-dropdown');
Route::get('new/advance-ui-feature-discovery', function () {return view('views.advance-ui-feature-discovery');})->name('advance-ui-feature-discovery');
Route::get('new/advance-ui-media', function () {return view('views.advance-ui-media');})->name('advance-ui-media');
Route::get('new/advance-ui-modals', function () {return view('views.advance-ui-modals');})->name('advance-ui-modals');
Route::get('new/advance-ui-scrollspy', function () {return view('views.advance-ui-scrollspy');})->name('advance-ui-scrollspy');
Route::get('new/advance-ui-tabs', function () {return view('views.advance-ui-tabs');})->name('advance-ui-tabs');
Route::get('new/advance-ui-toasts', function () {return view('views.advance-ui-toasts');})->name('advance-ui-toasts');
Route::get('new/advance-ui-tooltip', function () {return view('views.advance-ui-tooltip');})->name('advance-ui-tooltip');
Route::get('new/advance-ui-waves', function () {return view('views.advance-ui-waves');})->name('advance-ui-waves');
Route::get('new/app-calendar', function () {return view('views.app-calendar');})->name('app-calendar');
Route::get('new/app-chat', function () {return view('views.app-chat');})->name('app-chat');
Route::get('new/app-contacts', function () {return view('views.app-contacts');})->name('app-contacts');
Route::get('new/app-email', function () {return view('views.app-email');})->name('app-email');
Route::get('new/app-email-content', function () {return view('views.app-email-content');})->name('app-email-content');
Route::get('new/app-todo', function () {return view('views.app-todo');})->name('app-todo');
Route::get('new/cards-advance', function () {return view('views.cards-advance');})->name('cards-advance');
Route::get('new/cards-basic', function () {return view('views.cards-basic');})->name('cards-basic');
Route::get('new/cards-extended', function () {return view('views.cards-extended');})->name('cards-extended');
Route::get('new/changelog', function () {return view('views.changelog');})->name('changelog');
Route::get('new/charts-chartist', function () {return view('views.charts-chartist');})->name('charts-chartist');
Route::get('new/charts-chartjs', function () {return view('views.charts-chartjs');})->name('charts-chartjs');
Route::get('new/charts-sparklines', function () {return view('views.charts-sparklines');})->name('charts-sparklines');
Route::get('new/css-animations', function () {return view('views.css-animations');})->name('css-animations');
Route::get('new/css-color', function () {return view('views.css-color');})->name('css-color');
Route::get('new/css-grid', function () {return view('views.css-grid');})->name('css-grid');
Route::get('new/css-helpers', function () {return view('views.css-helpers');})->name('css-helpers');
Route::get('new/css-media', function () {return view('views.css-media');})->name('css-media');
Route::get('new/css-pulse', function () {return view('views.css-pulse');})->name('css-pulse');
Route::get('new/css-sass', function () {return view('views.css-sass');})->name('css-sass');
Route::get('new/css-shadow', function () {return view('views.css-shadow');})->name('css-shadow');
Route::get('new/css-transitions', function () {return view('views.css-transitions');})->name('css-transitions');
Route::get('new/css-typography', function () {return view('views.css-typography');})->name('css-typography');
Route::get('new/dashboard-analytics', function () {return view('views.dashboard-analytics');})->name('dashboard-analytics');
Route::get('new/dashboard-ecommerce', function () {return view('views.dashboard-ecommerce');})->name('dashboard-ecommerce');
Route::get('new/dashboard-modern', function () {return view('views.dashboard-modern');})->name('dashboard-modern');
Route::get('new/ecommerce-invoice', function () {return view('views.ecommerce-invoice');})->name('ecommerce-invoice');
Route::get('new/ecommerce-pricing', function () {return view('views.ecommerce-pricing');})->name('ecommerce-pricing');
Route::get('new/ecommerce-products-page', function () {return view('views.ecommerce-products-page');})->name('ecommerce-products-page');
Route::get('new/extra-components-highlight', function () {return view('views.extra-components-highlight');})->name('extra-components-highlight');
Route::get('new/extra-components-nestable', function () {return view('views.extra-components-nestable');})->name('extra-components-nestable');
Route::get('new/extra-components-range-slider', function () {return view('views.extra-components-range-slider');})->name('extra-components-range-slider');
Route::get('new/extra-components-sweetalert', function () {return view('views.extra-components-sweetalert');})->name('extra-components-sweetalert');
Route::get('new/extra-components-translation', function () {return view('views.extra-components-translation');})->name('extra-components-translation');
Route::get('new/form-elements', function () {return view('views.form-elements');})->name('form-elements');
Route::get('new/form-file-uploads', function () {return view('views.form-file-uploads');})->name('form-file-uploads');
Route::get('new/form-layouts', function () {return view('views.form-layouts');})->name('form-layouts');
Route::get('new/form-masks', function () {return view('views.form-masks');})->name('form-masks');
Route::get('new/form-validation', function () {return view('views.form-validation');})->name('form-validation');
Route::get('new/form-wizard', function () {return view('views.form-wizard');})->name('form-wizard');
Route::get('new/fullscreen-slider-demo', function () {return view('views.fullscreen-slider-demo');})->name('fullscreen-slider-demo');
Route::get('new/index', function () {return view('views.index');})->name('index');
Route::get('new/media-gallery-page', function () {return view('views.media-gallery-page');})->name('media-gallery-page');
Route::get('new/media-hover-effects', function () {return view('views.media-hover-effects');})->name('media-hover-effects');
Route::get('new/page-404', function () {return view('views.page-404');})->name('page-404');
Route::get('new/page-500', function () {return view('views.page-500');})->name('page-500');
Route::get('new/page-blog-list', function () {return view('views.page-blog-list');})->name('page-blog-list');
Route::get('new/page-contact', function () {return view('views.page-contact');})->name('page-contact');
Route::get('new/page-faq', function () {return view('views.page-faq');})->name('page-faq');
Route::get('new/page-faq-detail', function () {return view('views.page-faq-detail');})->name('page-faq-detail');
Route::get('new/page-knowledge', function () {return view('views.page-knowledge');})->name('page-knowledge');
Route::get('new/page-knowledge-licensing', function () {return view('views.page-knowledge-licensing');})->name('page-knowledge-licensing');
Route::get('new/page-knowledge-licensing-detail', function () {return view('views.page-knowledge-licensing-detail');})->name('page-knowledge-licensing-detail');
Route::get('new/page-maintenance', function () {return view('views.page-maintenance');})->name('page-maintenance');
Route::get('new/page-blank', function () {return view('views.page-blank');})->name('page-blank');
Route::get('new/page-search', function () {return view('views.page-search');})->name('page-search');
Route::get('new/table-basic', function () {return view('views.table-basic');})->name('table-basic');
Route::get('new/table-data-table', function () {return view('views.table-data-table');})->name('table-data-table');
Route::get('new/ui-alerts', function () {return view('views.ui-alerts');})->name('ui-alerts');
Route::get('new/ui-badges', function () {return view('views.ui-badges');})->name('ui-badges');
Route::get('new/ui-basic-buttons', function () {return view('views.ui-basic-buttons');})->name('ui-basic-buttons');
Route::get('new/ui-breadcrumbs', function () {return view('views.ui-breadcrumbs');})->name('ui-breadcrumbs');
Route::get('new/ui-chips', function () {return view('views.ui-chips');})->name('ui-chips');
Route::get('new/ui-collections', function () {return view('views.ui-collections');})->name('ui-collections');
Route::get('new/ui-extended-buttons', function () {return view('views.ui-extended-buttons');})->name('ui-extended-buttons');
Route::get('new/views.ui-icons', function () {return view('views.ui-icons');})->name('ui-icons');
Route::get('new/ui-navbar', function () {return view('views.ui-navbar');})->name('ui-navbar');
Route::get('new/ui-pagination', function () {return view('views.ui-pagination');})->name('ui-pagination');
Route::get('new/ui-preloader', function () {return view('views.ui-preloader');})->name('ui-preloader');
Route::get('new/user-forgot-password', function () {return view('views.user-forgot-password');})->name('user-forgot-password');
Route::get('new/user-lock-screen', function () {return view('views.user-lock-screen');})->name('user-lock-screen');
Route::get('new/user-login', function () {return view('views.user-login');})->name('user-login');
Route::get('new/user-profile-page', function () {return view('views.user-profile-page');})->name('user-profile-page');
Route::get('new/user-register', function () {return view('views.user-register');})->name('user-register');
Route::get('new/vertical-modern-menu-template', function () {return view('views.vertical-modern-menu-template');})->name('vertical-modern-menu-template');


Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
//    app()->setLocale($locale);
    return redirect()->back();
});


Route::get('/genpass', function () {
    return bcrypt("hotelsabouri1234");
});


Route::get('/out', function () {
    Auth::logout();
});

Route::get('/t1', function () {
    $us = ServicePropertyController::getSettingValue('reserve', 'users-to-get-notifications');
    $user_ids = explode(',', $us);

    $sp = UserProperty::where('title', '=', 'mobile')->where('user_type', '=', 1)->get();
    $sp_id = $sp[0]->id;

    $mobiles = DB::table('user_assigned_properties')
        ->where('property', '=', $sp_id)
        ->whereIn('user', $user_ids)
        ->get();

    return $mobiles;
});

Route::get('/t2', "HomeController@t2");


Route::get('/gen-roles', function () {



    $dl = new \LanguageDetection\Language(['fa', 'ar', 'en']);

//    dd(array_key_first($dl));
    dd($dl->detect('این یک تست است'));


//    $rules = \App\Http\Controllers\DataPropertyController::createValidationRules(2);
//    dd($rules);


//    $s ='required';
//    $arr = explode(',', $s);
//    return count($arr);

//    $role= Role::findByName(1);
//    $role = Role::create(['name' => 'writer']);
//    $role = Role::create(['name' => 'super admin']);
//    $role = Role::create(['name' => 'admin']);
//    $role = Role::create(['name' => 'manager']);
//    $role = Role::create(['name' => 'employee']);
//    $role = Role::create(['name' => 'customer']);

//    $permission = Permission::create(['name' => 'add rooms']);
//    $permission = Permission::create(['name' => 'edit rooms']);
//    $permission = Permission::create(['name' => 'edit rooms']);
//    $permission = Permission::create(['name' => 'delete rooms']);


//    Auth::user()->givePermissionTo('edit articles');
//    Auth::user()->assignRole('super admin');

//    return Auth::user()->getAllPermissions();

//    return Auth::user()->getAllPermissions()->get('name', 'data.index:map');

});

Route::get('/test', 'HomeController@test')->name('home.test');
Route::get('/test-report', 'HomeController@createReport')->name('home.test');
Route::get('/test-reserve/{id}', 'HomeController@testReserve')->name('home.reserve.test');


Route::get('/logout', "Auth\LoginController@logout")->name('home.logout');
Route::get('/register', "Auth\RegisterController@showRegistrationForm")->name('register');


Auth::routes();

//Route::post('/register', "Auth\RegisterController@register")->name('home.register');

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/home', 'HomeController@index2')->name('home.index2');


Route::get('/cropper', 'HomeController@cropper')->name('home.cropper');
Route::post('/cropper/save', 'HomeController@cropper_save')->name('home.cropper_save');


Route::get('/document/{type?}/{id?}', 'HomeController@showDocument')->name('home.document');
Route::get('/document/{type?}', 'HomeController@showDocument')->name('home.document.all');

Route::get('/service/tracking', 'HomeController@tracking')->name('home.track');
Route::get('/service/{type?}', 'HomeController@showService')->name('home.service');
Route::post('/service/ajax/update', 'HomeController@updateServiceForm')->name('home.service.ajax.update');


Route::get('/data/{type?}', 'HomeController@showData')->name('home.data.all');
Route::get('/data/{type?}/{id?}', 'HomeController@showData')->name('home.data');


Route::post('/service/ajax/save', 'HomeController@saveService')->name('home.service.ajax.store');
Route::post('/service/ajax/get/property/value', 'HomeController@getServicePropertyValue')->name('home.service.ajax.store');
Route::post('/service/ajax/save/check', 'HomeController@saveCheck')->name('home.service.ajax.save.check');
Route::post('/service/ajax/cancel', 'HomeController@cancelService')->name('home.service.ajax.cancel');
Route::post('/service/{type}/store', 'ServiceController@store')->name('home.service.store');


Route::post('/communication/{type}/send', 'CommunicationController@send')->name('home.service.store');


Route::get('/user/{type}/enter', 'HomeController@showEnterPage')->name('home.user.enter');
Route::get('/user/{type}/login', 'HomeController@showLoginPage')->name('home.user.login');
Route::get('/user/{type}/register', 'HomeController@showRegisterPage')->name('home.user.register');

Route::post('/documents/ajax/save', 'HomeController@saveMessage')->name('home.message.store');
//Route::post('/documents/ajax/voucher', 'HomeController@printVoucher')->name('home.voucher.print');
Route::get('/documents/ajax/voucher/{code?}', 'HomeController@printVoucher')->name('home.voucher.print');

Route::get('/services/payout/{code?}', 'HomeController@payout')->name('home.payout');
Route::any('/services/returnFromBank/{code?}', 'HomeController@returnFromBank')->name('home.return.from.bank');



Route::middleware(['auth', 'authAdmin'])->group(function () {

    Route::get('/admin', 'AdminController@index')->name('admin.index');



    //***************CONVERSATIONS**********************


    //TYPE
    Route::get('/admin/conversations', 'ConversationTypeController@index')->name('conversations.types.index');
    Route::get('/admin/conversations/{id}', 'ConversationTypeController@show')->name('conversations.types.show')->where('id', '[0-9]+');
    Route::get('/admin/conversations/create', 'ConversationTypeController@create')->name('conversations.types.create');
    Route::get('/admin/conversations/{id?}/edit', 'ConversationTypeController@edit')->name('conversations.types.edit');
    Route::post('/admin/conversations/store', 'ConversationTypeController@store')->name('conversations.types.store');
    Route::post('/admin/conversations/{id}/update', 'ConversationTypeController@update')->name('conversations.types.update');
    Route::post('/admin/conversations/destroy', 'ConversationTypeController@destroy')->name('conversations.types.destroy');

    //ITEM
    Route::get('/admin/conversations/{type}', 'ConversationController@index')->name('conversations.index');
    Route::get('/admin/conversations/{type}/{id}', 'ConversationController@show')->name('conversations.show')->where('id', '[0-9]+');
    Route::get('/admin/conversations/{type}/create', 'ConversationController@create')->name('conversations.create');
    Route::get('/admin/conversations/{type}/{id?}/edit', 'ConversationController@edit')->name('conversations.edit');
    Route::post('/admin/conversations/{type}/store', 'ConversationController@store')->name('conversations.store');
    Route::post('/admin/conversations/{type}/{id}/update', 'ConversationController@update')->name('conversations.update');
    Route::post('/admin/conversations/{type}/ajax/destroy', 'ConversationController@destroy')->name('conversations.destroy');
    Route::post('/admin/conversations/ajax/change_property', 'ConversationController@changeProperty')->name('conversations.change_property');
    Route::post('/admin/conversations/{type}/change', 'ConversationController@changeProperty')->name('conversations.change');

    //PROPERTY
    Route::get('/admin/conversations/{type}/properties', 'ConversationPropertyController@index')
        ->name('conversations.properties.index');
    Route::get('/admin/conversations/{type}/properties/{id}', 'ConversationPropertyController@show')
        ->name('conversations.properties.show')->where('id', '[0-9]+');
    Route::get('/admin/conversations/{type}/properties/create', 'ConversationPropertyController@create')
        ->name('conversations.properties.create');
    Route::get('/admin/conversations/{type}/properties/{id}/edit', 'ConversationPropertyController@edit')
        ->name('conversations.properties.edit');
    Route::post('/admin/conversations/{type}/properties/store', 'ConversationPropertyController@store')
        ->name('conversations.properties.store');
    Route::post('/admin/conversations/{type}/properties/{id}/update', 'ConversationPropertyController@update')
        ->name('conversations.properties.update');
    Route::post('/admin/conversations/{type}/properties/{id}/destroy', 'ConversationPropertyController@destroy')
        ->name('conversations.properties.destroy');
    Route::post('/admin/ajax/conversations/properties/destroy', 'ConversationPropertyController@destroy_property')
        ->name('conversations.properties.ajax.destroy');


    //SETTING
    Route::get('/admin/conversations/{type}/settings', 'ConversationPropertyController@settings')
        ->name('conversations.settings.edit');
    Route::post('/admin/conversations/{type}/settings/update', 'ConversationPropertyController@updateSettings')
        ->name('conversations.settings.update');


    /////////////***************CONVERSATIONS**********************

    //***************COMMUNICATIONS**********************



    //TYPE
    Route::get('/admin/communications', 'CommunicationTypeController@index')->name('communications.types.index');
    Route::get('/admin/communications/{id}', 'CommunicationTypeController@show')->name('communications.types.show')->where('id', '[0-9]+');
    Route::get('/admin/communications/create', 'CommunicationTypeController@create')->name('communications.types.create');
    Route::get('/admin/communications/{id?}/edit', 'CommunicationTypeController@edit')->name('communications.types.edit');
    Route::post('/admin/communications/store', 'CommunicationTypeController@store')->name('communications.types.store');
    Route::post('/admin/communications/{id}/update', 'CommunicationTypeController@update')->name('communications.types.update');
    Route::post('/admin/communications/destroy', 'CommunicationTypeController@destroy')->name('communications.types.destroy');




    //ITEM
    Route::get('/admin/communications/{type}', 'CommunicationController@index')->name('communications.index');
    Route::get('/admin/communications/{type}/{id}', 'CommunicationController@show')->name('communications.show')->where('id', '[0-9]+');
    Route::get('/admin/communications/{type}/create', 'CommunicationController@create')->name('communications.create');
    Route::post('/admin/communications/{type}/store', 'CommunicationController@store')->name('communications.store');
    Route::get('/admin/communications/{type}/{id?}/edit', 'CommunicationController@edit')->name('communications.edit');
    Route::post('/admin/communications/{type}/{id}/update', 'CommunicationController@update')->name('communications.update');
    Route::post('/admin/communications/{type}/ajax/destroy', 'CommunicationController@destroy')->name('communications.destroy');
    Route::post('/admin/communications/{type}/change', 'CommunicationController@changeProperty')->name('communications.change');




    //PROPERTY
    Route::get('/admin/communications/{type}/properties', 'CommunicationPropertyController@index')
        ->name('communications.properties.index');
    Route::get('/admin/communications/{type}/properties/{id}', 'CommunicationPropertyController@show')
        ->name('communications.properties.show')->where('id', '[0-9]+');
    Route::get('/admin/communications/{type}/properties/create', 'CommunicationPropertyController@create')
        ->name('communications.properties.create');
    Route::post('/admin/communications/{type}/properties/store', 'CommunicationPropertyController@store')
        ->name('communications.properties.store');
    Route::get('/admin/communications/{type}/properties/{id}/edit', 'CommunicationPropertyController@edit')
        ->name('communications.properties.edit');
    Route::post('/admin/communications/{type}/properties/{id}/update', 'CommunicationPropertyController@update')
        ->name('communications.properties.update');
    Route::post('/admin/communications/{type}/properties/{id}/destroy', 'CommunicationPropertyController@destroy')
        ->name('communications.properties.destroy');
    Route::post('/admin/ajax/communications/{type}/properties/destroy', 'CommunicationPropertyController@destroy_property')
        ->name('communications.properties.ajax.destroy');



    //SETTING
    Route::get('/admin/communications/{type}/settings', 'CommunicationPropertyController@settings')
        ->name('communications.settings.edit');
    Route::post('/admin/communications/{type}/settings/update', 'CommunicationPropertyController@updateSettings')
        ->name('communications.settings.update');

    /////////////***************COMMUNICATIONS**********************


    //***************DATA**********************

    //TYPE
    Route::get('/admin/data', 'DataTypeController@index')->name('data.types.index');
    Route::get('/admin/data/{id}', 'DataTypeController@show')->name('data.types.show')->where('id', '[0-9]+');
    Route::get('/admin/data/create', 'DataTypeController@create')->name('data.types.create');
    Route::get('/admin/data/{id?}/edit', 'DataTypeController@edit')->name('data.types.edit');
    Route::post('/admin/data/store', 'DataTypeController@store')->name('data.types.store');
    Route::post('/admin/data/{id}/update', 'DataTypeController@update')->name('data.types.update');
    Route::post('/admin/data/destroy', 'DataTypeController@destroy')->name('data.types.destroy');

    //ITEM
    Route::get('/admin/data/{type}', 'DataController@index')->name('data.index');
    Route::get('/admin/data/{type}/{id}', 'DataController@show')->name('data.show')->where('id', '[0-9]+');
    Route::get('/admin/data/{type}/create', 'DataController@create')->name('data.create');
    Route::post('/admin/data/{type}/store', 'DataController@store')->name('data.store');
    Route::get('/admin/data/{type}/{id?}/edit', 'DataController@edit')->name('data.edit');
    Route::post('/admin/data/{type}/{id}/update', 'DataController@update')->name('data.update');
    Route::post('/admin/data/{type}/ajax/destroy', 'DataController@destroy')->name('data.destroy');
    Route::post('/admin/data/{type}/change', 'DataController@changeProperty')->name('data.change');

    //PROPERTY
    Route::get('/admin/data/{type}/properties', 'DataPropertyController@index')->name('data.properties.index');
    Route::get('/admin/data/{type}/properties/{id}', 'DataPropertyController@show')->name('data.properties.show')->where('id', '[0-9]+');
    Route::get('/admin/data/{type}/properties/create', 'DataPropertyController@create')->name('data.properties.create');
    Route::post('/admin/data/{type}/properties/store', 'DataPropertyController@store')->name('data.properties.store');
    Route::get('/admin/data/{type}/properties/{id}/edit', 'DataPropertyController@edit')->name('data.properties.edit');
    Route::post('/admin/data/{type}/properties/{id}/update', 'DataPropertyController@update')->name('data.properties.update');
    Route::post('/admin/data/{type}/properties/{id}/destroy', 'DataPropertyController@destroy')->name('data.properties.destroy');
    Route::post('/admin/ajax/data/{type}/properties/destroy', 'DataPropertyController@destroy_property')->name('data.properties.ajax.destroy');


    //SETTING
    Route::get('/admin/data/{type}/settings', 'DataPropertyController@settings')->name('data.settings.edit');
    Route::post('/admin/data/{type}/settings/update', 'DataPropertyController@updateSettings')->name('data.settings.update');

    /////////////***************DATA**********************







    //***************USERS**********************



    //TYPE
    Route::get('/admin/users', 'UserTypeController@index')->name('users.types.index');
    Route::get('/admin/users/{id}', 'UserTypeController@show')->name('users.types.show')->where('id', '[0-9]+');
    Route::get('/admin/users/create', 'UserTypeController@create')->name('users.types.create');
    Route::get('/admin/users/{id?}/edit', 'UserTypeController@edit')->name('users.types.edit');
    Route::post('/admin/users/store', 'UserTypeController@store')->name('users.types.store');
    Route::post('/admin/users/{id}/update', 'UserTypeController@update')->name('users.types.update');
    Route::post('/admin/users/destroy', 'UserTypeController@destroy')->name('users.types.destroy');


    //ITEM
    Route::get('/admin/users/{type}', 'UserController@index')->name('users.index');
    Route::get('/admin/users/{type}/{id}', 'UserController@show')->name('users.show')->where('id', '[0-9]+');
    Route::get('/admin/users/{type}/create', 'UserController@create')->name('users.create');
    Route::get('/admin/users/{type}/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('/admin/users/{type}/store', 'UserController@store')->name('users.store');
    Route::post('/admin/users/{type}/{id}/update', 'UserController@update')->name('users.update');
    Route::post('/admin/users/{type}/ajax/destroy', 'UserController@destroy')->name('users.destroy');
    Route::post('/admin/users/{type}/change', 'UserController@changeProperty')->name('users.change');



    //PROPERTY
    Route::get('/admin/users/{type}/properties', 'UserPropertyController@index')->name('users.properties.index');
    Route::get('/admin/users/{type}/properties/{id}', 'UserPropertyController@show')->name('users.properties.show')->where('id', '[0-9]+');
    Route::get('/admin/users/{type}/properties/create', 'UserPropertyController@create')->name('users.properties.create');
    Route::get('/admin/users/{type}/properties/{id}/edit', 'UserPropertyController@edit')->name('users.properties.edit');
    Route::post('/admin/users/{type}/properties/store', 'UserPropertyController@store')->name('users.properties.store');
    Route::post('/admin/users/{type}/properties/{id}/update', 'UserPropertyController@update')->name('users.properties.update');
    Route::post('/admin/users/{type}/properties/{id}/destroy', 'UserPropertyController@destroy')->name('users.properties.destroy');
    Route::post('/admin/ajax/users/{type}/properties/destroy', 'UserPropertyController@destroy_property')->name('users.properties.ajax.destroy');

    //SETTING
    Route::get('/admin/users/{type}/settings', 'DataPropertyController@settings')->name('users.settings.edit');
    Route::post('/admin/users/{type}/settings/update', 'DataPropertyController@updateSettings')->name('users.settings.update');

    /////////////***************USERS**********************


    //***************DOCUMENTS**********************




    //TYPE
    Route::get('/admin/documents', 'DocumentTypeController@index')->name('documents.types.index');
    Route::get('/admin/documents/{id}', 'DocumentTypeController@show')->name('documents.types.show')->where('id', '[0-9]+');
    Route::get('/admin/documents/create', 'DocumentTypeController@create')->name('documents.types.create');
    Route::get('/admin/documents/{id?}/edit', 'DocumentTypeController@edit')->name('documents.types.edit');
    Route::post('/admin/documents/store', 'DocumentTypeController@store')->name('documents.types.store');
    Route::post('/admin/documents/{id}/update', 'DocumentTypeController@update')->name('documents.types.update');
    Route::post('/admin/documents/destroy', 'DocumentTypeController@destroy')->name('documents.types.destroy');





    //ITEM
    Route::get('/admin/documents/{type}', 'DocumentController@index')->name('documents.index');
    Route::get('/admin/documents/{type}/{id}', 'DocumentController@show')->name('documents.show')->where('id', '[0-9]+');
    Route::get('/admin/documents/{type}/create', 'DocumentController@create')->name('documents.create');
    Route::post('/admin/documents/{type}/store', 'DocumentController@store')->name('documents.store');
    Route::get('/admin/documents/{type}/{id}/edit', 'DocumentController@edit')->name('documents.edit');
    Route::post('/admin/documents/{type}/{id}/update', 'DocumentController@update')->name('documents.update');
    Route::post('/admin/documents/{type}/ajax/destroy', 'DocumentController@destroy')->name('documents.destroy');
    Route::post('/admin/documents/{type}/change', 'DocumentController@changeProperty')->name('documents.change');

    //PROPERTY
    Route::get('/admin/documents/{type}/properties', 'DocumentPropertyController@index')->name('documents.properties.index');
    Route::get('/admin/documents/{type}/properties/{id}', 'DocumentPropertyController@show')->name('documents.properties.show')->where('id', '[0-9]+');
    Route::get('/admin/documents/{type}/properties/create', 'DocumentPropertyController@create')->name('documents.properties.create');
    Route::get('/admin/documents/{type}/properties/{id}/edit', 'DocumentPropertyController@edit')->name('documents.properties.edit');
    Route::post('/admin/documents/{type}/properties/store', 'DocumentPropertyController@store')->name('documents.properties.store');
    Route::post('/admin/documents/{type}/properties/{id}/update', 'DocumentPropertyController@update')->name('documents.properties.update');
    Route::post('/admin/documents/{type}/properties/{id}/destroy', 'DocumentPropertyController@destroy')->name('documents.properties.destroy');
    Route::post('/admin/ajax/documents/{type}/properties/destroy', 'DocumentPropertyController@destroy_property')->name('documents.properties.ajax.destroy');


    //SETTING
    Route::get('/admin/documents/{type}/settings', 'DocumentPropertyController@settings')->name('documents.settings');
    Route::post('/admin/documents/{type}/settings/edit', 'DocumentPropertyController@updateSettings')->name('documents.settings.update');

    /////////////***************DOCUMENTS**********************


    //***************NAVIGATION**********************



    Route::get('/admin/navigation', 'NavigationController@index')->name('navigation.index');
    Route::get('/admin/navigation/{id}', 'NavigationController@show')->name('navigation.show')->where('id', '[0-9]+');
    Route::get('/admin/navigation/create', 'NavigationController@create')->name('navigation.create');
    Route::post('/admin/navigation/store', 'NavigationController@store')->name('navigation.store');
    Route::post('/admin/navigation/destroy', 'NavigationController@destroy')->name('navigation.destroy');
    Route::post('/admin/navigation/change', 'NavigationController@changeProperty')->name('navigation.change');
    Route::post('/admin/navigation/get', 'NavigationController@getItems')->name('navigation.get');
    Route::post('/admin/navigation/get/routes', 'NavigationController@getRoutes')->name('navigation.routes.get');


    /////////////***************NAVIGATION**********************


    //***************PERMISSIONS**********************
    Route::get('/admin/permissions', 'PermissionController@index')->name('permissions.index');
    Route::get('/admin/permissions/{id}', 'PermissionController@show')->name('permissions.show')->where('id', '[0-9]+');
    Route::get('/admin/permissions/create', 'PermissionController@create')->name('permissions.create');
    Route::post('/admin/permissions/store', 'PermissionController@store')->name('permissions.store');
    Route::post('/admin/permissions/destroy', 'PermissionController@destroy')->name('permissions.destroy');

    Route::post('/admin/permissions/ajax/change', 'PermissionController@changeProperty')->name('permissions.change');


    Route::post('/admin/permissions/ajax/get', 'PermissionController@getItems')->name('permissions.ajax.get');


    /////////////***************PERMISSIONS**********************


    //***************SERVICES**********************



    //TYPE
    Route::get('/admin/services', 'ServiceTypeController@index')->name('services.types.index');
    Route::get('/admin/services/{id}', 'ServiceTypeController@show')->name('services.types.show')->where('id', '[0-9]+');
    Route::get('/admin/services/create', 'ServiceTypeController@create')->name('services.types.create');
    Route::get('/admin/services/{id?}/edit', 'ServiceTypeController@edit')->name('services.types.edit');
    Route::post('/admin/services/store', 'ServiceTypeController@store')->name('services.types.store');
    Route::post('/admin/services/{id}/update', 'ServiceTypeController@update')->name('services.types.update');
    Route::post('/admin/services/destroy', 'ServiceTypeController@destroy')->name('services.types.destroy');

    //ITEM
    Route::get('/admin/services/{type}', 'ServiceController@index')->name('services.index');
    Route::post('/admin/services/{type}/get', 'ServiceController@getServiceInfo')->name('services.get');
    Route::post('/admin/services/{type}/change', 'ServiceController@changeSituation')->name('services.change');
    Route::post('/admin/services/{type}/ajax/destroy', 'ServiceController@destroy')->name('services.destroy');

    //PROPERTY
    Route::get('/admin/services/{type}/properties', 'ServicePropertyController@index')->name('services.properties.index');
    Route::get('/admin/services/{type}/properties/{id}', 'ServicePropertyController@show')->name('services.properties.show')->where('id', '[0-9]+');
    Route::get('/admin/services/{type}/properties/create', 'ServicePropertyController@create')->name('services.properties.create');
    Route::get('/admin/services/{type}/properties/{id}/edit', 'ServicePropertyController@edit')->name('services.properties.edit');
    Route::post('/admin/services/{type}/properties/store', 'ServicePropertyController@store')->name('services.properties.store');
    Route::post('/admin/services/{type}/properties/{id}/update', 'ServicePropertyController@update')->name('services.properties.update');
    Route::post('/admin/services/{type}/properties/{id}/destroy', 'ServicePropertyController@destroy')->name('services.properties.destroy');
    Route::post('/admin/ajax/services/{type}/properties/destroy', 'ServicePropertyController@destroy_property')->name('services.properties.ajax.destroy');



    //SETTING
    Route::get('/admin/services/{type}/settings', 'ServicePropertyController@settings')->name('services.settings');
    Route::post('/admin/services/{type}/settings/edit', 'ServicePropertyController@updateSettings')->name('services.settings.update');

    /////////////***************SERVICES**********************


//    Route::get('/admin/relations/create', 'RelationController@index')->name('relations.index');

    Route::get('/admin/relations/{type}', 'RelationController@index')->name('relations.index');
    Route::get('/admin/relations/{type}/{id}', 'RelationController@show')->name('relations.show')->where('id', '[0-9]+');

    Route::get('/admin/relations/{type}/create', 'RelationController@create')->name('relations.create');
    Route::post('/admin/relations/{type}/store', 'RelationController@store')->name('relations.store');

    Route::get('/admin/relations/{type}/{id}/edit', 'RelationController@edit')->name('relations.edit');
    Route::post('/admin/relations/{type}/{id}/update', 'RelationController@update')->name('relations.update');


    Route::post('/admin/relations/{type}/get', 'RelationController@getItems')->name('relations.get');


    Route::post('/admin/ajax/service/{type}/refresh', 'ServiceController@refresh')->name('services.refresh');


    Route::get('admin/test', function () {
        return view("test");
    });

});
