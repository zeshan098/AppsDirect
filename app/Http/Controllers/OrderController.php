<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Auth;

class OrderController extends Controller
{
    public function show()
    {
        $products = Product::all();
        
        return view('pages.order', compact('products'));
    }

    public function store(Request $request)
    {
        $fileName = time().'.'.$request->project_document[0]->extension();  
   
        $request->project_document[0]->move(public_path('uploads'), $fileName);

        $data = $request->except(['_token']);
        $data["user_id"] = Auth::user()->id;
        $data["project_document"] = $fileName;

        // dd($data);
        
        $order = new Order($data);
        $order->save();
        return redirect()->route('checkout', $order->id);
    }
}
