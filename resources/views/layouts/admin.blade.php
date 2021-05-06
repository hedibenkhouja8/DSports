@extends('layouts.app')
@section('content')

@foreach ($admins as $admin)
<li>
    <h2 class="h2">Welcome Boss <strong>{{ $admin->nomadmin }}</strong></h2>
    <img src="{{ $admin->picture }}" style="height: 250px;" />

</li>
@endforeach
<br><br>

<div class="container">
    <h2>This Is Your Coaches List:</h2>
<table class="table table-striped table-light container">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last name</th>
            <th>Specialitie </th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coaches as $coach)
        <tr>
               
            <td>{{ $coach->id }}</td>
            <td>{{ $coach->nomcoach }}</td>
            <td>{{ $coach->prenomcoach }}</td>
         <td>{{ $coach->specialite }}</td>
            <td>{{ $coach->emailcoach }}</td>
            <td>{{ $coach->agecoach }}</td>
    
    
            <td><i class="far fa-trash-alt"></i></a>
    
            </tr>
      
        @endforeach
       
    </tbody>
    
</table>
<h2>This Is Your Clients List:</h2>
<table class="table table-striped table-light container">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last name</th>
            <th>Specialitie </th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
               
            <td>{{ $client->id }}</td>
            <td>{{ $client->nom }}</td>
            <td>{{ $client->prenom }}</td>
         <td>{{ $client->sport }}</td>
            <td>{{ $client->emailclient}}</td>
            <td>{{ $client->age }}</td>
    
    
            <td><i class="far fa-trash-alt"></i></a>
    
            </tr>
      
        @endforeach
       
    </tbody>
    
</table>

</div>


        
@endsection


           
