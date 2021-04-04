<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getData($slug)
    {
        $link=null;
        $product=Product::where('slug','=',$slug)->first();
        $products=Product::where('slug','=',$slug)->get();
        $error="nothing select";
        if (empty($product)){
           return view('frontend.index',['error'=>$error]);
        }else{
            $title=$product->name;
            $brand=$product->brand()->first();
            $tag=$product->tags()->get();
            $category=$product->category()->first();
            $categoryParent=$category->parent()->first();
            if (isset($categoryParent)){
                $link['categoryParent']=$categoryParent->name;
                $link['categoryParent_url']=$categoryParent->slug;
                $link['category']=$category->name;
                $link['category_url']=$category->slug;
                $link['product']=$product->name;
                $link['product_url']=$product->slug;
            }
            return $this->render($product,$products,$title,$category,$categoryParent,$brand,$tag,$link);
        }
    }

    public function render($product,$products,$title,$category,$categoryParent,$brand,$tag,$link)
    {
        return view('frontend.detail',['product'=>$product,'products'=>$products,'title'=>$title,'category'=>$category,'categoryParent'=>$categoryParent,'brand'=>$brand,'tag'=>$tag,'link'=>$link]);
    }
}
