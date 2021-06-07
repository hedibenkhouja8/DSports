@extends('layouts.admin')
@section('main')

<br>
<h2>Appointments you have:</h2>
<table class="table table-striped table-light container">
    <thead class="thead-dark">
     <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Age</th>
        <th>Specialitie</th>
        <th>Date</th>
        <th>Time</th>
       
    </tr>
</thead>
<tbody>
    @foreach ($appointments as $appointment)
    
    <tr>
           
        <td>{{ $appointment->id }}</td>
            
        <td>{{ $appointment->nom }}</td>
        <td>{{ $appointment->prenom }}</td>
        <td>{{ $appointment->age }}</td>
        <td>{{ $appointment->specialite }}</td>
        <td>{{ $appointment->datederendezvous }}</td>
        <td>{{ $appointment->temps }}</td>
        <td>{{ $appointment->user_id }}</td>
                  </tr>
  
    @endforeach
   
</tbody>

</table>
<div class="mx-auto"  style="width: 200px;">
    {{ $appointments->links() }}
</div>

   
@endsection