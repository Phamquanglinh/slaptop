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
        $tags = Tags::where('slug', '=', $slug)->first();
        $error='nothing select';
        if (empty($tags)){
            return view('frontend.index',['error'=>$error]);
        }
        if (isset($tags)) {
            $title = $tags->name;
            $products = $tags->products()->get();
        }
        return $this->render($tags, $title, $products, $link);
    }

    public function render($tags, $title, $products, $link)
    {
        return view('frontend.list', ['data' => $tags, 'title' => $title, 'products' => $products, 'slug' => $link]);
    }
}
