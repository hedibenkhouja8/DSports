@extends('layouts.admin')

@section('main')
<h3><i class="fas fa-id-card"></i> Details about Coach : <strong>{{ $coach->nomcoach.' '.$coach->prenomcoach  }}</strong></h3>
<div class="card" style="width: 25rem;">
    <img class="card-img-top" src="{{ $coach->picture }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $coach->nomcoach.' '.$coach->prenomcoach  }}</h5>
      <li ><strong>speciality:</strong></i> {{ $coach->specialite }}</li>
      <br>
      <li ><strong>Age:</strong></i> {{ $coach->agecoach }}</li> <br>
      <li ><strong>Address:</strong></i> {{ $coach->address }}</li> <br>
      <li ><strong>Number:</strong></i> {{ $coach->phone }}</li> <br>
      <li ><strong>Email:</strong></i> {{ $coach->emailcoach }}</li> <br>
         </div>
  </div>
@endsection