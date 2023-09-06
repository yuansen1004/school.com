<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add(){
        $r=request();
        if($r->file('image')!=''){
           $image=$r->file('image');   
            $image->move('images',$image->getClientOriginalName());  
            $imageName=$image->getClientOriginalName(); 
        }
        else{
            $imageName="empty.jpg";
        }
        
        
      $addStudent=Student::create([
    'name'=>$r->name,
    'studentid'=>$r->studentid,
    
    
    
        
    ]);
    return redirect()->route('viewStudent');
}

   
    public function view(){
        $viewAll=Student::all();
        return view('viewStudent')->with('students',$viewAll);
    }
    
    public function delete($id){
        $deleteStudent=Student::find($id);
        $deleteStudent->delete();
        return redirect()->route('viewStudent');
    }

    public function show(){
        $viewAll=Student::all();
        return view('showStudent')->with('students',$viewAll);
    }

    public function showDetail($id){
        $viewAll=Student::all()->where('id',$id);
        return view('showStudentDetail')->with('students',$viewAll);
    }

    public function edit($id){
   
        $students =Student::all()->where('id',$id);
        
        
        return view('editStudent')->with('students',$students);
    }

  

    public function update(){
        $r=request();
        $students =Student::find($r->ID);        
        if($r->file('image')!=''){
            $image=$r->file('image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $students->image=$imageName;
            }         
        $students->name=$r->name;
        $students->studentid=$r->studentid;
        
        $students->save(); //run the SQL update statment
        return redirect()->route('viewStudent');

        
    }

    
}
