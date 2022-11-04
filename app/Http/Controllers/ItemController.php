<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Condition;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function itemsByCategory(Category $category){
        return view('items.index', ['items'=>$category->items, 'categories' => Category::all()]);
    }
    public function itemsByCondition(Condition $condition){
        return view('items.index', ['items'=>$condition->items, 'conditions' => Condition::all()]);
    }


    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items'=>$items, 'categories' => Category::all()])->with('items', $items);
    }



    public function create()
    {

        return view('items.create', ['conditions' => Condition::all(),'categories' => Category::all()]);
    }


    public function store(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'content' => 'required',
            'category_id' => 'required|numeric'
        ]);

        Auth::user()->items()->create($validated);
        return redirect()->route('items.index')->with('message', 'Item saqtaldy!    ');
    }


    public function show(Item $item)
    {
        return view('items.show', ['item'=>$item,'categories' => Category::all(), 'conditions' => Condition::all()]);
    }


    public function edit(Item $item)
    {
        return view('items.edit', ['item'=>$item, 'conditions' => Condition::all() ,'categories' => Category::all()]);
    }


    public function update(Request $request, Item $item)
    {
        $item->update([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
            'condition' => $request->input('condition'),
            'content' => $request->input('content'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect()->route('items.index')->with('message', 'Item update!    ');
    }


    public function destroy(Item $item)
    {
        $this->authorize('delete', $item);
        $item->delete();
        return redirect()->route('items.index');
    }


}
