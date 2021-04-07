<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // show user profile follow id
    public function index(){
        $customer=null;
        if(backpack_auth()->check()){
            $customer = Customer::where('user_id','=',backpack_user()->id)->first();
            return view('frontend.profile',['customer'=>$customer]);
        }else{
            return redirect('/admin/login');
        }
    }
    // get profile update from client
    public function update(Request $request){
        $customerTableData=[
            'number_phone'=>$request->phone,
            'address'=>$request->address,
        ];
        Customer::where('user_id','=',$request->user_id)->update($customerTableData);
        $usersTableData = [
            'name'=>$request->name,
            'email'=>$request->email,
        ];
        User::where('id', '=', $request->user_id)->update($usersTableData);
        return redirect()->back();
    }
    // push profile user on DB
    public function store(Request $request){
        $customerTableData=[
            'number_phone'=>$request->phone,
            'address'=>$request->address,
            'user_id'=>$request->user_id,
        ];
        Customer::create($customerTableData);
        return redirect()->back();
    }
}
