<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function getData($slug,$page=1)
    {//getdata
        $link=null;
        $title=null;
        $sell=null;
        $brand=true;
        $category = Brand::where('slug', '=', $slug)->first();
        $error='nothing select';
        if (empty($category)){
            return view('frontend.index',['error'=>$error]);
        }else{
            $product=new Product();
            $title=$category->name;
            $products=$category->products()->get();
            $footer=$category->products()->count();
            $link['main']=$category->name;
            $link['main_url']=$category->slug;
            foreach ($products as $item) {
                $sell=$product->sell($item->old_price,$item->price);
                $item->price = $product->formatMoney($item->price);
                $item->old_price = $product->formatMoney($item->old_price);
            }

        }

        return $this->render($footer,$page,$category, $title, $products, $link,$brand,$sell);
    }

    public function render($footer,$page,$category, $title, $products, $link,$brand,$sell)
    {
        return view('frontend.list', ['footer'=>$footer,'page'=>$page,'data' => $category, 'title' => $title, 'products' => $products, 'slug' => $link,'brand'=>$brand,'sell'=>$sell]);
    }
}
