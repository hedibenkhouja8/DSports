@extends('layouts.admin')
@section('main')

<br>
<h2>Coahes that wants to join DSport:</h2>
<table class="table table-striped table-light container">
    <thead class="thead-dark">
     <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created at</th>
       
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    
    <tr>
           
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td>{{ $user->created_at }}</td>
                  </tr>
  
    @endforeach
   
</tbody>

</table>
<div class="mx-auto"  style="width: 200px;">
    {{ $users->links() }}
</div>

@endsection