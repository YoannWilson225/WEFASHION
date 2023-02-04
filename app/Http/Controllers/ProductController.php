<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $products = new Product;
        $products = Product::paginate(16);
        $categories = new Category;
        $categories = Category::all();
        return view('layouts.admin', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = new Product;
        $products = Product::paginate(16);
        $categories = new Category;
        $categories = Category::all();
        return view('layouts.add-product', compact('products','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product();
        if($request->hasfile('image'))
        {

         $file = $request->file('image');
         $ext = $file ->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('assets/uploads/',$filename);
         $products->image = $filename;
        }

        $products->category_id = $request->input('category_id');
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->prix = $request->input('prix');
        $products->taille = $request->input('taille');
        $products->is_online = $request->input('is_online') == TRUE ? '1' : '0';
        $products->etat = $request->input('etat');
        $products->reference = $request->input('reference');
        $products->save();
        return redirect('admin')->with('status',"Produit bien ajouté");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('layouts.edit-product', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
