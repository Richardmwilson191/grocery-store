@extends('layouts.navigation')

@section('title')
    Grocery Store::Edit Category
@endsection

@section('content')
    <h1>Edit Category</h1>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form action="{{ route('category.update') }}" method="post">
        @csrf
        <label for="cat_name">Category Name</label>
        <input type="text" name="cat_name" id="" value="{{ $category->category_nm }}">
        <label for="desc">Description</label>
        <input type="text" name="desc" id="" value="{{ $category->description }}">
        <input type="hidden" name="cat_id" id="" value="{{ $category->category_id }}">
        <input type="submit" value="Submit">
    </form>
@endsection
