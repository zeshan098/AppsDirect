<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class Checkout extends Controller
{
    public function show($id)
    {
        $order = Order::find($id);
        return view('pages.checkout', compact('order'));
    }
}
