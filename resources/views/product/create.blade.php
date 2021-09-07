@extends('layouts.navigation')

@section('title')
    Grocery Store::Create Product
@endsection

@section('content')
    <h1>Create Product</h1>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label for="product_name">Product Name</label>
        <input type="text" name="product_name" id="">
        <label for="category">Category</label>
        <select name="category_id" id="">
            @foreach ($categories as $category)
                <option value="{{ $category->category_id }}">{{ $category->category_nm }}</option>
            @endforeach
        </select>
        <label for="cost">Cost</label>
        <input type="number" name="cost" id="">
        <label for="is_available">Is Available</label>
        <select name="is_available" id="">
            <option value="1" selected>Yes</option>
            <option value="0">No</option>
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection
