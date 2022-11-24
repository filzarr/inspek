<?php

namespace App\Http\Controllers;
// namespace App\Models;
use Illuminate\Http\Request;
use App\Models\Navbar;
use App\Models\Submenu;
use App\Models\Menu;
class NavbarController extends Controller
{
    public function index()
    {
        $data = Submenu::with('navbar')->get();
        $nav = Navbar::get();
        // dd($data);
        return view('admin.navbar.index',compact('data', 'nav'));
    }
    public function baru()
    {   $data = Navbar::get();
        return view('admin.navbar.submenu', compact('data'));
    }
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
         
            'submenu' => 'required',
            'file' => 'required|mimes:pdf',
            'navbar_id' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);
 
        if($request->file('file')){
            $validatedData['file'] = $request->file('file')->store('pdf');
        }

     
        Submenu::create($validatedData);
        return redirect('/navbar');
    }
    public function menu()
    {
        $data = Menu::get();
        return view('admin.navbar.createmenu', compact('data'));
    }
    public function storemenu(Request $request)
    {
       
        $validatedData = $request->validate([
         
            'menu' => 'required',
            'judul_id' => 'required'
         
        ]);
 
       

     
        Navbar::create($validatedData);
        return redirect('/navbar');
    }
    public function destroy($id){
        $delete = Submenu::find($id);
        $delete->delete();
        return redirect('/navbar');
   
    }
    public function singlenavbar(){
        $data = Menu::get();
        return view('admin.navbar.createmenusingle', compact('data'));
    }
    public function storesinglenavbar(Request $request){
        $validatedData = $request->validate([
         
            'menu' => 'required',
            'title' => 'required',
            'image' => 'required',
            'body' => 'required',
            'submenu' => 'required',
            'judul_id' => 'required',
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('image');
        }
        Navbar::create($validatedData);
        return redirect('/navbar');
    }
    public function hapus($id){
        $delete = Navbar::find($id);
        $delete->delete();
        return redirect('/navbar');
   
    }
}
