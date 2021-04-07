<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id){
        $total =0;
        $order = Order::find($id);
        $carts=$order->carts()->get();
        foreach ($carts as $cart){
          $total += $cart->getProduct()->first()->price*$cart->quantity;
        }

        return view('frontend.order',['order'=>$order,'carts'=>$carts,'total'=>$total]) ;
    }
    public function save(Request $request){
        $user = User::where('email','=',$request->email)->first();
        $data = [
            'customers_id'=>$user->id,
            'total'=>0,
            'ship_address'=>$request->address.'/'.$request->telephone,
            'status'=>0,
            'payment_method'=>$request->pay,
        ];
        Order::create($data);
        $increment=Order::max('id');
        $customer = Customer::where('user_id','=',$user->id)->first();
        $carts = explode('-',$request->orders);
        unset($carts[(count($carts))-1]);
        foreach ($carts as $cartId){
            Cart::find($cartId)->update(['order_id'=>$increment]);
        }
        return redirect()->back()->with('status','Đã thêm vào đơn hàng');
    }
}
