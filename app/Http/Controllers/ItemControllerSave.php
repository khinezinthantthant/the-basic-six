<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('inventory.index',["items" => Item::all()]);
    }

    public function create(){
        return view('inventory.create');
    }

    public function store(Request $request){
        // return $request;
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();

        return redirect()->route('item.index');
    }

    public function show($id){
        return view('inventory.show',["item" => Item::findOrFail($id)]);
    }
    public function destroy($id){
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }
    public function edit($id){

        return view('inventory.edit',["item" => Item::findOrFail($id)]);
    }
    public function update($id,Request $request){
        $item = Item::findOrFail($id);
       $item->name = $request->name;
       $item->price = $request->price;
       $item->stock = $request->stock;
       $item->update();
       return redirect()->route('item.index');
    }
}
