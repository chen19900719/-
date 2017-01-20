<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adcategory extends Model
{
    //黑名单
    protected $guarded = [];
    //一个分类有多个广告
    public function ads()
    {
        return $this->hasMany('App\Models\Ad');
    }
}
