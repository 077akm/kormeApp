<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use mysql_xdevapi\CollectionModify;

class CommentController extends Controller
{
    public function store(Request $request){
        Comment::create([
            'text' => $request->text,
            'post_id' => $request->post_id,
        ]);
        return redirect()->route('posts.show',$request->post_id);
    }

    public function comments(Comment $comment){
        $comment=$comment->comment;
        return view('posts.show', ['post'=>$comment,'comment'=>$comment,'categories' => Category::all()]);
    }

    public function show(Comment $comment){
        return view('posts.show', ['comment'=>$comment]);
    }

    public function edit(Comment $comment){
        return view('comments.edit', ['comment'=>$comment]);
    }

    public function update(Request $request, Comment $comment){
        $comment->update([
            'text' => $request->input('text'),
        ]);
        return redirect()->route('posts.show', $comment->post_id);
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->route('posts.show', $comment->post_id);
    }
}