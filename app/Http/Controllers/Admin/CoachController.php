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
               // dd($request);
        
             /*  $coach = new Coach;
                $coach->nomcoach = $request->nomcoach;
                $coach->prenomcoach = $request->prenomcoach;
                $coach->emailcoach = $request->emailcoach;
                $coach->passcoach = $request->passcoach;
                $coach->agecoach = $request->agecoach;
                $coach->picture = $request->picture;
                $coach->address = $request->address;
                $coach->phone = $request->phone;
                $coach->description = $request->description;
                $coach->specialite = $request->specialite;
               
                $coach->role = $request->role;


                $coach->save();*/
                //2eme methode ne veut pas marcher
                $validatedData = $request->validate($this->validationRules());
                 $coach = Coach::create($validatedData);
                return redirect()->route('coaches.show' ,$coach )->with('storeCoach', "Coach has been added successfuly");
        /*
        var_dump($request);
        die();*/
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
        return view('admin.coach.edit', ['coach' => $coach]);
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
        $validatedData = $request->validate($this->validationRules());
        
        $coach->update($validatedData);

        return redirect()->route('coaches.show', $coach)->with('updateCoach', "Coach has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        $coach->delete();
        return redirect()->route('coaches.index')->with('deleteCoach', 'Coach has been deleted');
    }
    private function validationRules()
    {
        return [
            'nomcoach' => 'required',
            'prenomcoach' => 'required',
           'emailcoach' => 'required',
       
    
        'agecoach' => 'required',
          
            'picture' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'specialite' => 'required',
            'role'=>'required'
        ];
    }
}
