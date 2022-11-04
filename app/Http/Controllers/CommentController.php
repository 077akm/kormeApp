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
            'item_id' => $request->item_id,
        ]);
        return redirect()->route('items.show',$request->item_id);
    }

    public function comments(Comment $comment){
        $comment=$comment->comment;
        return view('items.show', ['item'=>$comment,'comment'=>$comment,'categories' => Category::all()]);
    }

    public function show(Comment $comment){
        return view('items.show', ['comment'=>$comment]);
    }

    public function edit(Comment $comment){
        return view('comments.edit', ['comment'=>$comment]);
    }

    public function update(Request $request, Comment $comment){
        $comment->update([
            'text' => $request->input('text'),
        ]);
        return redirect()->route('items.show', $comment->item_id);
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->route('items.show', $comment->item_id);
    }
}
