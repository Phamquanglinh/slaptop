<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormatMoney extends Controller
{
    public function formatMoney($money)
    {
        //format money function
        $formatMoney = false;
        while (!$formatMoney) {
            $replace = preg_replace('/(-?\d+)(\d\d\d)/', '$1.$2', $money);
            if ($replace !== $money) {
                $money = $replace;
            } else {
                $formatMoney = true;
            }
        }
        return $money;
    }
}
