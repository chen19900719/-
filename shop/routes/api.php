<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
Route::get('/user', function () {

})->middleware('auth:api');


Route::group(['namespace' => 'Api', 'middleware' => ['cors', 'auth:api']], function () {
    //商品列表
    Route::get('index', 'IndexController@index');
    Route::get('category', 'ProductController@category');
    Route::get('lists/{id}', 'ProductController@lists');
    Route::get('show/{id}', 'ProductController@show');
    //用户注册
    Route::post('customer/register', 'CustomerController@register');
    Route::post('customer/login', 'CustomerController@login');
    Route::post('customer/check_token', 'CustomerController@check_token');
    //购物车
    Route::resource('cart', 'CartController');
    Route::post('cart/change_num', 'CartController@change_num');
    Route::get('order/checkout', 'OrderController@checkout');
    Route::get('address', 'AddressController@index');
    //订单
    Route::resource('address', 'AddressController');
    Route::patch('address/default_address', 'AddressController@default_address');
});
