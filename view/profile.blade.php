@extends('layouts/app')

@section('content')
    
<div class='container col-12'>
  
  <form class='form-inline' style='border-bottom:2px solid black'>
   Profile | 
   </form> 
        <div class='col-12' > 
            @if($id->image)
            <div class='col-md-4'>
              <img class='img-circle' src="{{asset('storage/'.$id->image)}}" style='border-radius:50%;height:160px;width:220px' />
            </div>
            @endif
      <div class="container">
            <div class='col-6'>{{$id->name}}</div>
            <div class='col-6'>{{$id->email}}</div>
            <div class='col-6'>{{$id->role}}</div>
            <div class='col-6'> 
                
                    <button class='btn btn-primary btn-sm ' enctype='multipart/form-data' >Edite</button>
                  
                </form>
                <form {{url($id->id)}} method='post'>
                    @method('delete')
                    @csrf
                    @can('delete',App\Employee::class)
                    <button type="submit" class='btn btn-danger  btn-sm'>Delete</button>
                    @endcan
                </form> 
              </div>  
      </div>
      
   
    
     
    </div>
  
  <form class='container'  href='profile/{$id->id}'  method='post' enctype='multipart/form-data'>
      @method('patch')
     <div class='form-group'>
     <h5>Edit Profile</h5>
    
     <h6  >{{$errors->first('name')}}</h6>
     <input type="text" class='form-control' name='name' placeholder='Enter name'  value='{{$id->name}}' {{ old('name') }} ><br/>
    
     <h6>{{$errors->first('email')}}</h6> 
     <input type="email" class='form-control' name='email' placeholder='Enter email' value='{{$id->email}}' {{ old('email') }} ><br/>
    
     <h6>{{$errors->first('role')}}</h6> 
     <input type="role" class='form-control' name='role' placeholder='Enter role'  value='{{$id->role}}'  {{ old('role') }} ><br/>
<!--------upload img------->
     <div class="row py-2 col-12">
          <input type="file" name='image' id="image">
    </div>
    
     <button type='submit' class='btn btn-primary' enctype='multipart/form-data'>Save</button><br/>
     @csrf
     </div>
  </form>

</div>

@endsection