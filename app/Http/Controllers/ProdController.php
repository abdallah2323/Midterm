<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProdController extends Controller
{
    public function index(){
        return view('products.dashboard');
    }

    public function show(){
        $products = Product::all();
        return view('products.all_products', compact('products'));
    }

    public function add(){
        return view('products.create_product');
    }

    public function store(Request $req){
        $product = new Product();
        $product->Name = $req->product_name;
        $product->Category = $req->product_category;
        $product->Price = $req->product_price;
        $product->Quantity = $req->product_qty;
        $product->save();
        return redirect()->back();
    }

    public function destroy(Request $req){
        $product = Product::find($req->id);
        $product->delete();
        return redirect()->back();
    }

    public function edit($id){
        $product = Product::find($id);
        $products = Product::all();
        return view('products.edit', compact('product','products'));
    }

    public function update(Request $req){
        $product = Product::find($req->id);
        $product->Name = $req->product_name;
        $product->Category = $req->product_category;
        $product->Price = $req->product_price;
        $product->Quantity = $req->product_qty;
        $product->save();
        return redirect('/products');
    }
}
