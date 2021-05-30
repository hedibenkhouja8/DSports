@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Make an Appointment and Join our crew</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
    <form action="{{route('appointments.store') }} " method="post">
        @csrf
                    <div class="form-group ">
                        <label for="firstname" class="form-label">Firstname</label> 
                         
                        <input type="text" class="form-control @error('nom') is-invalid @enderror"  placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name="nom" id="nom">
                        @error('nom')<div class="text-danger">{{ $message }}</div>@enderror
                       </div> 
                       <div class="form-group col">
                        <label for="firstname" class="form-label">Lastname</label> 
                         
                        <input type="text" class="form-control @error('prenom') is-invalid @enderror"   placeholder="LastName" aria-label="Name" aria-describedby="basic-addon1" name="prenom" id="nom">
                        @error('prenom')<div class="text-danger">{{ $message }}</div>@enderror
                       </div> 

                       <div class="form-group col">
                        <label for="firstname" class="form-label">Age</label> 
                         
                        <input type="number" class="form-control @error('age') is-invalid @enderror" placeholder="Age" aria-label="Name" aria-describedby="basic-addon1" name="age" id="nom">
                        @error('age')<div class="text-danger">{{ $message }}</div>@enderror
                       </div> 
                       <div class="form-group col">
                        <label for="firstname" class="form-label">Specialitie</label> 
                         
                        <input type="text" class="form-control @error('datederendezvous') is-invalid @enderror"   placeholder="Specialitie" aria-label="Name" aria-describedby="basic-addon1" name="specialite" id="nom">
                        @error('specialite')<div class="text-danger">{{ $message }}</div>@enderror
                       </div> 

                       <div class="form-group col">
                        <label for="firstname" class="form-label">Date</label> 
                         
                        <input type="date" class="form-control @error('datederendezvous') is-invalid @enderror"   placeholder="Date" aria-label="Name" aria-describedby="basic-addon1" name="datederendezvous" id="nom">
                        @error('datederendezvous')<div class="text-danger">{{ $message }}</div>@enderror
                       </div> 
                       <div class="form-group col">
                        <label for="firstname" class="form-label">Time</label> 
                         
                        <input type="time" class="form-control @error('datederendezvous') is-invalid @enderror"   placeholder="time" aria-label="Name" aria-describedby="basic-addon1" name="temps" id="nom">
                        @error('temps')<div class="text-danger">{{ $message }}</div>@enderror
                       </div> 
                       <button class="btn  btn-outline-primary col" type="submit"> <i class="fas fa-save"></i>Save</button>
    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
