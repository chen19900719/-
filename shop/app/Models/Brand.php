<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //黑名单
    protected $guarded = [];
    //一个品牌有多个商品
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
