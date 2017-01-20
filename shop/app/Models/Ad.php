<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ad extends Model
{
    //黑名单
    protected $guarded = [];
    use SoftDeletes;
    protected $dates = ['deleted_at'];



    //每条广告都属于某一个分类
    public function adcategory()
    {
        return $this->belongsTo('App\Models\Adcategory');
    }
}
