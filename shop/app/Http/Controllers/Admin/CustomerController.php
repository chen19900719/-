<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    function index(Request $request)
    {
        $where = function ($query) use ($request) {
            if ($request->has('nickname') and $request->nickname != '') {
                $nickname = "%" . $request->nickname . "%";
                $query->where('nickname', 'like', $nickname);
            }

            if ($request->has('openid') and $request->openid != '') {
                $openid = "%" . $request->openid . "%";
                $query->where('openid', 'like', $openid);
            }

            if ($request->has('sex') and $request->sex != '-1') {
                $query->where('sex', $request->sex);
            }

            if ($request->has('created_at') and $request->created_at != '') {
                $time = explode(" ~ ", $request->input('created_at'));
                foreach ($time as $k => $v) {
                    $time["$k"] = $k == 0 ? $v . " 00:00:00" : $v . " 23:59:59";
                }
                $query->whereBetween('created_at', $time);
            }
        };
        $customers = Customer::where($where)->paginate(config('shop.page_size'));
        return view('admin.customer.index')->with('customers', $customers);

    }
}
