<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $data = Carousel::get();
        return view('admin.carousel.index',compact('data'));
    }
    public function create()
    {
        return view('admin.carousel.create');
    }
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
         
            'image' => 'required|image|file|max:2048',
       
         
        ]);
 
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('image');
        }

     
        Carousel::create($validatedData);
        return redirect('/carousel');
    }
    public function destroy($id){
        $delete = Carousel::find($id);
        $delete->delete();
        return redirect('/carousel');
   
    }
    
}
