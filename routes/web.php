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

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@adminview')->name('admin');


Route::get('/admin-dashboard', function () {
    
    $admins = Admin::inRandomOrder()->limit(1)->get();
  
    return view('admin.dashboard');
})->middleware('auth', 'admin');;