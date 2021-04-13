<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function changePassword(Request $request){
        $old = backpack_user()->password;
        if(Hash::check($request->oldPassword,$old)){
            if($request->newPassword == $request->rePassword){
                $password = Hash::make($request->newPassword);
                User::find(backpack_user()->id)->update(['password'=>$password]);
                return redirect()->back()->with('status','Đổi mật khẩu thành công');

            }else{
                return redirect()->back()->with('status','Nhập lại mật khẩu không chính xác');
            }
        }else return redirect()->back()->with('status','Mật khẩu cũ không chính xác');
    }
}
