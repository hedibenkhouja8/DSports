@csrf
<div class="row">
    <div class="form-group col">
     <label for="firstname" class="form-label">Firstname</label> 
     <input type="text" class="form-control @error('nomcoach') is-invalid @enderror" value="{{ old('nomcoach') }}"  placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name="nomcoach" id="nomcoach">
     @error('nomcoach')<div class="text-danger">{{ $message }}</div>@enderror
    </div> 
<div class="form-group col">
     <label for="lastname" class="form-label">Last name</label> 
     <input type="text" class="form-control @error('prenomcoach') is-invalid @enderror" placeholder="Last name" value="{{ old('prenomcoach') }}"  aria-label="Last name" aria-describedby="basic-addon1"  name="prenomcoach" id="prenomcoach">
     @error('prennomcoach')<div class="text-danger">{{ $message }}</div>@enderror
    </div> 
</div>
<div class="row">
    <div class="form-group col">
        <label for="E-mail" class="form-label">Email</label> 
        <input type="email" class="form-control @error('emailcoach') is-invalid @enderror" placeholder="E-mail" value="{{ old('emailcoach') }}"   aria-label="Email" aria-describedby="basic-addon1"  name="emailcoach" id="emailcoach">
        @error('emailcoach')<div class="text-danger">{{ $message }}</div>@enderror
    </div> 
</div>
<div class="row">
 <div class="form-group col">
    <label for="age" class="form-label">Age</label> 
    <input type="number" class="form-control  @error('agecoach') is-invalid @enderror" placeholder="Age" value="{{ old('agecoach') }}"aria-label="Age"  aria-describedby="basic-addon1"  name="agecoach" id="agecoach">
    @error('agecoach')<div class="text-danger">{{ $message }}</div>@enderror
</div> 
<div class="form-group col">
<label for="specialite" class="form-label">Image</label> 
<input type="file" class="form-control  @error('picture') is-invalid @enderror" placeholder="image" value="{{ old('picture') }}"aria-label="picture" aria-describedby="basic-addon1"  name="picture"   id="picture">
@error('picture')<div class="text-danger">{{ $message }}</div>@enderror
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
<label for="age" class="form-label">Description</label> 
<input type="textarea" class="form-control  @error('description') is-invalid @enderror" placeholder="Description" value="{{ old('description') }}" aria-label="Age"  aria-describedby="basic-addon1"  name="description" id="description">
@error('description')<div class="text-danger">{{ $message }}</div>@enderror   
</div>
<div class="form-group col">
    <label for="specialite" class="form-label">Speciality</label>
    <div >
    <select  name="specialite" value="{{ old('specialite') }}"  class="form-control @error('specialite') is-invalid @enderror" id="floatingSelect"   aria-label="Floating label select example"  name="specialite"  id="specialite">
        <option value="Boxing">Boxing</option>
        <option value="Dancing">Dancing</option>
        <option value="Yoga">yoga</option>
        <option value="Swimming">Swimming</option>
        <option value="Cycling">Cycling</option>
        <option value="Weight Training ">Weight Training</option>
    </select>
    @error('specialite')<div class="text-danger">{{ $message }}</div>@enderror
</div> 

</div> 
<select  name="role" value="{{ old('role') }}"  class="form-control @error('role') is-invalid @enderror" id="floatingSelect"   aria-label="Floating label select example"  name="specialite"  id="role">
<option value="Coach">Coach</option>

</select>
</div>
<div class="row">

    <button class="btn  btn-outline-primary col" type="submit"> <i class="fas fa-save"></i>Save</button><hr><p>    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
    <button class="btn btn-outline-danger col" type="reset"><i class="fas fa-window-close"></i> Cancel</button>
</div>