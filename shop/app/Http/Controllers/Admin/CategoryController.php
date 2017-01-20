<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    //首页
    public function index()
    {
        $categories = Category::get_categories();
        // return $categories;
        return view('admin.category.index')->with('categories', $categories);
    }

    //排序
    public function sort_order(Request $request)
    {
        $category = Category::find($request->id);
        $category->sort_order = $request->sort_order;
        $category->save();
        Category::clear();
    }

    //修改显示
    public function is_something(Request $request)
    {
        $category = Category::find($request->id);
        $category->is_show = !$category->is_show;
        $category->save();
        Category::clear();
    }

    //新增
    public function create()
    {
        $categories = Category::where('parent_id', 0)->with('children')->get();
        // return $categories;
        return view("admin.category.create")->with('categories', $categories);
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect(route('categories.index'))->with('notice', '新增成功');
    }

    //编辑
    public function edit($id)
    {
        $category = Category:: with('children')->find($id);
        $categories = Category::where('parent_id', 0)->with('children')->get();
        //return $category;
        return view("admin.category.edit")->with('category', $category)->with('categories', $categories);
    }

    public function update($id, Request $request)
    {
        $category = Category:: with('children')->find($id);
        $category->update($request->all());
        return redirect(route('categories.index'))->with('notice', '新增成功');
    }

    //删除
    public function destroy($id)
    {
//        $categories = Category::where('parent_id', $id)->with('children')->get();
//       // return $categories;
//        if($categories->first()){
//            return redirect(route('categories.index'))->with('notice', '必须先删除子栏目');
//        }else{
//            Category::destroy($id);
//            return redirect(route('categories.index'))->with('notice', '删除成功');
//        }
        if (!Category::check_children($id)) {
            return back()->with('alert', '请先删除子栏目');
        } else {
            Category::destroy($id);
            return redirect(route('categories.index'))->with('notice', '删除成功');
        }

    }
}
