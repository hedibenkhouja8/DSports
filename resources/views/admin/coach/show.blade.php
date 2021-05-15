@extends('layouts.admin')

@section('main')
@if (session('storeCoach'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeCoach') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateCoach'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateCoach') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<h3><i class="fas fa-id-card"></i> Details about Coach : <strong>{{ $coach->nomcoach.' '.$coach->prenomcoach  }}</strong></h3>
<div class="card" style="width: 25rem;">
    <img class="card-img-top" src="{{ $coach->picture }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $coach->nomcoach.' '.$coach->prenomcoach  }}</h5>
      <li ><strong>Speciality:</strong></i> {{ $coach->specialite }}</li>
      <br>
      <li ><strong>Age:</strong></i> {{ $coach->agecoach }}</li> <br>
      <li ><strong>Address:</strong></i> {{ $coach->address }}</li> <br>
      <li ><strong>Number:</strong></i> {{ $coach->phone }}</li> <br>
      <li ><strong>Email:</strong></i> {{ $coach->emailcoach }}</li> <br>
      <hr>
            <a href="{{ route('coaches.edit', ['coach' => $coach->id]) }}" class="btn btn-warning" title="Edit user {{ $coach->prenomcoach.' '.$coach->nomcoach  }}">
                <i class="fas fa-user-edit"></i>
            </a>
            <a href="#" class="btn btn-danger" title="Delete user {{ $coach->prenomcoach.' '.$coach->nomcoach  }}"
                onclick="event.preventDefault(); document.querySelector('#delete-coach-form').submit()"
                ><i class="fas fa-user-slash"></i></a>
            <form action="{{ route('coaches.destroy', ['coach' => $coach->id]) }}" method="post" id="delete-coach-form">@csrf @method('DELETE')</form>
         </div>
  </div>
@endsection