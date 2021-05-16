@extends('layouts.admin')
@section('main')


<fieldset class="container">
    <h2 >Add new Client</h2>
       
  
    <form action="{{route('clients.store') }} " method="post">
        @include('admin.client.form')
    </form>
</fieldset>
    
@endsection