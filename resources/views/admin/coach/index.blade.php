@extends('layouts.admin')
@section('main')
<h2>This Is Your Coaches List:</h2>
<table class="table table-striped table-light container">
    <thead class="thead-dark">
     <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last name</th>
        <th>Specialitie </th>
        <th>Email</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    @foreach ($coaches as $coach)
    <tr>
           
        <td>{{ $coach->id }}</td>
        <td>{{ $coach->nomcoach }}</td>
        <td>{{ $coach->prenomcoach }}</td>
        <td>{{ $coach->specialite }}</td>
        <td>{{ $coach->emailcoach }}</td>
        <td>{{ $coach->agecoach }}</td>


        <td> 
            <a href=""><i class="far fa-eye"></i></a>
            <a href=""><i class="far fa-trash-alt"></i></a> 
            <a href=""><i class="fas fa-edit"></i> 
        </td>

        </tr>
  
    @endforeach
   
</tbody>

</table>
<div class="mx-auto"  style="width: 200px;">
    {{ $coaches->links() }}
</div>

@endsection