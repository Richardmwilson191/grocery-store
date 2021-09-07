@extends('layouts.navigation')

@section('title')
    Grocery Store::Product List
@endsection

@section('content')
    <h1>Product List</h1>

    <a href="{{ route('product.create') }}"><button>Create Product</button></a>

    <table border='1' cellspacing='0' cellpadding='5'>
        <thead>
            <tr>
                <td>Name</td>
                <td>Category Id</td>
                <td>Cost</td>
                <td>Is Available</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_nm }}</td>
                    <td>{{ $product->category->category_nm }}</td>
                    <td>{{ $product->cost }}</td>
                    <td>{{ $product->is_available }}</td>
                    <td>
                        <a href="{{ route('product.show', $product->product_id) }}"><button>View</button></a>
                        <a href="{{ route('product.edit', $product->product_id) }}"><button>Edit</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
