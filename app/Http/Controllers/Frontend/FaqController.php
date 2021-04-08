<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Faqs;
use App\Models\User;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faqs = Faqs::orderby('updated_at', 'DESC')->get();
        return view('frontend.faq', ['faqs' => $faqs]);
    }

}
