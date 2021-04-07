<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{
    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getData($slug)
    {
        //getdata
        $link = null;
        $categoryParent = null;
        $title = null;
        $sell = null;
        $product = Product::where('slug', '=', $slug)->first();
        $error = "nothing select";
        if (empty($product)) {
            return view('frontend.index', ['error' => $error]);
        } else {
            $brand = $product->brand()->first();
            $tag = $product->tags()->get();
            $category = $product->category()->first();
            $categoryParent = $category->parent()->first();
            $products = $category->products()->get();
            $sell = $product->sell($product->old_price, $product->price);
            $title = $product->name;
            $link['product'] = $product->name;
            $link['product_url'] = $product->slug;
            if (isset($categoryParent)) {
                $link['categoryParent_url'] = $categoryParent->slug;
                $link['categoryParent'] = $categoryParent->name;
            } else {
                $link['categoryParent_url'] = null;
                $link['categoryParent'] = null;
            }
            $link['category'] = $category->name;
            $link['category_url'] = $category->slug;
        }


        //format money

        $product->price = $product->formatMoney($product->price);
        $product->old_price = $product->formatMoney($product->old_price);
        foreach ($products as $item) {
            $item->price = $product->formatMoney($item->price);
            $item->old_price = $product->formatMoney($item->old_price);
        }


        //return view
        return $this->render($product, $products, $title, $brand, $tag, $link, $sell);

    }

    /**
     * @param $product
     * @param $products
     * @param $title
     * @param $brand
     * @param $tag
     * @param $link
     * @param $sell
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render($product, $products, $title, $brand, $tag, $link, $sell)
    {
        //return view function
        return view('frontend.detail', ['product' => $product, 'products' => $products, 'title' => $title, 'brand' => $brand, 'tag' => $tag, 'link' => $link, 'sell' => $sell]);
    }
}
