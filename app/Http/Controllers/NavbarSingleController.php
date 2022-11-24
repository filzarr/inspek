<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\Navbar;
use App\Models\Menu;
use App\Models\Imageslider;
class NavbarSingleController extends Controller
{
    //
    public function index($id){
     
        $imagecount = Imageslider::count();
        $image = Imageslider::get();

        
        $data = Submenu::with('navbar')->where('navbar_id', '=' , $id)->get();
        $head = Menu::get();
        
        $post = Navbar::where('id', '=', $id)->get();
        
         
        // dd($data);
        return view('single', compact('data', 'post', 'head', 'image', 'imagecount'));   # code...
        
    }
}
