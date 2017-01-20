<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $cart = Cart::where('customer_id', $request->customer_id)->where('product_id', $request->product_id)->first();
        if ($cart) {
            $cart->increment('num');
        } else {
            Cart::create($request->all());
        }
    }

    public function index(Request $request)
    {
        return Cart::refresh_cart($request->customer_id);
    }

    //更新数量
    public function change_num(Request $request)
    {
        $cart = Cart::find($request->id);
        if ($request->type == 'add') {
            $cart->increment('num');
        } else {
            if ($cart->num != 1) {
                $cart->decrement('num');
            }
        }
        return Cart::refresh_cart($request->customer_id);
    }

    //删除
    public function destroy(Request $request, $id)
    {
        Cart::destroy($id);
        return Cart::refresh_cart($request->customer_id);
    }
}
