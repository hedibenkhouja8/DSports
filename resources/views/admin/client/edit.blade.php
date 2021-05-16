@extends('layouts.admin')
@section('main')


<fieldset class="container">
    <h2 >Edit Client : <strong>{{ $client->nom." ".$client->prenom }}</strong></h2>
       
  
    <form action="{{route('clients.update' ,['client' => $client->id]) }} " method="post">
        @method('PUT')
        @include('admin.client.form')
    </form>
</fieldset>
    
@endsection