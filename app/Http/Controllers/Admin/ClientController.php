<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.client.index', ['clients' => Client::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              ($request);
                $client = new Client;
                $client->nom = $request->nom;
                $client->prenom = $request->prenom;
                $client->emailclient = $request->emailclient;
                $client->age = $request->age;
                $client->coach_id = $request->coach_id;
                $client->sport = $request->sport;
                $client->datedebutabonnement = $request->datedebutabonnement;
                $client->datefinabonnement = $request->datefinabonnement;
                $client->address = $request->address;
                $client->phone = $request->phone;
                $client->picture = $request->picture;
                $client->role = $request->role;
                $client->save();     
                return redirect()->route('clients.show' ,$client )->with('storeClient', "Client has been added successfuly");
                
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
        return view('admin.client.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate($this->validationRules());
        
        $client->update($validatedData);

        return redirect()->route('clients.show', $client)->with('updateClient', "Client has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('deleteClient', 'Client has been deleted');//
    }
    private function validationRules()
    {
        return [
            'nom' => 'required',
            'prenom' => 'required',
            'emailclient' => 'required',
            'age' => 'required',
            'coach_id' => 'required',
            'sport' => 'required',
            'datedebutabonnement' => 'required',
            'datefinabonnement' => 'required',
            'address' => 'required',
            'phone'=>'required',
            'picture' => 'required',
            'role'=>'required'
           
        ];
    }
}
