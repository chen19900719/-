<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    //首页
    public function index(Request $request)
    {
        //搜索
        $where = function ($query) use ($request) {
            if ($request->has('keyword') and $request->keyword != '') {
                $search = "%" . $request->keyword . "%";
                $query->where('name', 'like', $search);
            }
        };

        $brands = Brand::where($where)
            ->orderBy('sort_order')
            ->paginate(config('shop.page_size'));
        return view('admin.brand.index')->with('brands', $brands);
    }

    //新增
    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:brands|max:255',
            'url' => 'required|url|max:255',
            'sort_order' => 'required|integer|between:0,99',
        ]);
        Brand::create($request->all());
        return redirect(route('brands.index'))->with('notice', '新增成功');
    }

    //删除
    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect(route('brands.index'))->with('notice', '删除成功');
    }

    //编辑
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit')->with('brand', $brand);
    }

    public function update($id, Request $request)
    {
        $brand = Brand::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'url' => 'required|url|max:255',
            'sort_order' => 'required|integer|between:0,99',
        ]);
        $brand->update($request->all());
        return redirect(route('brands.index'))->with('notice', '修改成功');
    }

    //排序
    public function sort_order(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->sort_order = $request->sort_order;
        $brand->save();
    }

    //修改显示
    public function is_something(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->is_show = !$brand->is_show;
        $brand->save();

    }
}



