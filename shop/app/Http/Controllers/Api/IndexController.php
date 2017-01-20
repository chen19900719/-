<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Ad;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $banner_ads = Ad::where('adcategory_id', 1)->get();
        $index_ads = Ad::where('adcategory_id', 3)->get();
        return compact('products', 'banner_ads', 'index_ads');
    }
}
