<?php

namespace App\Http\Controllers;

use App\Models\English;
use Illuminate\Http\Request;

class EnglishController extends Controller
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
        
        
      $addEnglish=English::create([
    'name'=>$r->name,
    'englishid'=>$r->englishid,
    'started'=>$r->started,
    'attend' => $r -> attend,
    
    
        
    ]);
    return redirect()->route('viewEnglish');
}

public function viewa(){
    $viewAll=English::all();
    return view('viewAenglish')->with('englishs',$viewAll);
}



    public function view(){
        $viewAll=English::all();
        return view('viewEnglish')->with('englishs',$viewAll);
    }
    
    public function delete($id){
        $deleteEnglish=English::find($id);
        $deleteEnglish->delete();
        return redirect()->route('viewEnglish');
    }

    public function show(){
        $viewAll=English::all();
        return view('showEnglish')->with('englishs',$viewAll);
    }

    public function showDetail($id){
        $viewAll=English::all()->where('id',$id);
        return view('showEnglishDetail')->with('englishs',$viewAll);
    }

    public function edit($id){
   
        $englishs =English::all()->where('id',$id);
        
        
        return view('editEnglish')->with('englishs',$englishs);
    }

  

    public function update(){
        $r=request();
        $englishs =English::find($r->ID);        
        if($r->file('image')!=''){
            $image=$r->file('image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $englishs->image=$imageName;
            }         
        $englishs->name=$r->name;
        $englishs->englishid=$r->englishid;
        $englishs->started=$r->started;
        $englishs->attend=$r->attend;
        $englishs->save(); //run the SQL update statment
        return redirect()->route('viewEnglish');

        
    }
}
