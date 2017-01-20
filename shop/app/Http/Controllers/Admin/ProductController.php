<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\ProductGallery;

class ProductController extends Controller
{

    private function attributes()
    {
        view()->share([
        'categories' => Category::get_categories(),
        'brands' => Brand::orderBy('sort_order')->get(),
        'filter_categories' => Category::filter_categories()
    ]);
    }

    //首页
    public function index(Request $request)
    {
        //多条件查找
        $where = function ($query) use ($request) {
            if ($request->has('name') and $request->name != '') {
                $search = "%" . $request->name . "%";
                $query->where('name', 'like', $search);
            }

            if ($request->has('category_id') and $request->category_id != '-1') {
                $category_id = $request->category_id;
                $product_ids = \DB::table('category_product')->where('category_id', $category_id)->pluck('product_id');
                $query->whereIn('id', $product_ids);
            }

            if ($request->has('brand_id') and $request->brand_id != '-1') {
                $query->where('brand_id', $request->brand_id);
            }

            if ($request->has('is_onsale') and $request->is_onsale != '-1') {
                $query->where('is_onsale', $request->is_onsale);
            }

            if ($request->has('is_top')) {
                $query->where('is_top', true);
            }

            if ($request->has('is_recommend')) {
                $query->where('is_recommend', true);
            }

            if ($request->has('is_hot')) {
                $query->where('is_hot', true);
            }

            if ($request->has('is_new')) {
                $query->where('is_new', true);
            }

            if ($request->has('created_at') and $request->created_at != '') {
                $time = explode(" ~ ", $request->input('created_at'));
                foreach ($time as $k => $v) {
                    $time["$k"] = $k == 0 ? $v . " 00:00:00" : $v . " 23:59:59";
                }
                $query->whereBetween('created_at', $time);
            }
        };
        $products = Product::with('categories')->with('brand')
            ->where($where)
            ->orderBy('is_top', "desc")
            ->orderBy('created_at', "desc")
            ->paginate(config('shop.page_size'));
        //return $products ;
        $this->attributes();
        return view('admin.product.index')->with('products', $products);
    }

    //新增
    public function create()
    {
        $this->attributes();
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'category_id' => 'required',
        ]);
        $product = Product::create(collect($request)->forget(['category_id', 'imgs', 'file'])->all());
        //相册
        if ($request->has('imgs')) {
            foreach ($request->imgs as $img) {
                $product->product_galleries()->create(['img' => $img]);
            }
        }
        //商品所属栏目
        $product->categories()->sync($request->category_id);
        return redirect(route('products.index'))->with('notice', '新增成功');
    }

    //编辑
    public function edit($id)
    {
        $product = Product::with('brand', 'categories', 'product_galleries')->find($id);
        //return $product;
        //当前商品对应的分类id
        $p_categories = $product->categories->pluck('id');
        $this->attributes();
        return view('admin.product.edit')->with('product', $product)
            ->with('p_categories', $p_categories);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
        ]);
        $product = Product::find($id);
        $product->categories()->sync($request->category_id);
        $product->update(collect($request)->forget(['category_id', 'imgs', 'file'])->all());
        //相册
        if ($request->has('imgs')) {
            foreach ($request->imgs as $img) {
                $product->product_galleries()->create(['img' => $img]);
            }
        }
        return redirect(route('products.index'))->with('notice', '修改成功');
    }

    //删除放进回收站
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect(route('products.index'))->with('notice', '被删商品已进入回收站');
    }

    //删除回收站商品
    public function force_destroy($id)
    {
        Product::withTrashed()->where('id', $id)->forceDelete();
        ProductGallery::where('product_id', $id)->delete();
        return back()->with('notice', '删除成功');

    }

    //多选删除
    public function destroy_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        foreach ($checked_id as $id) {
            Product::destroy($id);
        }
    }

    //商品回收站
    public function trash()
    {
        $products = Product::with('categories')->with('brand')->onlyTrashed()->get();
        $this->attributes();
        return view('admin.product.trash')->with('products', $products);
    }

    //回收站商品还原
    public function restore($id)
    {
        Product::withTrashed()->where('id', $id)->restore();
        return back()->with('notice', '还原成功');
    }

    //ajax删除相册图片
    public function destroy_gallery(Request $request)
    {
        ProductGallery::destroy($request->gallery_id);
    }

    /**
     * ajax 修改is...属性
     * @param Request $request
     */
    public function is_something(Request $request)
    {
        $attr = $request->attr;
        $product = Product::find($request->id);
        $value = $product->$attr ? false : true;
        $product->$attr = $value;
        $product->save();
    }


}

