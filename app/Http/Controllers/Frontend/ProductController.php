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
        $link = null;
        $categoryParent = null;
        $title = null;
        $product = Product::where('slug', '=', $slug)->first();
        $error = "nothing select";
        return $product->price;
//        $sell=ceil(($product->price/$product->old_price)*100);
        $formatMoney=false;
        while(!$formatMoney){
            $replace=preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2',$product->price);
            $replaceOld=preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2',$product->old_price);

            if ($replace!==$product->price||$replaceOld!==$product->old_price){
                $product->price=$replace;
                $product->old_price=$replaceOld;
            }else{
                $formatMoney=true;
            }
        }
        if (empty($product)) {
            return view('frontend.index', ['error' => $error]);
        } else {
            $brand = $product->brand()->first();
            $tag = $product->tags()->get();
            $category = $product->category()->first();
            $categoryParent = $category->parent()->first();
            $products = $category->products()->get();
            $title = $product->name;
            $link['product'] = $product->name;
            $link['product_url'] = $product->slug;
            if (isset($categoryParent)) {
                $link['categoryParent_url'] = $categoryParent->slug;
                $link['categoryParent'] = $categoryParent->name;
            } else {
                $link['categoryParent_url'] =  null;
                $link['categoryParent'] =  null;
            }
            $link['category'] = $category->name;
            $link['category_url'] = $category->slug;
            return $this->render($product, $products, $title, $brand, $tag, $link,$sell);
        }
    }

    public function render($product, $products, $title, $brand, $tag, $link,$sell)
    {
        return view('frontend.detail', ['product' => $product, 'products' => $products, 'title' => $title, 'brand' => $brand, 'tag' => $tag, 'link' => $link,'sell'=>$sell]);
    }
}
