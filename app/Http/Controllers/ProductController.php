<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function productlist(){

    $products = Product::all();

    return view('products', ['products' => $products]);
    }
}
