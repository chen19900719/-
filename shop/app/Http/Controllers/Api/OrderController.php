<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Cart;
use App\Models\Address;

class OrderController extends Controller
{
    //下单
    public function checkout(Request $request)
    {
        $carts = Cart::with('product')->where('customer_id', $request->customer_id)->get();
        $count = Cart::count_cart($carts);
        $customer = Customer::find($request->customer_id);
        $address = Address::find($customer->address_id);
        return compact('carts', 'count', 'address');
    }

    //生成订单




}
