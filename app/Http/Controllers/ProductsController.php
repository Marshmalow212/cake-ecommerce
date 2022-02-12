<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\FileUpload;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        // $categories = Category::all();
        // dd($products);
        return view('components.backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('components.backend.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileuploadobj = new FileUpload();
        // dd($request->all());
        $product = new Products($request->all());
        if(!isset($request->is_active))$product->is_active = 0;
        if(!isset($request->is_draft))$product->is_draft = 0;
        $picture = $fileuploadobj->fileUpload($request->file('picture'),'Product');
        $product->picture = $picture;
        $product->save();
        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($products->title);
        $products = Products::where('id',$id)->first();
        return view('components.backend.products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::where('id',$id)->first();
        $categories = Category::all();
        return view('components.backend.products.edit',compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Products::where('id',$id)->first();
        $fileuploadobj = new FileUpload();
        $picture = $fileuploadobj->fileUpload($request->file('picture'),'Product');
        if(empty($picture))$picture = $products->picture;
        // dd($request->all());
        $products->fill($request->all());
        if(!isset($request->is_active))$products->is_active = 0;
        if(!isset($request->is_draft))$products->is_draft = 0;
        $products->picture = $picture;
        $products->save();
        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::where('id',$id)->first();
        $products->delete();
        return redirect()->route('products.index');

    }
}
