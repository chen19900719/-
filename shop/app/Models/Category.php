<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Category extends Model
{
    //黑名单
    protected $guarded = [];

    //一个分类有多个商品
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    //父栏目有多个子栏目
    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    //删除验证
    static function check_children($id)
    {
        $category = self::with('children')->find($id);
        if ($category->children->isEmpty()) {
            return true;
        }
        return false;
    }

    //清除缓存
    static function clear()
    {
        Cache::forget('Shop_category_categories');
    }


    /**
     * 生成数据分类
     * @return mixed
     */
    static function get_categories()
    {
        $categories = Cache::rememberForever('Shop_category_categories', function () {
            return self::with(['children' => function ($query) {
                $query->orderBy('sort_order');
            }])->where('parent_id', 0)->orderBy('sort_order')->get();
        });
        return $categories;
    }

    /**
     * 检查缓存
     */
    static function check_categories()
    {
        if (!Cache::has('Shop_category_categories')) {
            $categories = self::with(['children' => function ($query) {
                $query->orderBy('sort_order');
            }])->where('parent_id', 0)->orderBy('sort_order')->get();
            Cache::forever('Shop_category_categories', $categories);
        }
        return Cache::get('Shop_category_categories');
    }

    /**
     * 筛选分类时,屏蔽掉没有商品的分类
     */
    static function filter_categories()
    {
        $categories = self::has('children.products')->with(['children' => function ($query) {
            $query->has('products');
        }])->get();
        return $categories;
    }
}
