<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\FormatMoney;

class IndexController extends Controller
{
    public function getData(){
        $formatMoney = new FormatMoney();
//        Limit Product
        $limitProduct=[];
        $data = Tags::where('slug','=','so-luong-co-han.aspx')->first()->products()->orderBy('updated_at','DESC')->limit(4)->get();
        foreach ($data as $key => $item){
            $limitProduct[$key]['name'] = $item->name;
            $limitProduct[$key]['image'] = $item->cover_image;
            $limitProduct[$key]['slug'] = $item->slug;
            $limitProduct[$key]['price'] = $formatMoney->formatMoney($item->price);
            $limitProduct[$key]['old_price'] =$formatMoney->formatMoney($item->old_price);
        }
//Premium
        $premiumProduct=[];
        $prCategory = [];
        $data = Tags::where('slug','=','san-pham-cao-cap.aspx')->first()->products()->orderBy('updated_at','DESC')->limit(4)->get();
        foreach ($data as $key => $item){
            $prCategory[$key]['name']=$item->Category()->first()->name;
            $prCategory[$key]['url']=$item->Category()->first()->slug;
            $premiumProduct[$key]['name'] = $item->name;
            $premiumProduct[$key]['image'] = $item->cover_image;
            $premiumProduct[$key]['slug'] = $item->slug;
            $premiumProduct[$key]['price'] = $formatMoney->formatMoney($item->price);
            $premiumProduct[$key]['old_price'] =$formatMoney->formatMoney($item->old_price);
        }
        return $this->render($limitProduct,$premiumProduct,$prCategory);
    }

    public function render($limitProduct,$premiumProduct,$prCategory){
        return view('frontend.index',['limitProduct'=>$limitProduct,'premiumProduct'=>$premiumProduct,'prCategory'=>$prCategory]);
    }
}
