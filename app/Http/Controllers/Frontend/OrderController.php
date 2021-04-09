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
    public function formatMoney($money)
    {
        //format money function
        $formatMoney = false;
        while (!$formatMoney) {
            $replace = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $money);
            if ($replace !== $money) {
                $money = $replace;
            } else {
                $formatMoney = true;
            }
        }
        return $money;
    }
    public function show($id){
        $total =0;
        $order = Order::find($id);
        $carts=$order->carts()->get();
        foreach ($carts as $cart){
          $total += $cart->getProduct()->first()->price*$cart->quantity;
        }

        return view('vendor.order',['order'=>$order,'carts'=>$carts,'total'=>$total]) ;
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
    public function historyShow(){
        $itemOfOrder=null;
        $data=null;
        $orders = Order::where('customers_id','=',backpack_user()->id)->get();
        foreach ($orders as $key => $order){
            $data[$key]['id'] = $order->id;
            $itemOfOrder[$key]=$order->carts()->get();
            foreach ($itemOfOrder[$key] as $index => $cart){
                $product = $cart->getProduct()->first();

                    $data[$key][$index]['name']=$product->name;
                    $data[$key][$index]['quantity']=$cart->quantity;
                    $data[$key][$index]['slug']=$product->slug;
                    $data[$key][$index]['image']=$product->cover_image;
                    $data[$key][$index]['price']=$this->formatMoney($product->price);
                    $data[$key][$index]['old_price']=$this->formatMoney($product->old_price);

            }
        }
        return view('frontend.order',['data'=>$data]);
    }
}
