@extends('layouts.app')
<script>
    function printPage() {
      window.print();
    }
    </script>
@section('content')
<div class="card border-dark mb-3" style="max-width: 70rem;">
    <div class="card-header">Reciept</div>
    <div class="card-body ">
      <h5 class="card-title">Appointment Validation</h5>
      <strong>Name:</strong>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $appointment->nom }}<br>
      <strong>Lastname:</strong>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $appointment->prenom }}<br>
      <strong>Age:</strong>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $appointment->age }}<br>
      <strong>Specialitie:</strong>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $appointment->specialite }}<br>
      <strong>Date:</strong>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $appointment->datederendezvous }}<br>
      <strong>Time:</strong>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $appointment->temps }}<br>
    
   
    </div>
  </div>
  <h3>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-warning"></i> Notice :10 minutes late and your appointment will be canceled </h3>
  <h3>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You have to print your reciept and grab it with you </h3> <input type="button" value="Print this page" onclick="printPage()"  />
  <a href=""></a>
  <h3 style="color: rgb(48, 192, 48)">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you for choosing us </h3>
   
     <br><br><br>
@endsection
