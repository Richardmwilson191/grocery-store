@extends('layouts.navigation')

@section('title')
    Grocery Store::Categories
@endsection

@section('content')
    <h1>Categories</h1>

    <a href="{{ route('category.create') }}"><button>Create Category</button></a>

    <table border='1' cellspacing='0' cellpadding='5'>
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->category_nm }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('category.show', $category->category_id) }}"><button>View</button></a>
                        <a href="{{ route('category.edit', $category->category_id) }}"><button>Edit</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
