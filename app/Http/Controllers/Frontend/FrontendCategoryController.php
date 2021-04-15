<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendCategoryController extends Controller
{
    public function getData($slug,$page)
    {
        //getdata
        $product = new Product();
        $link = null;
        $sell = null;
        $title = null;
        $categories = true;
        $category = Category::where('slug', '=', $slug)->first();
        $error = 'nothing select';
        if (empty($category)) {
            return redirect()->back();
        }
        if (isset($category)) {
            $title = $category->name;
            $parent = $category->parent()->first();
            $link['main'] = $category->name;
            $link['main_url'] = $category->slug;
            if (isset($parent)) {
                $products = $category->products()->orderby('updated_at','DESC')->get();
                $footer = $category->products()->count();
                $link['parent'] = $parent->name;
                $link['parent_url'] = $parent->slug;
                foreach ($products as $item) {
                    $sell = $product->sell($item->old_price, $item->price);
                    $item->price = $product->formatMoney($item->price);
                    $item->old_price = $product->formatMoney($item->old_price);
                }

            } else {
                //getdata if category is root..
                $categoryChild = $category->child()->get();
                $products = [];
                $footer=0;
                foreach ($categoryChild as $items) {
                    $products[$items->name] = $items->products()->orderby('updated_at','DESC')->get();
                    $footer += $items->products()->count();

                }
                //format money
                foreach ($products as $items) {
                    foreach ($items as $item) {
                        $sell[$item->name] = $product->sell($item['old_price'], $item['price']);
                        $item['price'] = $product->formatMoney($item['price']);
                        $item['old_price'] = $product->formatMoney($item['old_price']);

                    }
                }

            }

        }
        //return view
        return $this->render($footer,$page,$category, $title, $products, $link, $categories, $sell);
    }

    public function render($footer,$page,$category, $title, $products, $link, $categories, $sell)
    {   //return view function

        return view('frontend.list', ['footer'=>$footer,'page'=>$page,'data' => $category, 'title' => $title, 'products' => $products, 'slug' => $link, 'categories' => $categories, 'sell' => $sell]);
    }
}
