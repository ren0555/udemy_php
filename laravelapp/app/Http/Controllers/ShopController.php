<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        //一対多 親->子
        $shops = Area::find(1)->shops;

        //親 <- 子
        $area = shop::finf(3)->area;

        dd($shops);

    }
}
