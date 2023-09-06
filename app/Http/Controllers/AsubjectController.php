<?php

namespace App\Http\Controllers;

use App\Models\Asubject;
use Illuminate\Http\Request;

class AsubjectController extends Controller
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
        
        
      $addAsubject=Asubject::create([
    'name'=>$r->name,
    
    
    
        
    ]);
    return redirect()->route('viewAsubject');
}



    public function view(){
        $viewAll=Asubject::all();
        return view('viewAsubject')->with('asubjects',$viewAll);
    }
    
    public function delete($id){
        $deleteAsubject=Asubject::find($id);
        $deleteAsubject->delete();
        return redirect()->route('viewAsubject');
    }

    public function show(){
        $viewAll=Asubject::all();
        return view('showAsubject')->with('asubjects',$viewAll);
    }

    public function showDetail($id){
        $viewAll=Asubject::all()->where('id',$id);
        return view('showAsubjectDetail')->with('asubjects',$viewAll);
    }

    public function edit($id){
   
        $asubjects =Asubject::all()->where('id',$id);
        
        
        return view('editAsubject')->with('asubjects',$asubjects);
    }

  

    public function update(){
        $r=request();
        $asubjects =Asubject::find($r->ID);        
        if($r->file('image')!=''){
            $image=$r->file('image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $asubjects->image=$imageName;
            }         
        $asubjects->name=$r->name;
        $asubjects->save(); //run the SQL update statment
        return redirect()->route('viewAsubject');

        
    }
}
