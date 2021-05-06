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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function () {
    
    $coaches = Coach::inRandomOrder()->limit(5)->get();
    $admins = Admin::inRandomOrder()->limit(1)->get();
    $clients = Client::inRandomOrder()->limit(6)->get();
    return view('admin.dashboard', [
        'coaches' => $coaches,
        'clients' => $clients,
        'admins' => $admins
    ]);
});