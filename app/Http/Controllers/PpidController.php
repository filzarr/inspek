<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppid;
use App\Models\Menu;
class PpidController extends Controller
{
    public function index(){
        $data = Ppid::get();
        
        return view('admin.ppid.index', compact('data'));
    }
    public function destroy($id){
        $delete = Ppid::find($id);
        $delete->delete();
        return redirect('/ppidadmin');
   
    }
    public function edit($id){
        $data = Post::findOrFail($id);
        // dd($data);
    return view('admin.ppid.edit', compact('data'));
    }
    public function update(Request $request, $id){
        $data = Ppid::find($id)->update($request->all());
        return redirect('/ppidadmin');
    }
    public function store(Request $request){
     
            $validatedData = $request->validate([
             
                'judul' => 'required',
                'pdf' => 'required|mimes:pdf',
                'kategori' => 'required',
                'tanggal' => 'required',
                'category' => 'required',
           
             
            ]);
            
          
    
         
            if($request->file('pdf')){
                $validatedData['pdf'] = $request->file('pdf')->store('pdf');
            }
    
         
            Ppid::create($validatedData);
            return redirect('/ppidadmin');
    }
    public function create(){
        return view('admin.ppid.create');
    }
    public function home(){
        $head = Menu::get();
        $informasiberkala = Ppid::where('category', 'informasi berkala')->get();
        $informasipublik = Ppid::where('category', 'informasi publik')->get();
        return view('ppid', compact('informasiberkala', 'informasipublik','head'));
    }
}
