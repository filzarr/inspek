<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Laporanpungli;
class SaberpungliController extends Controller
{
    public function index(){
        $head = Menu::get();
        return view('saberpungli', compact('head'));
    }
    public function admin(){
        $data = Laporanpungli::get();
        return view('admin.laporan.laporansaber', compact('data'));
    }
    public function form(){
        $head = Menu::get();
        return view('formpungli', compact('head'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
         
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'nomorhanphone' => 'required',
            'aduan' => 'required',
       
         
        ]);
        
      

     
        Laporanpungli::create($validatedData);
        return redirect('/saberpungli');

    }
}
