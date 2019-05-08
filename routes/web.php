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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
//    app()->setLocale($locale);
    return redirect()->back();
});


Route::get('/genpass', function () {
    return bcrypt("1234");
});


Route::get('/out', function () {
    Auth::logout();
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


Route::get('/document/{document_type?}', 'HomeController@showDocument')->name('home.document.all');
Route::get('/document/{document_type?}/{id?}', 'HomeController@showDocument')->name('home.document');


Route::get('/service/{service_type?}', 'HomeController@showService')->name('home.service');
Route::post('/service/ajax/update', 'HomeController@updateServiceForm')->name('home.service.ajax.update');


Route::get('/data/{data_type?}', 'HomeController@showData')->name('home.data.all');
Route::get('/data/{data_type?}/{id?}', 'HomeController@showData')->name('home.data');


Route::post('/service/ajax/save', 'HomeController@saveService')->name('home.service.ajax.store');
Route::post('/service/ajax/get/property/value', 'HomeController@getServicePropertyValue')->name('home.service.ajax.store');
Route::post('/service/ajax/save/check', 'HomeController@saveCheck')->name('home.service.ajax.save.check');

Route::post('/service/ajax/cancel', 'HomeController@cancelService')->name('home.service.ajax.cancel');
Route::post('/service/{service_type}/store', 'ServiceController@store')->name('home.service.store');


Route::post('/communication/{communication_type}/send', 'CommunicationController@send')->name('home.service.store');
Route::get('/user/{user_type}/enter', 'HomeController@showEnterPage')->name('home.user.enter');


Route::post('/documents/ajax/save', 'HomeController@saveMessage')->name('home.message.store');
//Route::post('/documents/ajax/voucher', 'HomeController@printVoucher')->name('home.voucher.print');
Route::get('/documents/ajax/voucher/{code?}', 'HomeController@printVoucher')->name('home.voucher.print');


Route::middleware('auth')->group(function () {

    Route::get('/admin', 'AdminController@index')->name('admin.index');

    Route::get('/admin/data/{data_type}', 'DataController@index')->name('data.index');
    Route::get('/admin/data/{data_type}/{id}', 'DataController@show')->name('data.show')->where('id', '[0-9]+');
    Route::get('/admin/data/{data_type}/create', 'DataController@create')->name('data.create');
    Route::get('/admin/data/{data_type}/{id?}/edit', 'DataController@edit')->name('data.edit');
    Route::post('/admin/data/{data_type}/store', 'DataController@store')->name('data.store');
    Route::post('/admin/data/{data_type}/{id}/update', 'DataController@update')->name('data.update');


    Route::get('/admin/data/{data_type}/{id}/translations', 'DataController@getTranslations')->name('data.translations.index');
    Route::get('/admin/data/{data_type}/{id}/translations/create', 'DataController@createTranslate')->name('data.translations.create');
    Route::post('/admin/data/{data_type}/{id}/translations/store', 'DataController@storeTranslate')->name('data.translations.store');


    Route::post('/admin/data/ajax/change_property', 'DataController@changeProperty')->name('data.change_property');


    Route::get('/admin/data/{data_type}/properties', 'DataPropertyController@index')->name('data.properties.index');
    Route::get('/admin/data/{data_type}/properties/{id}', 'DataPropertyController@show')->name('data.properties.show')->where('id', '[0-9]+');
    Route::get('/admin/data/{data_type}/properties/create', 'DataPropertyController@create')->name('data.properties.create');
    Route::get('/admin/data/{data_type}/properties/{id}/edit', 'DataPropertyController@edit')->name('data.properties.edit');
    Route::post('/admin/data/{data_type}/properties/store', 'DataPropertyController@store')->name('data.properties.store');
    Route::post('/admin/data/{data_type}/properties/{id}/update', 'DataPropertyController@update')->name('data.properties.update');
    Route::post('/admin/data/{data_type}/properties/{id}/destroy', 'DataPropertyController@destroy')->name('data.properties.destroy');

    Route::post('/admin/ajax/data/properties/destroy', 'DataPropertyController@destroy_property')->name('data.properties.ajax.destroy');


    Route::get('/admin/users/{user_type}', 'UserController@index')->name('users.index');
    Route::get('/admin/users/{user_type}/{id}', 'UserController@show')->name('users.show')->where('id', '[0-9]+');
    Route::get('/admin/users/{user_type}/create', 'UserController@create')->name('users.create');
    Route::get('/admin/users/{user_type}/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('/admin/users/{user_type}/store', 'UserController@store')->name('users.store');
    Route::post('/admin/users/{user_type}/$id/update', 'UserController@update')->name('users.update');


    Route::get('/admin/documents/{document_type}', 'DocumentController@index')->name('documents.index');
    Route::get('/admin/documents/{document_type}/{id}', 'DocumentController@show')->name('documents.show')->where('id', '[0-9]+');
    Route::get('/admin/documents/{document_type}/create', 'DocumentController@create')->name('documents.create');
    Route::post('/admin/documents/{document_type}/store', 'DocumentController@store')->name('documents.store');

    Route::get('/admin/documents/{document_type}/{id}/edit', 'DocumentController@edit')->name('documents.edit');
    Route::post('/admin/documents/{document_type}/{id}/update', 'DocumentController@update')->name('documents.update');


    Route::post('/admin/documents/ajax/destroy', 'DocumentController@destroy')->name('documents.destroy');


    Route::get('/admin/navigation', 'NavigationController@index')->name('navigation.index');
    Route::get('/admin/navigation/{id}', 'NavigationController@show')->name('navigation.show')->where('id', '[0-9]+');
    Route::get('/admin/navigation/create', 'NavigationController@create')->name('navigation.create');
    Route::post('/admin/navigation/store', 'NavigationController@store')->name('navigation.store');


    Route::get('/admin/services/{service_type}', 'ServiceController@index')->name('services.index');
    Route::post('/admin/ajax/service/get', 'ServiceController@getServiceInfo')->name('service.ajax.get');
    Route::post('/admin/services/change_situation', 'ServiceController@changeSituation')->name('services.change_situation');


//    Route::get('/admin/relations/create', 'RelationController@index')->name('relations.index');
    Route::get('/admin/relations/{relation_type}', 'RelationController@index')->name('relations.index');
    Route::get('/admin/relations/{relation_type}/{id}', 'RelationController@show')->name('relations.show')->where('id', '[0-9]+');
    Route::get('/admin/relations/{relation_type}/create', 'RelationController@create')->name('relations.create');
    Route::get('/admin/relations/{relation_type}/{id}/edit', 'RelationController@edit')->name('relations.edit');
    Route::post('/admin/relations/{relation_type}/store', 'RelationController@store')->name('relations.store');
    Route::post('/admin/relations/{relation_type}/{id}/update', 'RelationController@update')->name('relations.update');


    Route::post('/admin/relations/ajax/get', 'RelationController@getItems')->name('relations.ajax.get');


    Route::post('/admin/navigation/ajax/get', 'NavigationController@getItems')->name('navigation.ajax.get');
    Route::post('/admin/navigation/ajax/routes/get', 'NavigationController@getRoutes')->name('navigation.ajax.routes.get');


    Route::post('/admin/ajax/data/refresh', 'DataController@refresh')->name('ajax.data.refresh');
    Route::post('/admin/ajax/service/refresh', 'ServiceController@refresh')->name('ajax.data.refresh');


    Route::get('admin/test', function () {
        return view("test");
    });

});
