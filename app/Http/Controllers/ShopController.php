<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Area;
use App\models\Shop;


class ShopController extends Controller
{
    public function index(){

        // 一対多　親->子
        $shops = Area::find(1)->shops;

        // 親<-子
        $area = Shop::find(2)->area;

        // 多対多
        $routes = Shop::find(1)->routes()->get();

        dd($shops, $area, $routes);
    }
}
