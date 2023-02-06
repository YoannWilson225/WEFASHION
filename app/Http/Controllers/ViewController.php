<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showData() {
        $products = new Product;
        $products = Product::where('is_online','1')->take(15)->get();
        $products = Product::paginate(16);
        $categories = new Category;
        $categories = Category::all();
        return view('home', compact('products','categories'));
    }

    public function productView(Request $request){
        $product = Product::find($request->id);
        return view('layouts.view', compact('product'));
    }
}
