<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::Resource('/admin/Page', 'PageController', [
    'as' => 'admin'
]);
Route::Resource('/admin/PageCategory', 'PageCategoryController', [
    'as' => 'admin'
]);
Route::Resource('/admin/ImgUpload', 'ImgUploadController', [
    'as' => 'admin'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//For pages
Route::get('/about', 'FrontendController@about');
Route::get('/railway_contractors', 'FrontendController@railway_contractors');
Route::get('/mining_services', 'FrontendController@mining_services');
Route::get('/renewable_energy_system', 'FrontendController@renewable_energy_system');
Route::get('/amphibious_excavator', 'FrontendController@amphibious_excavator');
Route::get('/operation_and_maintenance_contractors', 'FrontendController@operation_and_maintenance_contractors');
Route::get('/dredging_and_reclamation', 'FrontendController@dredging_and_reclamation');
Route::get('/construction_equipment_rental_services', 'FrontendController@construction_equipment_rental_services');
Route::get('/clients', 'FrontendController@clients');
Route::get('/infrastructure', 'FrontendController@infrastructure');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/contact1', 'FrontendController@contact1')->name('contact');

Route::post('/submitmyform', 'FrontendController@submitmyform');

Route::get('/getStateList/{country_id}', 'FrontendController@getStateList');
Route::get('/getCityList', 'FrontendController@getCityList');
Route::get('/vendor_registration', 'FrontendController@vendor_registration');

Route::post('/vendorform', 'FrontendController@vendorform');
Route::get('/career', 'FrontendController@career');
Route::get('/laxyo_group_companies', 'FrontendController@laxyo_group_companies');
Route::get('/services', 'FrontendController@services');
Route::get('/operation_maintenance', 'FrontendController@operation_maintenance');


//for submit form
Route::post('/career', 'CareerController@submit');
Route::get('/admin-career', 'AdminController@index');
Route::delete('/admin-career/{id}', 'AdminController@cdestroy')->name('cdel');
Route::get('/career-form-apply/{id}','FrontendController@careerform');

//for feedback
Route::post('/feedback', 'CareerController@feedback');
Route::get('/admin-feedback', 'AdminController@feedback');
Route::delete('/admin/{id}', 'AdminController@fdestroy')->name('fdel');

//for contact
Route::get('/admin-contact', 'AdminController@contact');
Route::delete('/admin-contact/{id}', 'AdminController@condestroy')->name('contactdel');
Route::get('/admin-vender', 'AdminController@vender');
Route::delete('/admin-vender/{id}', 'AdminController@vdestroy')->name('venderdel');
Route::get('/admin-fileDownload', 'AdminController@fileDownload')->name('download');

//for new post

Route::Resource('/admin-post', 'PostController');

Route::get('/getStateList','FrontendController@getStateList');

