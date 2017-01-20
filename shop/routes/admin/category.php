<?php
Route::group(['prefix' => 'category'], function () {
    //排序
    Route::group(['prefix' => 'categories'], function () {
        //排序
        Route::patch('sort_order', 'CategoryController@sort_order')->name('categories.sort_order');
        Route::patch('is_something', 'CategoryController@is_something')->name('categories.is_something');

    });

    //资源路由
    Route::resource('categories', 'CategoryController');
});
