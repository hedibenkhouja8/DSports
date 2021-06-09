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
use App\Appointment;
use App\Http\Controllers\Admin\ClientController;
use Illuminate\Support\Facades\Input;

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
  
     Route::any('/search',function(){
        $q = Request::get ( 'query' );
        $clients = Client::where('nom','LIKE','%'.$q.'%')->get();
        if(count($clients) > 0)
            return view('admin\client\search',compact('clients'))->withDetails($clients)->withQuery ( $q );
        else return view ('admin\client\search',compact('clients'))->withMessage('No Details found. Try to search again !');
    });
    Route::any('/searchcoach',function(){
        $q = Request::get ( 'query' );
        $coaches = Coach::where('nomcoach','LIKE','%'.$q.'%')->get();
        if(count($coaches) > 0)
            return view('admin\coach\search',compact('coaches'))->withDetails($coaches)->withQuery ( $q );
        else return view ('admin\coach\search',compact('coaches'))->withMessage('No Details found. Try to search again !');
    });
     
});

});


     
