<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
   public function index()
    {
       
       $product=Product::all();
        return view('Frontend/Pages/Praducts',compact('product'));
    }
}
