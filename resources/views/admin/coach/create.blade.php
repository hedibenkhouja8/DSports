@extends('layouts.admin')
@section('main')
<fieldset class="container">
    <legend>
        <h2 class="fas fa-user-plus">Ajouter un nouveau coach</h2>
    </legend>
    <form action="{{route('coaches.store') }} " method="post">
    @csrf
    <div class="row">
        <div class="form-group col">
         <label for="firstname" class="form-label">Nom</label> 
         <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
     </div> 
    <div class="form-group col">
         <label for="lastname" class="form-label">Prenom</label> 
         <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" aria-describedby="basic-addon1">
    </div> 
    </div>
    <div class="row">
        <div class="form-group col">
            <label for="E-mail" class="form-label">Email</label> 
            <input type="email" class="form-control" placeholder="E-mail" aria-label="Email" aria-describedby="basic-addon1">
       </div> 
        <div class="form-group col">
            <label for="specialite" class="form-label">Mot de passe</label> 
            <input type="text" class="form-control" placeholder="Spéciality" aria-label="Spécialité" aria-describedby="basic-addon1">
     </div>
    </div>
    <div class="row">
     <div class="form-group col">
        <label for="age" class="form-label">Age</label> 
        <input type="number" class="form-control" placeholder="Age" aria-label="Age" aria-describedby="basic-addon1">
   </div> 
   <div class="form-group col">
    <label for="specialite" class="form-label">image</label> 
    <input type="file" class="form-control" placeholder="Spéciality" aria-label="Spécialité" aria-describedby="basic-addon1">
</div> 
</div>
<div class="row">
     <div class="form-group col">
        <label for="specialite" class="form-label">Adresse</label> 
        <input type="text" class="form-control" placeholder="Adresse" aria-label="Spécialité" aria-describedby="basic-addon1">
   </div> 
    <div class="form-group col">
        <label for="age" class="form-label">Phone</label> 
        <input type="number" class="form-control" placeholder="Age" aria-label="Age" aria-describedby="basic-addon1">
   </div> 
</div>
<div class="row">
   <div class="form-group col">
    <label for="age" class="form-label">Description</label> 
    <input type="textarea" class="form-control" placeholder="Description" aria-label="Age" aria-describedby="basic-addon1">
   </div>
    <div class="form-group col">
        <label for="specialite" class="form-label">specialite</label>
        <div >
        <select  name="specialite"  class="form-control" id="floatingSelect" aria-label="Floating label select example">
            <option value="">Boxing</option>
            <option value="">Dancing</option>
            <option value="">yoga</option>
            <option value="">Swimming</option>
            <option value="">Cycling</option>
            <option value="">Weight Training</option>
        </select>
    </div> 
   </div> 
</div>
    <div class="row">
        <button class="btn  btn-outline-primary col" type="submit"> <i class="fas fa-save"></i>Save</button>
        <button class="btn btn-outline-danger col" type="reset"><i class="fas fa-window-close"></i> Cancel</button>
    </div>
    </form>
</fieldset>
    
@endsection