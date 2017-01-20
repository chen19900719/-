<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Str;
use Hash;

class CustomerController extends Controller
{
    public function register(Request $request)
    {
        $customer = new Customer();
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->remember_token = Str::random(60);
        $customer->save();
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $customer = Customer::where('email', $email)->first();
        if (!$customer) {
            return ['status' => 0, 'msg' => '邮箱不存在'];
        }
        if (!Hash::check($request->password, $customer->password)) {
            return ['status' => 0, 'msg' => '密码错误'];
        }
        return ['status' => 1, 'msg' => ['id' => $customer->id, 'remember_token'=>$customer->remember_token]];
    }

    public function check_token(Request $request)
    {
        $customer = Customer::where('remember_token', $request->token)->first();
        if (!$customer) {
            return ['status' => 0, 'msg' => '登录信息错误，请重新登录'];
        }
        return ['status' => 1];
    }
}
