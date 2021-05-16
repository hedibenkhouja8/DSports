@extends('layouts.admin')
@section('main')
@if (session('deleteClient'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteClient') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<a href="{{ route('clients.create') }}" class="btn btn-outline-primary btn-lg float-right" ><i class="fas fa-user-plus"></i>Ajouter un nouveau client</a>
<br>
<h2 >This Is Your Clients List:</h2>
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
    
            <td> 
                <a href="{{ route('clients.show', ['client' => $client->id]) }}"><i class="far fa-eye"></i></a>
                <a href="{{ route('clients.edit', ['client' => $client->id]) }}"><i class="fas fa-edit"></i> </a>
                
                
            </td>
    
            </tr>
      
        @endforeach
       
    </tbody>
   
    
</table>
<div class="mx-auto"  style="width: 200px;">
    {{ $clients->links() }}
</div>
@endsection