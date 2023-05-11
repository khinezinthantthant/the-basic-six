@extends('layouts.master')

@section('title')
    Create Category
@endsection


@section('content')
    <h2>Create Category</h2>

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label class=" form-label">Title</label>
            <input type="text" class=" form-control @error('title') is-invalid @enderror" name="title">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Description</label>
            <input type="text" class=" form-control @error('description') is-invalid @enderror" name="description">
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary">Create Category</button>
    </form>

@endsection
