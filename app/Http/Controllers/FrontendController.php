<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    
    public function index()
    {
        return view('front');
    }

    public function allProducts()
    {
        $products =  Product::limit(10)->get();
        return response()->json($products);
    }
}
