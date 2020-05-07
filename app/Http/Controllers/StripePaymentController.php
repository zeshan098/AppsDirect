<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Order;
use Auth;
use Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe($id)
    {
        $order_id = $id;
        $order = Order::find($order_id);
        $loggedin_user_id = Auth::user()->id;

        if($order->user_id != $loggedin_user_id){
            abort(403, 'Unauthorized action.');
        }
        // dd($order);
        return view('pages.stripe', compact('order'));
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $order_id = $request->order_id;
        $order = Order::find($order_id);
        $loggedin_user_id = Auth::user()->id;

        if($order->user_id != $loggedin_user_id){
            abort(403, 'Unauthorized action.');
        }

        $amount_to_be_paid = $order->total_price;

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $amount_to_be_paid * 100,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Test payment from AppsDirect." 
        ]);
  
        Session::flash('success', 'Payment successful!');

        $order->is_paid = 1;
        $order->save();
          
        return back();
    }
}