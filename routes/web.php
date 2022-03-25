<?php

use Illuminate\Support\Facades\Auth;
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

// Renew License
Route::get('/renew-license', 'Website\WebsiteController@renewLicense')->name('website.renew-license');
Route::post('/renew-license/edit/{driv_licens}', 'Website\RenewLicenseController@update')->name('website.renew-license.update');
Route::post('/renew-license', 'Website\RenewLicenseController@search')->name('website.renew-license.search');

Route::get('/lost-license', 'Website\WebsiteController@lostLicense')->name('website.lost-license');
Route::post('/lost-license', 'Website\RenewLicenseController@lost')->name('website.lost-license.lost');

// Renew Passport
Route::get('/renew-passport', 'Website\WebsiteController@renewPassport')->name('website.renew-passport');
Route::post('/renew-passport/edit/{passport}', 'Website\RenewPassportController@update')->name('website.renew-passport.update');
Route::post('/renew-passport', 'Website\RenewPassportController@search')->name('website.renew-passport.search');

Route::get('/lost-passport', 'Website\WebsiteController@lostPassport')->name('website.lost-passport');
Route::post('/lost-passport', 'Website\RenewPassportController@lost')->name('website.lost-passport.lost');

//Renew Personal Card
Route::get('/renew-personal-card', 'Website\WebsiteController@renewPersonalCard')->name('website.renew-personal-card');
Route::post('/renew-personal-card/edit/{invo}', 'Website\RenewPersonalCardController@update')->name('website.renew-personal-card.update');
Route::post('/renew-personal-card', 'Website\RenewPersonalCardController@search')->name('website.renew-personal-card.search');

Route::get('/lost-personal-card', 'Website\WebsiteController@lostPersonalCard')->name('website.lost-personal-card');
Route::post('/lost-personal-card', 'Website\RenewPersonalCardController@lost')->name('website.lost-personal-card.lost');


Route::get('/data', 'Website\WebsiteController@data')->name('website.data');


Route::resource('cardPer', 'InvoController');
Route::resource('driving', 'DrivLicenseController');
Route::resource('passport', 'PassportsController');
Route::resource('serch', 'SerchController');

Route::resource('cardUpdate', 'CardUpdateController');
Route::resource('passportUpdate', 'PassportUpdateController');
Route::resource('drivingUpdate', 'DrivingUpdateController');

Route::resource('passportLost', 'PassportLostController');
Route::resource('cardLost', 'CardLostController');
Route::resource('driverLost', 'DriverLostController');


//Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
});


Route::get('/{page}', 'AdminController@index');


Route::prefix('admin')->group(function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.show_login');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.login');
    Route::get('logout/', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
});
