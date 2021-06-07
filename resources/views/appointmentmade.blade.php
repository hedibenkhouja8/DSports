@extends('layouts.app')
<script>
    function printPage() {
      window.print();
    }
    </script>
@section('content')
<div class="card border-dark mb-3 print-container" style="max-width: 70rem;">
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
  <style>
    @media print{

      body *{
        visibility: hidden;
      }
      .print-container, .print-container *{visibility: visible;}
    }
  </style><div style="text-align: center">
 <input class="btn btn-primary" type="button" value="Print Reciept" onclick="window.print();">
  
  <h3><i class="fas fa-warning"></i> Notice :10 minutes late and your appointment will be canceled </h3>
  <h3>You have to print your reciept and grab it with you </h3> 
  
  <h3 style="color: rgb(48, 192, 48)">Thank you for choosing us </h3>
</div>
     <br><br><br>
@endsection
