@extends('layouts/app')

@section('content')
<div class='container col-12'>

     <h5 style='border-bottom:2px solid black'>
          Employee List | 
          @can('create',App\Employee::class)
           <a href="add" class='btn btn-primary' style='color:black'>Add Employee</a>
          @endcan
    </h5> 
   
    <div class="row col-12 justify-content-center"> 
    @foreach($employee as $i) 
        <div class="row col-4 justify-content-center">{{$i->id}}</div>
        <div class="row col-4 justify-content-center" >
            　<a href='profile/{{$i->id}}'>
                {{$i->name}}
              </a>
        </div>
        <div class="row col-4 justify-content-center" >{{$i->role}}</div>
    @endforeach  
        <div class="row">
           <div class="col-12 d-flex justify-center">
              {{$employee->links()}}
           </div>
        </div>
    </div>
</div>
@endsection