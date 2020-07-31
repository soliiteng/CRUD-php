<?php

namespace App\Http\Controllers;
 
use App\Providers;
use App\Listener\myListener;
use App\Employee;
use App\Events\myEvent;
//use App\Providers\pre event;	
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class employeeController extends Controller
{
                                        //validation
    private function validForm()
    {  
            return
                request()->validate([
                'name'=>'required',
                'email'=>'required|email',
                'role'=>'required|min:3',
                'image'=>'sometimes|file|image|max:5000',
                ]);
            //      function (){
            //           if(request()->hasFile('image')){
            //               request()->validate([
            //                  'image'=>'file|image',
            //               ]);
            //           }
            //       }
            //   );
            
    }
    
    private function storeImage($employee)
    {
            if(request()->has('image'))
            {
                    $employee->update
                    ([ 
                   'image'=>request()->image->store('uploads','public'),
                    ]);
            };
    }
    
               
                                                   
    public function store()                                 //save 
    {     
        //$this->authorize('create',Employee::calss);
        $employee=Employee::create($this->validForm());

        $this->storeImage($employee);
        
        return redirect('list');
    }
    
    
    public function show(Employee $id){              //show data
       
        return view('profile',compact("id"));
    }
    
    
    public function index()                          //getting data
    {
        $employee=Employee::paginate(4); 
        return view('list',compact('employee'));
    }
    
    
    public function update(Employee $id)               //update
    {   
        $id->update($this->validForm());
        $x=$id->id;
        return redirect('profile/'.$x);
    }
    
    public function destroy(Employee $id)              //delete
    {  
        $id->delete();
        
        return redirect('list');
    }
}
