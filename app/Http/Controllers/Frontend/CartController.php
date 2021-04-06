<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::where('user_id','=',backpack_user()->id)->get();
        return view('frontend.cart',['carts'=>$carts]);
    }

}
