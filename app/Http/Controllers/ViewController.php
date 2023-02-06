<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showData() {
        $categories = new Category;
        $categories = Category::all();
        $products = new Product;
        $products = Product::where('is_online','1')->get();
        $products = Product::paginate(16);
        return view('layouts.frontend.index', compact('products','categories'));
    }

    public function productView(Request $request){
        $categories = new Category;
        $categories = Category::all();
        $product = Product::find($request->id);
        return view('layouts.frontend.view', compact('product','categories'));
    }

    public function viewByCategory(Request $request) {
                $category = Category::find($request->id);
                $products  = Product::where('category_id', $category->id)->where('is_online','1')->get();
                return view('layouts.frontend.category', compact('category','products'));
            }
}
