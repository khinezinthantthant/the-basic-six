@extends('layouts.master')

@section('title')
    Edit Category
@endsection


@section('content')
    <h2>Edit Category</h2>

    <form action="{{ route('category.update',$category->id) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group mb-3">
            <label class=" form-label">Title</label>
            <input type="text" value="{{ $category->title }}" class=" form-control" name="title">
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Description</label>
            <input type="text" value="{{ $category->description }}" class=" form-control" name="description">
        </div>

        <button class="btn btn-primary">Update Category</button>
    </form>

@endsection
