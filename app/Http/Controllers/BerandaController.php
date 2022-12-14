<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Navbar;
use App\Models\Carousel;
use App\Models\Post;
use App\Models\Imageslider;
use App\Models\Datapegawai;
use Illuminate\Auth\Access\Response;
class BerandaController extends Controller
{
    public function api(){
        //youtube
        // $curl = curl_init();
        // curl_setopt_array($curl,[
        //     CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?channelId=UCeNLuV6q8QheoeguYtx-yjg&order=date&part=snippet&maxResults=15&key=AIzaSyDzpJ5dis1Tw0DZ6TFYaOZPf_d-dLPJnlk",
        //     CURLOPT_RETURNTRANSFER => true,
        // ]);
        // $response = curl_exec($curl);
        // curl_close($curl);
        // $hasil = json_decode($response, true);


        //pdid, saber punglis,   
        //image slider
        $image = Imageslider::get();

 
        // berita populer
        $beritapopuler = Post::Orderby('reads','desc')->take(5)->get();
        // navbar
        $head = Menu::get();
        // carousel 
        $carousel = Carousel::Orderby('created_at', 'desc')->get();
        // post
        $posts = Post::Orderby('created_at', 'desc')->paginate(5);
        //datapegawai
        $datapegawai = Datapegawai::get();
    
         return view('home', compact('head', 'carousel', 'posts', 'beritapopuler', 'datapegawai', 'image'));
        
    }
    public function pdf($id){
        //pdf download
        $pdf = Submenu::find($id);
        $file = "storage/$pdf->file";
      
        return response()->download($file);
    }
}
