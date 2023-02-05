<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $categories = new Category;
        $categories = Category::all();
        $products = Product::find($id);
        return view('layouts.edit-product', compact('products','categories'));
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

        $products = Product::find($id);
        if($request->hasfile('image'))
        {

            $path = 'assets/uploads/'.$products->image;
            if(File::exists($path))
            {
               File::delete($path);
            }

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
    return redirect('admin')->with('status',"Produit bien modifié");
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $path = 'assets/uploads/'.$products->image;
            if(File::exists($path))
            {
               File::delete($path);
            }
            $products->delete();
            return redirect('admin')->with('status',"Le produit à bien été supprimé");
    }
}


