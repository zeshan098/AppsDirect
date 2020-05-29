<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; 
use Auth;

class User_Messages extends Controller
{
    public function show()
    {   
         
        $login_id = Auth::user()->id; 
        $messages = Message::where('user_id', '=', $login_id) 
                    ->orderBy('id', 'ASC')->get();  
        
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
}
