<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function api(){
        $curl = curl_init();
        curl_setopt_array($curl,[
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?channelId=UCvPPXcl5dJiBgRKGTA8inPA&part=snippet&order=date&key=AIzaSyDzpJ5dis1Tw0DZ6TFYaOZPf_d-dLPJnlk&maxResult=20",
            CURLOPT_RETURNTRANSFER => true,
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        $hasil = json_decode($response, true);
        // dd($hasil);
         return view('home', compact('hasil'));
        // 
    //     [
    //         CURLOPT_URL => "",),
    // ]),
        //          curl_setopt($curl, CURL_RETURNTRANS);
        // $result = curl_exec($crul);
        // curl_close($crul);
        // $hasil = json_decode(file_get_contents($result), true);
        // $video = $hasil['items'][0]['id']['videoId'];
        // return view('home', compact('video'));
    }
}
