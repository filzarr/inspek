<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use App\Models\Imageslider;
class ImagsliderController extends Controller
{
    public function index(){
        $data =  Imageslider::get();
        return view('admin.imageslider.index', compact('data'));
    }
    public function create(){
        return view('admin.imageslider.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
         
            'image' => 'required|image|file|max:2048',
           
       
         
        ]);
       
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('image');
          
        }
      

     
        Imageslider::create($validatedData);
        return redirect('/imageslider');
    }
    public function destroy($id){
        $delete = Imageslider::find($id);
        $delete->delete();
        return redirect('/imageslider');
   
    }
}
