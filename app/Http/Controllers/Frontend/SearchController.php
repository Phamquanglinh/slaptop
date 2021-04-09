<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tags;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getData(Request $request)
    {
        $name = $request->input('search');
        $search = true;
        $title = null;
        $category = Category::where('name', 'like', $name)->first();
        $tags = Tags::where('name', 'like', $name)->first();
        $brand = Brand::where('name', 'like', $name)->first();
        $productsAsProduct = Product::where('name', 'like', $name)->first();


        if (!empty($category)) {
            $product = new Product();
            $title = $category->name;
            $productAsCategory = $category->products()->get();
            foreach ($productAsCategory as $item) {
                $sell = $product->sell($item->old_price, $item->price);
                $item->price = $product->formatMoney($item->price);
                $item->old_price = $product->formatMoney($item->old_price);
            }
            if (!empty($category->child()->first())) {
                $categoryChild = $category->child()->get();
                $products = [];
                foreach ($categoryChild as $items) {
                    $products[$items->name] = $items->products()->orderby('updated_at', 'DESC')->get();
                }
                //format money
                foreach ($products as $items) {
                    foreach ($items as $item) {
                        $sell[$item->name] = $product->sell($item['old_price'], $item['price']);
                        $item['price'] = $product->formatMoney($item['price']);
                        $item['old_price'] = $product->formatMoney($item['old_price']);
                    }
                }
                return $this->render($title, $search, $productAsCategory, $products);
            }
            return $this->render($title, $search, $productAsCategory, "");

        } else if (!empty($brand)) {
            $title = $brand->name;
            $productAsBrand = $brand->products()->get();
            return $this->render($title, $search, $productAsBrand, "");
        } else if (!empty($tags)) {
            $title = $tags->name;
            $productAsTag = $tags->products()->get();
            return $this->render($title, $search, $productAsTag, "");
        } else if (!empty($productsAsProduct->name)) {
            $title=$productsAsProduct->name;
            return $this->render($title, $search, $productsAsProduct, "");

        } else {
            $search = false;
            $title = "nothing";
            $searchData = null;
            return $this->render($title, $search, $searchData, "");
        }
    }

    public function formatMoney($money)
    {
        //format money function
        $formatMoney = false;
        while (!$formatMoney) {
            $replace = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $money);
            if ($replace !== $money) {
                $money = $replace;
            } else {
                $formatMoney = true;
            }
        }
        return $money;
    }

    public function sell($oldPrice, $price)
    {
        return 100 - ceil(($price / $oldPrice) * 100);
    }

    public function render($title, $search, $searchData, $parentData)
    {
        return view('frontend.result', ['search' => $search, 'title' => $title, 'products' => $searchData, 'parentData' => $parentData]);
    }
}
