@extends('layouts/app')

@section('content')
<form class='container'  action='add' method='post' enctype='multipart/form-data'>
     <div class='form-group'>
     <h4>Add New Employee</h4>
    
     <h6  >{{$errors->first('name')}}</h6>
     <input type="text" class='form-control' name='name' placeholder='Enter name'  {{ old('name') }} ><br/>
    
     <h6>{{$errors->first('email')}}</h6> 
     <input type="email" class='form-control' name='email' placeholder='Enter email' {{ old('email') }} ><br/>
    
     <h6>{{$errors->first('role')}}</h6> 
     <input type="role" class='form-control' name='role' placeholder='Enter role' {{ old('role') }} ><br/>
     
     <div class="row py-2 col-12">
          <input type="file" name='image' id="image" >
    </div>
     <button type='submit' class='btn btn-primary'>Add</button>
     @csrf
     </div>
  </form>
@endsection
