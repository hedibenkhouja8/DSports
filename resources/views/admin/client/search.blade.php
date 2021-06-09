@extends('layouts.admin')
@section('main')

<a href="{{ route('clients.create') }}" class="btn btn-outline-primary btn-lg float-right" ><i class="fas fa-user-plus"></i>Ajouter un nouveau client</a>

<br>
<h2 >These are your Clients List:</h2>
<form class="form-inline" action="{{ url('/search') }}" method="get" >
    
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  name="query" style="border: solid black">
    <button class="btn s" type="submit" style="white-space: nowrap;
    text-align: center;"> <i class="fa fa-search"  aria-hidden="true"></i>search</button>
 </form>
<table class="table table-striped table-light container">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last name</th>
            <th>Specialitie </th>
            <th>Email</th>
            <th>Age</th>
            <th>coach_id</th>
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
            <td>{{ $client->coach_id }}</td>
    
            <td> 
                <a href="{{ route('clients.show', ['client' => $client->id]) }}"><i class="far fa-eye"></i></a>
                <a href="{{ route('clients.edit', ['client' => $client->id]) }}"><i class="fas fa-edit"></i> </a>
                
                
            </td>
    
            </tr>
      
        @endforeach
       
    </tbody>
   
    
</table>

@endsection