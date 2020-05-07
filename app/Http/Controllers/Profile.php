<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use DB;
use Illuminate\Support\Facades\Auth;

class Profile extends Controller
{
    public function show()
    {
        $userid = Auth::user()->id; 
        $total_order = DB::select(" SELECT count(id) as total FROM `orders` WHERE user_id = '$userid' ");
        $complete_order = DB::select(" SELECT count(is_fulfilled) as complete FROM `orders` WHERE is_fulfilled = '1' 
                                      and user_id = '$userid' ");
        $close_project = DB::select(" SELECT count(is_fulfilled) as closed FROM `orders` WHERE is_fulfilled = '0' 
                                      and user_id = '$userid' ");
        $user_order = DB::select(" SELECT  DATE_FORMAT(created_at,'%d/%m/%Y') AS niceDate , project_title, notes, is_fulfilled as status FROM `orders`  
                                  where user_id = '$userid' " );  
      
        return view('pages.profile')
        ->with('user_order', $user_order)
        ->with('complete_order', $complete_order)
        ->with('close_project', $close_project)
        ->with('total_order', $total_order);
    }
}
