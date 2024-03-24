<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        if (request()->hasFile('file')) {
            $extension = request()->file('file')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('file')->storeAs('public/images/products', $filename);
        } else {
            return redirect()->back()->withInput()->with('error', 'No product image found. Please add one.');
        }
        Product::create([
            'title' => request()->title,
            'path' => $filename,
            'price' => request()->price,
            'desc' => request()->desc,
        ]);
        return redirect()->back();
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update($id)
    {
        $product = product::findOrFail($id);
        if (request()->hasFile('file')) {
            $extension = request()->file('file')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('file')->storeAs('public/images/products', $filename);
            $product->path = $filename;
        }
        $product->title->request()->title;
        $product->price = request()->price;
        $product->desc = request()->desc;
        $product->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }

    public function home(){
        $products = Product::all();
        return view('products',compact('products'));
    }

    public function search(){
        $keyword = request()->search;
        // return $keyword;
        $products = Product::where('title', 'LIKE', '%' . $keyword . '%')->get();
        return view('products', compact('products'));
    }
}
