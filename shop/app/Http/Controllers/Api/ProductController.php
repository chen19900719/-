<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function category()
    {
        $categories = Category::get_categories();
        return $categories;
    }

    public function lists($id)
    {
        $categories = Category::with('products')->where('id', $id)->first();
        return $categories;
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

}
