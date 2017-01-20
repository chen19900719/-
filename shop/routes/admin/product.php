<?php
Route::group(['prefix' => 'product'], function () {
    Route::group(['prefix' => 'products'], function () {
        Route::patch('is_something', 'ProductController@is_something')->name('products.is_something');
        Route::get('trash', 'ProductController@trash')->name('products.trash');
        Route::get('restore/{product}', 'ProductController@restore')->name('products.restore');
        Route::delete('force_destroy/{product}', 'ProductController@force_destroy')->name('products.force_destroy');
        Route::delete('destroy_gallery', 'ProductController@destroy_gallery')->name('products.destroy_gallery');
        Route::delete('destroy_checked', 'ProductController@destroy_checked')->name('products.destroy_checked');
    });

    //资源路由
    Route::resource('products', 'ProductController');
});
