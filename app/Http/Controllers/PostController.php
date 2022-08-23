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
        $input = $request->all();
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        Post::create($input);
        return redirect()->route('admin.post.index');
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
}
