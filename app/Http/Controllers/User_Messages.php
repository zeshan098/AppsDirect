<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; 
use Auth;
use DB;

class User_Messages extends Controller
{
    public function show()
    {   
         
        $login_id = Auth::user()->id; 
        $messages = Message::where('user_id', '=', $login_id) 
                    ->orderBy('id', 'DESC')->get();  
        
        $user_info = Auth::user();
        return view('pages.user_msg', compact('messages', 'user_info'));
    }

    public function user_Reply(Request $request)
    { 
        Message::create([
            'user_id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'msg' => $request->input('msg'),
            'datetime' => now(),
            'status' => '1',
            'is_user_read' => 'send',
            'is_admin_read' => 'pending',
             
        ]);
        return redirect('/user_message');
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
        // dd("zzzz");
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
