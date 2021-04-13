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
        if (!empty($request->input('search'))) {
            $name = $request->input('search');
            $search = true;
            $title = $name;
            $category = Category::where('name', 'like', '%' . $name . '%')->first();
            $tags = Tags::where('name', 'like', '%' . $name . '%')->first();
            $brand = Brand::where('name', 'like', '%' . $name . '%')->first();
            $productsAsProduct = Product::where('name', 'like', '%' . $name . '%')->first();
            $products = [];

            if (!empty($category)) {
                $products = $category->products()->get();
                if (!empty($category->child()->first())) {
                    $categoryChild = $category->child()->get();
                    $productsAsChild = [];
                    foreach ($categoryChild as $items) {
                        $productsAsChild[$items->name] = $items->products()->orderby('updated_at', 'DESC')->get();
                    }
                    //format money
                    foreach ($productsAsChild as $items) {
                        foreach ($items as $item) {
                            $sell[$item->name] = $this->sell($item['old_price'], $item['price']);
                            $item['price'] = $this->formatMoney($item['price']);
                            $item['old_price'] = $this->formatMoney($item['old_price']);
                        }
                    }
                    return $this->render($title, $search, $products, $productsAsChild);
                }
            } else if (!empty($brand)) {
                $products = $brand->products()->get();
            } else if (!empty($tags)) {
                $products = $tags->products()->get();
            } else if (!empty($productsAsProduct->name)) {
                $products = Product::where('name', 'like', '%' . $name . '%')->get();
            } else {
                $search = false;
                $title = "nothing";
                $searchData = null;
                return $this->render($title, $search, $searchData, "");
            }
            foreach ($products as $item) {
                $sell = $this->sell($item->old_price, $item->price);
                $item->price = $this->formatMoney($item->price);
                $item->old_price = $this->formatMoney($item->old_price);
            }
            return $this->render($title, $search, $products, "");
        }else{
            return redirect('/');
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
