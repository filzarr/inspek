<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Imageslider;
use Illuminate\Database\Eloquent\Collection;
class SinglePostController extends Controller
{
    public function incrementReadCount() {
        $this->reads++;
        return $this->save();
    }
    public function index($id){
          //youtube
        //   $curl = curl_init();
        //   curl_setopt_array($curl,[
        //       CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?channelId=UCeNLuV6q8QheoeguYtx-yjg&part=snippet&order=date&key=AIzaSyDzpJ5dis1Tw0DZ6TFYaOZPf_d-dLPJnlk&maxResults=50",
        //       CURLOPT_RETURNTRANSFER => true,
        //   ]);
        //   $response = curl_exec($curl);
        //   curl_close($curl);
        //   $hasil = json_decode($response, true);
          //image
          $imagecount = Imageslider::count();
          $image = Imageslider::get();
  
          //post
          $post = Post::get()->where('id', '=', $id);

         //comment
         $comment = Comment::get()->where('post_id', '=', $id);
         $countcomment = $comment->count();
          // navbar
          $head = Menu::get();
        return view('post', compact( 'head', 'post', 'comment', 'countcomment','image', 'imagecount'));
    }
    public function store(Request $request){
     
        $validatedData = $request->validate([
         
            'email' => 'required',
            'name' => 'required',
            'body' => 'required',
            'post_id' => 'required',
       
         
        ]);
        
      

     
        Comment::create($validatedData);
        return back();
    }
 
}