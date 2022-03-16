<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'Website\WebsiteController@index')->name('website.index');
Route::get('/personal-card', 'Website\WebsiteController@personalCard')->name('website.personal-card');
Route::get('/driving-license', 'Website\WebsiteController@drivingLicense')->name('website.driving-license');
Route::get('/pass', 'Website\WebsiteController@passport')->name('website.pass');
Route::get('/renew-license', 'Website\WebsiteController@renewLicense')->name('website.renew-license');
Route::get('/lost-license', 'Website\WebsiteController@lostLicense')->name('website.lost-license');
Route::get('/renew-passport', 'Website\WebsiteController@renewPassport')->name('website.renew-passport');
Route::get('/lost-passport', 'Website\WebsiteController@lostPassport')->name('website.lost-passport');
Route::get('/renew-personal-card', 'Website\WebsiteController@renewPersonalCard')->name('website.renew-personal-card');
Route::get('/lost-personal-card', 'Website\WebsiteController@lostPersonalCard')->name('website.lost-personal-card');
Route::get('/data', 'Website\WebsiteController@data')->name('website.data');


Route::resource('cardPer', 'InvoController');
Route::resource('driving', 'DrivLicensController');
Route::resource('passport', 'PassportsController');
Route::resource('serch', 'SerchController');


//Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});


Route::get('/{page}', 'AdminController@index');


Route::prefix('admin')->group(function() {
    Route::get('/login','Admin\Auth\LoginController@showLoginForm')->name('admin.show_login');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.login');
    Route::get('logout/', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
   }) ;
