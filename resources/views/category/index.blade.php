@extends('layouts.master')

@section('title')
    Category List
@endsection


@section('content')
    <h2>Category List</h2>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Description</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a class=" btn btn-sm btn-outline-primary" href="{{ route('category.show', $category->id) }}">
                            Detail
                        </a>
                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                        <form class=" d-inline-block" action="{{ route('category.destroy',$category->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        <p>There is no record</p>
                        <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Create Category</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
