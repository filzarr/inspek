<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\pdfcomment;

class CommentController extends Controller
{
    public function index(){
        return view('admin.comment.index', [
            'comment' => Comment::get(),
            'pdfcomment' => pdfcomment::get(),
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'body'=>'required',
        ]);
        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        return back();
    }
    public function destroy($id){
        $delete = Comment::find($id);
        $delete->delete();
        return redirect('/comment');
    }
    public function delete($id){
        $delete = pdfcomment::find($id);
        $delete->delete();
        return redirect('/comment');
    }
}

