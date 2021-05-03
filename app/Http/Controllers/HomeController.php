<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Coach;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
   // $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        $coaches = Coach::inRandomOrder()->limit(5)->get();
        $clients = Client::inRandomOrder()->limit(6)->get();
        return view('welcome', [
            'coaches' => $coaches,
            'clients' => $clients
        ]);
    }
}
