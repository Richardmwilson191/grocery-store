<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cat_name' => 'required|unique:categories,category_nm',
            'desc' => 'required|max:255'
        ], [
            'cat_name.required' => 'The category name is required',
            'desc.required' => 'The description name is required',
            'cat_name.unique' => 'Already create that category'
        ]);

        $category = new Category();
        $category->category_nm = $request->input('cat_name');
        $category->description = $request->input('desc');
        $category->save();

        return redirect(route('category.index'));
    }

    public function edit($cat_id)
    {
        $category = Category::find($cat_id);
        // $category = Category::where('category_id', $cat_id)->get();

        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'cat_name' => 'required|unique:categories,category_nm',
            'desc' => 'required|max:255'
        ], [
            'cat_name.required' => 'The category name is required',
            'desc.required' => 'The description name is required',
            'cat_name.unique' => 'Already create that category'
        ]);

        $category = Category::find($request->cat_id);
        $category->category_nm = $request->input('cat_name');
        $category->description = $request->input('desc');
        $category->save();

        return redirect(route('category.index'));
    }

    public function show()
    {
        return view('categories.show');
    }
}
