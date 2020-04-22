<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Order extends Controller
{
    public function show()
    {
        $products = Product::all();
        
        return view('pages.order', compact('products'));
    }
}
