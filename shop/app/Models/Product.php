<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //黑名单
    protected $guarded = [];
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    //每个商品都属于某一个品牌
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    //商品可以属于多个分类
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    //一个商品有很多相册图片
    public function product_galleries()
    {
        return $this->hasMany('App\Models\ProductGallery');
    }
}
