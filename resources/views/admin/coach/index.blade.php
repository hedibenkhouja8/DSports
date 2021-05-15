@extends('layouts.admin')
@section('main')
@if (session('deleteCoach'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteCoach') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<a href="{{ route('coaches.create') }}" class="btn btn-outline-primary btn-lg float-right" ><i class="fas fa-user-plus"></i>Ajouter un nouveau coach</a>
<br>
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
            <a href="{{ route('coaches.show', ['coach' => $coach->id]) }}"><i class="far fa-eye"></i></a>
          
           <a href="{{ route('coaches.edit', ['coach' => $coach->id]) }}"><i class="fas fa-edit"></i> </a>
           
                </td>
                  </tr>
  
    @endforeach
   
</tbody>

</table>
<div class="mx-auto"  style="width: 200px;">
    {{ $coaches->links() }}
</div>

@endsection