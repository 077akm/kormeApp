<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\CollectionModify;

class CommentController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'text' => 'required',
            'item_id' => 'required|numeric',
        ]);
        Auth::user()->comments()->create($validated);
        return back()->with('message', __('error.cmmstr'));
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
        return redirect()->route('items.show', $comment->item_id)->with('message', __('error.cmmupd'));
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->route('items.show', $comment->item_id)->with('message', __('error.cmmdstr'));
    }
}
