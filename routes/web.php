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
use App\Client;
use App\Coach;
use App\Admin;

Route::get('/','HomeController@Welcome');
//Route::get('/admin','AdminController@admin');


Auth::routes();



Route::resource('appointments', 'Admin\AppointmentController');
//Route::get('/admin', 'AdminController@adminview')->name('admin');

Route::middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('admin')->namespace('Admin')->group(function () {

    Route::get('/admin-dashboard', function () {
    
        $admins = Admin::inRandomOrder()->limit(1)->get();

      return view('admin.dashboard');
     });

     Route::resource('clients', 'ClientController');
     Route::resource('coaches', 'CoachController');
     Route::resource('users', 'UserController');
    
});

});


     
