<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('product.index', compact(['products']));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|unique:products,product_nm',
        ]);

        $product = new Product();
        $product->product_nm = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->cost = $request->input('cost');
        $product->is_available = $request->input('is_available');
        $product->save();

        return redirect(route('product.index'));
    }

    public function edit()
    {
        return view('product.edit');
    }

    public function update()
    {
        return view('product.update');
    }

    public function show()
    {
        return view('product.show');
    }
}
