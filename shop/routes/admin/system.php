<?php
Route::group(['prefix' => 'system'], function () {

    //站点信息
    Route::get('config', 'SystemController@config');
    Route::put('config', 'SystemController@config_update');
    //修改密码
    Route::get('password', 'SystemController@password');
    Route::patch('password', 'SystemController@password_update');
});