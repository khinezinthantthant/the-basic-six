@extends('layouts.master')

@section('title')
    Edit Item
@endsection


@section('content')
    <h2>Edit Item</h2>

    <form action="{{ route('item.update',$item->id) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group mb-3">
            <label class=" form-label">Name</label>
            <input type="text" value="{{ old("name",$item->name) }}" class=" form-control @error('name') is-invalid @enderror" name="name">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Price</label>
            <input type="number" value="{{ old("price",$item->price) }}" class=" form-control @error('price') is-invalid @enderror" name="price">
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Stock</label>
            <input type="number" value="{{ old("stock",$item->stock) }}" class=" form-control @error('stock') is-invalid @enderror" name="stock">
            @error('stock')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Update Item</button>
    </form>

@endsection
