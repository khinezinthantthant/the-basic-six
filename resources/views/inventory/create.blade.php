@extends('layouts.master')

@section('title')
    Create Item
@endsection


@section('content')
    <h2>Create Item</h2>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('item.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label class=" form-label">Name</label>
            <input type="text"
             value="{{ old('name') }}"
            class=" form-control @error('name') is-invalid @enderror" name="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Price</label>
            <input
            type="number"
            value="{{ old('price') }}"
             class=" form-control @error('price') is-invalid @enderror" name="price">
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Stock</label>
            <input type="number"
            value="{{ old('stock') }}"
             class=" form-control @error('stock') is-invalid @enderror" name="stock">
            @error('stock')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Create Item</button>
    </form>

@endsection
