<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; 
use Auth;
use DB;
use Mail;

class User_Messages extends Controller
{
     

    public function user_reply(Request $request)
    { 
        Message::create([
            'user_id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'msg' => $request->input('msg'),
            'datetime' => now(),
            'status' => '1',
            'order_id' => $request->input('order_id'),
            'is_user_read' => 'send',
            'is_admin_read' => 'pending',
             
        ]);
        $order_a = $request->input('order_id');
        
        return redirect()->route('view_order', $order_a);
    }

    public function update_status(Request $request)
    { 
        $update_Status = $request->get('doc_reply');
        $upate_read_Status = DB::table('messages')->where('id', $update_Status)
                             ->update(['status'=> '0' ]);
        return redirect('admin/messages');
    }

     


    public function admin_reply(Request $request, $id)
    { 
         
        Message::create([
            'user_id' => $id,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'msg' => $request->input('msg'),
            'datetime' => now(),
            'status' => '0',
            'is_user_read' => 'pending',
            'is_admin_read' => 'send',
             
        ]);
        return redirect('/admin/messages');
    }

    
}
