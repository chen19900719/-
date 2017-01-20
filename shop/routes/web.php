<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//前台
Route::get('/home', 'HomeController@index');
//后台
Route::group(['prefix' => 'admin'], function () {
    //管理员登录界面
    Auth::routes();
    //后台内部
    Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
        //文件上传
        Route::post('upload', 'FileController@upload');
        //后台首页
        Route::get('/', 'IndexController@index');
        //系统设置
        require('admin/system.php');
        //商城管理
        require('admin/brand.php');
        //商品分类
        require('admin/category.php');
        //商品列表
        require('admin/product.php');
        //会员管理
        Route::group(['prefix' => 'customer'], function () {
            Route::get('index', 'CustomerController@index')->name('customer.index');

        });

    });
});
//广告管理
require('admin/ad.php');



