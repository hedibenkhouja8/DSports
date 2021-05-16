@extends('layouts.admin')

@section('main')
@if (session('storeClient'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeClient') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateClient'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateClient') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<h3><i class="fas fa-id-card"></i> Details about Client : <strong>{{ $client->nom.' '.$client->prenom  }}</strong></h3>
<div class="card" style="width: 25rem;">
    <img class="card-img-top" src="{{ $client->picture }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $client->nom.' '.$client->prenom  }}</h5>
      <li ><strong>Sport:</strong></i> {{ $client->sport }}</li>
      <br>
      <li ><strong>Age:</strong></i> {{ $client->age }}</li> <br>
      <li ><strong>Address:</strong></i> {{ $client->address }}</li> <br>
      <li ><strong>Number:</strong></i> {{ $client->phone }}</li> <br>
      <li ><strong>Date debut d'abonnement:</strong></i> {{ $client->datedebutabonnement }}</li> <br>
      <li ><strong>Date fin d'abonnement:</strong></i> {{ $client->datefinabonnement }}</li> <br>
      <li ><strong>Email:</strong></i> {{ $client->emailclient }}</li> <br>
      <li ><strong>CoachID :</strong> {{ $client->coach_id }}</li> <br>
      <hr>
      <a href="{{ route('clients.edit', ['client' => $client->id]) }}" class="btn btn-warning" title="Edit user {{ $client->prenom.' '.$client->nom  }}">
          <i class="fas fa-user-edit"></i>
      </a>
      <a href="#" class="btn btn-danger" title="Delete user {{ $client->prenom.' '.$client->nom  }}"
          onclick="event.preventDefault(); document.querySelector('#delete-client-form').submit()"
          ><i class="fas fa-user-slash"></i></a>
      <form action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="post" id="delete-client-form">@csrf @method('DELETE')</form>

    </div>
  </div>
@endsection