@csrf
<div class="row">
    <div class="form-group col">
    <label for="firstname" class="form-label">Firstname</label> 
     <input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}"  placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name="nom" id="nom">
     @error('nom')<div class="text-danger">{{ $message }}</div>@enderror
    </div> 
 <div class="form-group col">
     <label for="prenom" class="form-label">Last name</label> 
     <input type="text" class="form-control @error('prenom') is-invalid @enderror" placeholder="Last name" value="{{ old('prenom') }}"  aria-label="Last name" aria-describedby="basic-addon1"  name="prenom" id="prenom">
     @error('prenom')<div class="text-danger">{{ $message }}</div>@enderror
    </div> 
 </div>
 <div class="row">
    <div class="form-group col">
        <label for="E-mail" class="form-label">Email</label> 
        <input type="email" class="form-control @error('emailclient') is-invalid @enderror" placeholder="E-mail" value="{{ old('emailclient') }}"   aria-label="Email" aria-describedby="basic-addon1"  name="emailclient" id="emailclient">
        @error('emailclient')<div class="text-danger">{{ $message }}</div>@enderror
    </div> 
    <div class="form-group col">
        <label for="coach_id" class="form-label">coach_id</label> 
        <input type="number" class="form-control  @error('coach_id') is-invalid @enderror" placeholder="coach_id" value="{{ old('coach_id') }}"aria-label="coach_id"  aria-describedby="basic-addon1"  name="coach_id" id="coach_id">
        @error('coach_id')<div class="text-danger">{{ $message }}</div>@enderror
    </div> 
 </div>
  
<div class="row">
    <div class="form-group col">
      <label for="datedebutabonnement" class="form-label">date debut abonnement </label> 
      <input type="date" class="form-control  @error('datedebutabonnement') is-invalid @enderror" placeholder="datedebutabonnement" value="{{ old('datedebutabonnement') }}"aria-label="datedebutabonnement"  aria-describedby="basic-addon1"  name="datedebutabonnement" id="datedebutabonnement">
      @error('datedebutabonnement')<div class="text-danger">{{ $message }}</div>@enderror
    </div> 
    <div class="form-group col">
        <label for="datefinabonnement" class="form-label">date fin abonnement </label> 
        <input type="date" class="form-control  @error('datefinabonnement') is-invalid @enderror" placeholder="datefinabonnement" value="{{ old('datefinabonnement') }}"aria-label="datefinabonnement"  aria-describedby="basic-addon1"  name="datefinabonnement" id="datefinabonnement">
        @error('datefinabonnement')<div class="text-danger">{{ $message }}</div>@enderror
      </div> 
   </div>
   <div class="row">
    <div class="form-group col">
       <label for="Address" class="form-label">Address</label> 
       <input type="text" class="form-control  @error('address') is-invalid @enderror" placeholder="Address" value="{{ old('address') }}"aria-label="Spécialité"aria-describedby="basic-addon1"  name="address"  id="address">
       @error('addresse')<div class="text-danger">{{ $message }}</div>@enderror
   </div> 
   <div class="form-group col">
       <label for="phone" class="form-label">Phone</label> 
       <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" value="{{ old('phone') }}" aria-label="Phone"  aria-describedby="basic-addon1"  name="phone" id="phone">
       @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
   </div> 
   </div>
   
 <div class="row">
  <div class="form-group col">
    <label for="age" class="form-label">Age</label> 
    <input type="number" class="form-control  @error('age') is-invalid @enderror" placeholder="Age" value="{{ old('age') }}"aria-label="Age"  aria-describedby="basic-addon1"  name="age" id="age">
    @error('age')<div class="text-danger">{{ $message }}</div>@enderror
  </div> 
  <div class="form-group col">
  <label for="picture" class="form-label">Image</label> 
  <input type="file" class="form-control  @error('picture') is-invalid @enderror" placeholder="image" value="{{ old('picture') }}"aria-label="picture" aria-describedby="basic-addon1"  name="picture"   id="picture">
  @error('picture')<div class="text-danger">{{ $message }}</div>@enderror
 </div> 
 </div>

<div class="row">
<div class="form-group col">
    <label for="sport" class="form-label">Sport</label>
    <div >
    <select  name="sport" value="{{ old('sport') }}"  class="form-control @error('sport') is-invalid @enderror" id="floatingSelect"   aria-label="Floating label select example"  name="sport"  id="sport">
        <option value="Boxing">Boxing</option>
        <option value="Dancing">Dancing</option>
        <option value="Yoga">yoga</option>
        <option value="Swimming">Swimming</option>
        <option value="Cycling">Cycling</option>
        <option value="Weight Training ">Weight Training</option>
    </select>
    @error('sport')<div class="text-danger">{{ $message }}</div>@enderror
</div> 

</div> 
</div>
<select  name="role" value="{{ old('role') }}"  class="form-control @error('role') is-invalid @enderror" id="floatingSelect"   aria-label="Floating label select example"  name="role"  id="role">
<option value="Client">client</option>

</select>
<div class="row">

    <button class="btn  btn-outline-primary col" type="submit"> <i class="fas fa-save"></i>Save</button><hr><p>    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
    <button class="btn btn-outline-danger col" type="reset"><i class="fas fa-window-close"></i> Cancel</button>
</div>

