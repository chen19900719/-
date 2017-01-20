<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //黑名单
    protected $guarded = [];
    //不赋值时间戳
    public $timestamps = false;
}
