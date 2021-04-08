<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;

class FixedPageController extends Controller
{
    public function index($key)
    {
        $data=null;
        $title=null;
        $pages = Page::where('id','=',1)->first();
        switch ($key){
            case 'privacy':
                $data = $pages->privacy;
                $title='Chính sách';
                break;
            case 'refund':
                $data = $pages->refund;
                $title='Đổi trả';
                break;
            case 'be_client':
                $data = $pages->be_client;
                $title='Đối tác';
                break;
            case 'be_staff':
                $data = $pages->be_staff;
                $title='Nhân Viên';
                break;
            default:
                return redirect()->back();
        }

        return view('frontend.page', ['title'=>$title,'data' => $data]);
    }
}
