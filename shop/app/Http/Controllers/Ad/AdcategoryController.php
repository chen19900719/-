<?php

namespace App\Http\Controllers\Ad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Adcategory;

class AdcategoryController extends Controller
{
    public function index()
    {
        $adcategories = Adcategory::all();
        return view('ad.adcategory.index')->with('adcategories', $adcategories);
    }

    //新增
    public function create()
    {
        return view('ad.adcategory.create');
    }

    public function store(Request $request)
    {
        Adcategory::create($request->all());
        return redirect(route('adcategories.index'))->with('notice', '新增成功');
    }

    //编辑
    public function edit($id)
    {
        $adcategory = Adcategory::find($id);
        return view('ad.adcategory.edit')->with('adcategory', $adcategory);
    }

    public function update(Request $request, $id)
    {
        $adcategory= Adcategory::find($id);
        $adcategory->update($request->all());
        return redirect(route('adcategories.index'))->with('notice', '修改成功');
    }

    //删除
    public function destroy($id)
    {
        Adcategory::destroy($id);
        return redirect(route('adcategories.index'))->with('notice', '删除成功');
    }
}
