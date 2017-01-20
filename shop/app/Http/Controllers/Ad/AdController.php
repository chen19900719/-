<?php

namespace App\Http\Controllers\Ad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Adcategory;

class AdController extends Controller
{
    //首页
    public function index()
    {
        $ads = Ad::with('adcategory')->get();
        return view('ad.index')->with('ads', $ads);
    }

    //新增
    public function create()
    {
        $adcategories = Adcategory::all();
        return view('ad.create')->with('adcategories', $adcategories);
    }

    public function store(Request $request)
    {
        Ad::create($request->all());
        return redirect(route('ads.index'))->with('notice', '新增成功');
    }

    //编辑
    public function edit($id)
    {
        $ad = Ad::find($id);
        $adcategories = Adcategory::all();
        return view('ad.edit')->with('ad', $ad)
            ->with('adcategories', $adcategories);

    }

    public function update(Request $request, $id)
    {
        $ad = Ad::find($id);
        $ad->update($request->all());
        return redirect(route('ads.index'))->with('notice', '修改成功');
    }

    //删除进回收站
    public function destroy($id)
    {
        Ad::destroy($id);
        return redirect(route('ads.index'))->with('notice', '删除成功');
    }

    //商品回收站
    public function trash()
    {
        $ads = Ad::with('adcategory')->onlyTrashed()->get();
        return view('ad.trash')->with('ads', $ads);
    }

    //回收站还原
    public function restore($id)
    {
        Ad::withTrashed()->where('id', $id)->restore();
        return redirect(route('ads.index'))->with('notice', '还原成功');
    }

    //回收站删除
    public function force_destroy($id)
    {
        Ad::withTrashed()->where('id', $id)->forceDelete();
        return back()->with('notice', '删除成功');
    }
}
