<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index(){

        $area_tokyo = Area::find(1)->shops();
        $shop = Shop::find(2)->area->name;

        $route = Shop::find(1)->routes()->get();
        dd($area_tokyo, $shop, $route);
    }
}
