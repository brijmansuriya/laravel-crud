<?php

namespace App\Http\Controllers;
use App\articles;
use Illuminate\Http\Request;

class insert extends Controller
{
   public function store(Request $req)
    {

        $articles=new articles();
        $articles->name=$req->input('fname');
        $articles->pass=$req->input('lname');
        $articles->save();
          return redirect('/show'); 
    }
    public function show(Request $req){
    // $data=articles::orderBy('name','asc')->get();
    // $data=articles::orderBy('name')->get();
    // $data=articles::where('name','brij')->get();    
       $data=articles:: all();
      return view('show',['data'=>$data]);  
    }

    public function update($id,Request $req){
       
      $data=articles::where('id',$id)->first(); 
      
      return view('update',['data'=>$data]); 

    }
    public function update1($id,Request $req){
       
      // $data=articles::where('id',$id)->first(); 
      // return view('update',['data'=>$data]);

      $articles= articles::find($id);
      $articles->name=$req->input('fname');
      $articles->pass=$req->input('lname');
      $articles->save();
        return redirect('/show');  

    }
    
    public function delete(Request $req,$id)
    {
            //    $data=articles:: all();
            //   return view('show',['data'=>$data]);
           
            $user = articles::where('id', $id)->firstorfail()->delete(); 
            return redirect('/show');
    }
}
