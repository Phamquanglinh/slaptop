<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tags;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class TagController extends Controller
{
    public function getData($slug)
    {
        $link = null;
        $sell = null;
        $category = Tags::where('slug', '=', $slug)->first();
        $tag = true;
        $error = 'nothing select';
        if (empty($category)) {
            return view('frontend.index', ['error' => $error]);
        } else {
            $product = new Product();
            $title = $category->name;
            $products = $category->products()->get();
            $link['main'] = $category->name;
            $link['main_url'] = $category->slug;
            foreach ($products as $item) {
                $sell = $product->sell($item->old_price, $item->price);
                $item->price = $product->formatMoney($item->price);
                $item->old_price = $product->formatMoney($item->old_price);
            }
        }
        return $this->render($category, $title, $products, $link, $tag, $sell);

    }

    public function render($category, $title, $products, $link, $tag, $sell)
    {
        return view('frontend.list', ['data' => $category, 'title' => $title, 'products' => $products, 'slug' => $link, 'tag' => $tag, 'sell' => $sell]);
    }
}
