@extends('layouts.admin')
@section('main')


<fieldset class="container">
    <h2 >Add new Coach</h2>
       
  
    <form action="{{route('coaches.store') }} " method="post">
        @include('admin.coach.form')
    </form>
</fieldset>
    
@endsection