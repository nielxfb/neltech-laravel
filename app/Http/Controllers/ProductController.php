<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('app', compact('products', 'categories'));
    }

    public function getByCategory(Request $request)
    {
        $selected = $request->input('category');
        if (empty($selected)) {
            return redirect('/')->withErrors(['category' => 'Please select at least one category']);
        }

        $products = Product::whereIn('category_id', $selected)->get();
        $categories = Category::all();
        return (view('app', compact('products', 'categories')));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('name', 'like', "%$search%")->get();
        $categories = Category::all();
        return view('app', compact('products', 'categories'));
    }
}
