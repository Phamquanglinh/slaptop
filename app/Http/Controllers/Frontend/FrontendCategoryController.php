<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendCategoryController extends Controller
{
    public function getData($slug)
    {
        $link = null;
        $category = Category::where('slug', '=', $slug)->first();
        if (isset($category)) {
            $title = $category->name;
            $products = $category->products()->get();
            $parent = $category->parent()->first();
            if (isset($parent)) {
                $link['parent'] = $parent->name;
                $link['parent_url'] = $parent->slug;
                $link['main'] = $category->name;
                $link['main_url'] = $category->slug;
            }
        }

        return $this->render($category, $title, $products, $link);
    }

    public function render($category, $title, $products, $link)
    {
        return view('frontend.list', ['data' => $category, 'title' => $title, 'products' => $products, 'slug' => $link]);
    }
}
