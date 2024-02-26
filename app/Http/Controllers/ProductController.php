<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('products.index', ['products' => $products]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'product_name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $newProduct = Products::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Products $products){
        
    }

}
