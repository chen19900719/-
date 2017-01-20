<?php
Route::group(['prefix' => 'brand'], function () {

    //排序
    Route::group(['prefix' => 'brands'], function () {
        //排序
        Route::patch('sort_order', 'BrandController@sort_order')->name('brands.sort_order');
        Route::patch('is_something', 'BrandController@is_something')->name('brands.is_something');

    });
    //商城管理资源路由
    Route::resource('brands', 'BrandController');
});