<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\Navbar;
use App\Models\Menu;
class MenuController extends Controller
{
    public function index($id){
        $curl = curl_init();
        curl_setopt_array($curl,[
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?channelId=UCkXmLjEr95LVtGuIm3l2dPg&order=date&part=snippet&maxResults=15&key=AIzaSyDzpJ5dis1Tw0DZ6TFYaOZPf_d-dLPJnlk",
            CURLOPT_RETURNTRANSFER => true,
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        $hasil = json_decode($response, true);
       
        $menu = Navbar::where('id', '=', $id)->get();
        $data = Submenu::with('navbar')->where('navbar_id', '=' , $id)->get();
        $head = Menu::get();
        // dd($data);
        return view('menu', compact('data', 'menu', 'head', 'hasil'));
    }
    
}
