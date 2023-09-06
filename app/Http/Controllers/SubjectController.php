<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
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
        
        
      $addSubject=Subject::create([
    'name'=>$r->name,
    
    
    
        
    ]);
    return redirect()->route('viewSubject');
}

public function viewa(){
    $viewAll=Subject::all();
    return view('viewAsubject')->with('subjects',$viewAll);
}

    public function view(){
        $viewAll=Subject::all();
        return view('viewSubject')->with('subjects',$viewAll);
    }
    
    public function delete($id){
        $deleteSubject=Subject::find($id);
        $deleteSubject->delete();
        return redirect()->route('viewSubject');
    }

    public function show(){
        $viewAll=Subject::all();
        return view('showSubject')->with('subjects',$viewAll);
    }

    public function showDetail($id){
        $viewAll=Subject::all()->where('id',$id);
        return view('showSubjectDetail')->with('subjects',$viewAll);
    }

    public function edit($id){
   
        $subjects =Subject::all()->where('id',$id);
        
        
        return view('editSubject')->with('subjects',$subjects);
    }

  

    public function update(){
        $r=request();
        $subjects =Subject::find($r->ID);        
        if($r->file('image')!=''){
            $image=$r->file('image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $subjects->image=$imageName;
            }         
        $subjects->name=$r->name;
        $subjects->save(); //run the SQL update statment
        return redirect()->route('viewSubject');

        
    }
}
