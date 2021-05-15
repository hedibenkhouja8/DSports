@extends('layouts.admin')
@section('main')


<fieldset class="container">
    <h2 >Edit Coach : <strong>{{ $coach->nomcoach." ".$coach->prenomcoach }}</strong></h2>
       
  
    <form action="{{route('coaches.update' ,['coach' => $coach->id]) }} " method="post">
        @method('PUT')
        @include('admin.coach.form')
    </form>
</fieldset>
    
@endsection