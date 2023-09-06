<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        
        
      $addContactUs=ContactUs::create([
    'name'=>$r->name,
    'studentid'=>$r->studentid,
    'comment'=>$r->comment,
    
    
    
        
    ]);
    return redirect()->route('viewContactUs');
}

public function viewa(){
    $viewAll=ContactUs::all();
    return view('viewContactUs')->with('contactUs',$viewAll);
}

    public function view(){
        $viewAll=ContactUs::all();
        return view('viewContactUs')->with('contactUs',$viewAll);
    }
    
    public function delete($id){
        $deleteContactUs=ContactUs::find($id);
        $deleteContactUs->delete();
        return redirect()->route('viewContactUs');
    }

    public function show(){
        $viewAll=ContactUs::all();
        return view('showContactUs')->with('contactUs',$viewAll);
    }

    public function showDetail($id){
        $viewAll=ContactUs::all()->where('id',$id);
        return view('showContactUsDetail')->with('contactUs',$viewAll);
    }

    public function edit($id){
   
        $contactUss =ContactUs::all()->where('id',$id);
        
        
        return view('editContactUs')->with('contactUs',$contactUss);
    }

  

    public function update(){
        $r=request();
        $contactUss =ContactUs::find($r->ID);        
        if($r->file('image')!=''){
            $image=$r->file('image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $contactUss->image=$imageName;
            }         
        $contactUss->name=$r->name;
        $contactUss->studentid=$r->studentid;
        $contactUss->comment=$r->comment;
        $contactUss->save(); //run the SQL update statment
        return redirect()->route('viewContactUs');

        
    }
}
