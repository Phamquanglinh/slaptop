<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', '=', backpack_user()->id)->orderby('updated_at', 'DESC')->get();
        return view('frontend.cart', ['carts' => $carts]);
    }

    public function ajax($method, $id)
    {
        $item = Cart::where('id', '=', $id)->first();
        if ($method == 'plus') {
            $quantity = ($item->quantity) + 1;
        } else {
            if ($item->quantity > 1) {
                $quantity = ($item->quantity) - 1;
            }
        }
        Cart::where('id', '=', $id)->update(['quantity' => $quantity]);
        return $quantity;
    }

    public function addToCart($method, $product, $quantity)
    {
        if (!empty(backpack_user()->id)) {
            $checking = 1;
            $carts = Cart::where('product_id', '=', $product)->get();
            foreach ($carts as $cart) {
                if ($cart->order_id == null) {
                    if ($cart->user_id == backpack_user()->id) {
                        Cart::where('id', '=', $cart->id)->update(['quantity' => $quantity]);
                        $checking = 0;
                    }
                }
            }
            if ($checking == 1) {
                Cart::create(['product_id' => $product, 'quantity' => $quantity, 'user_id' => backpack_user()->id]);
            }
            if ($method == 'addCart') {
                return redirect()->back()->with('status', 'Đã thêm giỏ hàng');
            } else {
                return redirect('/cart');
            }
        }else{
            return  redirect('/admin/login');
        }

    }

//       if(! Cart::where('product_id','=',$product,'and','order_id','=',null)->update(['quantity'=>$quantity+old('quantity')])){
//           Cart::create(['product_id'=>$product,'quantity'=>$quantity,'user_id'=>backpack_user()->id]);
//       }


    public function removeItem($id)
    {
        Cart::destroy($id);
        return redirect()->back()->with('status', 'Xóa thành công !');
    }

}
