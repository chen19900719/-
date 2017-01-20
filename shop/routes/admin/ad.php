<?php \
//广告列表
Route::group(['prefix' => 'ad', 'namespace' => 'Ad'], function () {
        Route::group(['prefix' => 'ads'], function () {
            //商品回收站
            Route::get('trash', 'AdController@trash')->name('ads.trash');
            Route::get('php {ad}/restore', 'AdController@restore')->name('ads.restore');
            Route::delete('{ad}/force_destroy', 'AdController@force_destroy')->name('ads.force_destroy');
        });
        //广告分类
        Route::resource('adcategories', 'AdcategoryController');

        //广告管理资源路由
        Route::resource('ads', 'AdController');
    });