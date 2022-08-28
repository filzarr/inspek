<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $delete = Post::find($id);
        $delete->delete();
        return redirect('/posts');
   
    }
    public function index()
    {
        $posts = Post::get();
        return view('admin.post.index',compact('posts'));
    }
    /**
     * Write Your Code..
     *
     * @return string
    */
    public function create()
    {
        return view('admin.post.create');
    }
    /**
     * Write Your Code..
     *
     * @return string
    */
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required|image|file|max:2048',
            'body' => 'required',
         
        ]);
 
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('image');
        }

     
        Post::create($validatedData);
        return redirect('/posts');
    }
    
    /**
     * Write Your Code..
     *
     * @return string
    */
    public function show($id)
    {
        
        $post = Post::find($id);
        return view('admin.post.show',compact('post'));
    }
    public function edit($id){
        $data = Post::findOrFail($id);
        // dd($data);
    return view('admin.post.edit', compact('data'));
}
    public function update(Request $request, $id){
        $data = Post::find($id)->update($request->all());
        return redirect('/posts');
 }
}
