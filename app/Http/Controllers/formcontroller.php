<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formpermohonan;
use App\Models\Menu;
class formcontroller extends Controller
{
    public function index(){
        $head = Menu::get();
        return view('formpermohonan', compact('head'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
         
            'nama' => 'required',
            'email' => 'required',
            'kategori' => 'required',
            'nomorhandphone' => 'required',
            'body' => 'required',
       
         
        ]);
        
      

     
        formpermohonan::create($validatedData);
        return redirect('/ppid');

    }
    public function admin(){
        $data = formpermohonan::get();
        return view('admin.laporan.laporanppid', compact('data'));
    }
}
