<?php

namespace App\Http\Controllers\Admin;

use App\Coach;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.coach.index', ['coaches' => Coach::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coach.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //dd($request);
                //$validatedData = $request->validate([
                    //'nomcoach  ' => 'required|min:2',
                    //'prenomcoach' => 'required|min:2',
                    //'emailcoach' => 'required',
                    //'specialite	' => 'required',
                    //'agecoach' => 'required',
                    //'passcoach' => 'required',
                    //'picture' => 'required',
                    //'address' => 'required',
                    //'phone' => 'required',
                    //'description' => 'required',
                //]);
               // $coach = new Coach;
               // $coach->Nom = $request->nom;
               // $coach->Prenom = $request->prenom;
                //$coach->Email = $request->emailclient;
                //$coach->age = $request->age;
                //$coach->Speciality = $request->sport;
                //$coach->save();
                //2eme methode
                //$coach = Coach::create($validatedData);
                //return redirect()->route('admin.coach.show' ,$coach );
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        
        return view('admin.coach.show', ['coach' => $coach]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit(Coach $coach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        //
    }
}
