<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datapegawai;
class DataPegawaiController extends Controller
{
    public function index(){
        $data =  Datapegawai::get();
        return view('admin.datapegawai.index', compact('data'));
    }
    public function create(){
        return view('admin.datapegawai.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
         
            'nama' => 'required',
            'jumlah' => 'required',
       
         
        ]);
        
      

     
        Datapegawai::create($validatedData);
        return redirect('/datapegawai');
    }
    public function destroy($id){
        $delete = Datapegawai::find($id);
        $delete->delete();
        return redirect('/datapegawai');
   
    }
}
