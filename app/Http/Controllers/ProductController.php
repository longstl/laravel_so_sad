<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list_Product = Product::all();
        return View('admin.product.list')
            ->with('list_Product', $list_Product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $product = new Product();
        $product->name = Input::get('name');
        $product->description = Input::get('description');
        $product->image = Input::get('images');
        $product->price = Input::get('price');
        $product->save();
        return redirect('/admin/product');
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
        $product = Product::find($id);
        if ($product == null){
            return view('404');
        }
        return View('admin.product.show')
            ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        if ($product == null){
            return view('404');
        }
        return View('admin.product.edit')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $product = Product::find($id);
        if ($product == null){
            return view('404');
        }
        $product->name = Input::get('name');
        $product->description = Input::get('description');
        $product->image = Input::get('images');
        $product->price = Input::get('price');
        $product->save();
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
        $product = Product::find($id);
        if ($product == null){
            return response('Product not found or has been deleted!', 404);
        }
        $product->delete();
        return response('Deleted', 200);
    }
}
