<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\Menu;
use App\Models\pdfcomment;
use App\Models\Imageslider;
class PdfController extends Controller
{
    public function index($id){
        // $curl = curl_init();
        // curl_setopt_array($curl,[
        //     CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?channelId=UCeNLuV6q8QheoeguYtx-yjg&part=snippet&order=date&key=AIzaSyDzpJ5dis1Tw0DZ6TFYaOZPf_d-dLPJnlk&maxResults=50",
        //     CURLOPT_RETURNTRANSFER => true,
        // ]);
        // $response = curl_exec($curl);
        // curl_close($curl);
        // $hasil = json_decode($response, true);
        //
        $imagecount = Imageslider::count();
        $image = Imageslider::get();

        //tampilan
        $pdf = Submenu::get()->where('id', '=', $id);
        //comment
        $comment = pdfcomment::get()->where('submenu_id', '=', $id);
        $countcomment = $comment->count();
        //navbar
        $head = Menu::get();
        return view('pdfview',compact('pdf',  'comment', 'countcomment', 'head', 'imagecount', 'image'));
    }
    public function store(Request $request){
     
        $validatedData = $request->validate([
         
            'email' => 'required',
            'name' => 'required',
            'body' => 'required',
            'submenu_id' => 'required',
       
         
        ]);
        
      

     
        pdfcomment::create($validatedData);
        return back();
    }
}
