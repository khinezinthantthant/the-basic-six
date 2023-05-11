<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inventory.index',["items" => Item::paginate(7)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $request->validate([
            'name' => "required|min:3|max:50|unique:items,name",
            'price' => "required|numeric|gte:50",
            "stock" => "required|numeric|gt:3"
        ]);

         // return $request;
         $item = new Item();
         $item->name = $request->name;
         $item->price = $request->price;
         $item->stock = $request->stock; 
         $item->save();

         return redirect()->route('item.index')->with("status","Item Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('inventory.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('inventory.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->update();
        return redirect()->route('item.index')->with("status","Item Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->back()->with('status',"Item Deleted Successfully");
    }
}
