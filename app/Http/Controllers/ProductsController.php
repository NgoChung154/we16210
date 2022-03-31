<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        $products = Products::all();
        $productsGet = Products::select('*')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('product.index', ['products' => $productsGet]);
    }


    public function delete(Products $pro)
    {
        if ($pro->delete()) {
            return redirect()->route('products.index');
        }
        $productDelete = Products::destroy($id);
        if ($productDelete !== 0) {
            return redirect()->route('products.index');
        }
    }
}
