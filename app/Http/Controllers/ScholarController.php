<?php

namespace App\Http\Controllers;

use App\Models\Scholar;
use Illuminate\Http\Request;

class ScholarController extends Controller
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
        
        
      $addScholar=Scholar::create([
    'name'=>$r->name,
    'scholarid'=>$r->scholarid,
    'started'=>$r->started,
    'attend' => $r -> attend,
    
    
        
    ]);
    return redirect()->route('viewScholar');
}

public function viewa(){
    $viewAll=Scholar::all();
    return view('viewAscholar')->with('scholars',$viewAll);
}

    public function view(){
        $viewAll=Scholar::all();
        return view('viewScholar')->with('scholars',$viewAll);
    }
    
    public function delete($id){
        $deleteScholar=Scholar::find($id);
        $deleteScholar->delete();
        return redirect()->route('viewScholar');
    }

    public function show(){
        $viewAll=Scholar::all();
        return view('showScholar')->with('scholars',$viewAll);
    }

    public function showDetail($id){
        $viewAll=Scholar::all()->where('id',$id);
        return view('showScholarDetail')->with('scholars',$viewAll);
    }

    public function edit($id){
   
        $scholars =Scholar::all()->where('id',$id);
        
        
        return view('editScholar')->with('scholars',$scholars);
    }

  

    public function update(){
        $r=request();
        $scholars =Scholar::find($r->ID);        
        if($r->file('image')!=''){
            $image=$r->file('image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $scholars->image=$imageName;
            }         
        $scholars->name=$r->name;
        $scholars->scholarid=$r->scholarid;
        $scholars->started=$r->started;
        $scholars->attend=$r->attend;
        $scholars->save(); //run the SQL update statment
        return redirect()->route('viewScholar');

        
    }

    
}


