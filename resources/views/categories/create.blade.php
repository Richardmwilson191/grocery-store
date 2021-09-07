@extends('layouts.navigation')

@section('title')
    Grocery Store::Create Category
@endsection

@section('content')
    <h1>Create Category</h1>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <label for="cat_name">Category Name</label>
        <input type="text" name="cat_name" id="">
        <label for="desc">Description</label>
        <input type="text" name="desc" id="">
        <input type="submit" value="Submit">
    </form>
@endsection
