@extends('layouts.admin.app')
@section('css')

    <link rel="stylesheet" href="/vendor/daterangepicker/daterangepicker.css">
@endsection
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商品回收站</strong> /
                <small>Products trash</small>
            </div>
        </div>

        @include('layouts.admin._flash')
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">

                <div class="am-tab-panel">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                        </div>
                    </div>
                    </hr>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                    <tr>
                                        <th class="table-check"><input type="checkbox" id="checked"/></th>
                                        <th class="table-id">ID</th>
                                        <th class="table-thumb">缩略图</th>
                                        <th class="table-title" style="width:10%">商品名称</th>
                                        <th class="table-category" style="width:10%">所属分类</th>
                                        <th class="table-brand" style="width:5%">品牌</th>
                                        <th class="table-price">单价</th>
                                        <th class="am-hide-sm-only">上架</th>
                                        <th class="am-hide-sm-only">置顶</th>
                                        <th class="am-hide-sm-only">推荐</th>
                                        <th class="am-hide-sm-only">热销</th>
                                        <th class="am-hide-sm-only">新品</th>
                                        <th class="am-hide-sm-only" style="width:10%">库存</th>
                                        <th class="table-date am-hide-sm-only">发布日期 / 删除日期</th>

                                        <th class="table-set">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr data-id="{{$product->id}}">
                                            <td><input type="checkbox" value="{{$product->id}}" class="checked_id"
                                                       name="checked_id[]"/></td>
                                            <td>{{$product->id}}</td>
                                            <td><img src="{{$product->thumb}}" id="img_show"
                                                     style="max-height: 100px;"></td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->categories->implode('name',',')}}</td>
                                            <td>{{$product->brand->name or ''}}</td>
                                            <td>{{$product->price}}</td>
                                            @foreach (array('is_onsale', 'is_top', 'is_recommend', 'is_hot', 'is_new') as $attr)
                                                <td class="am-hide-sm-only ">
                                                    {!! is_something($attr, $product) !!}
                                                    {{--{{$product->is_new}}--}}
                                                </td>
                                            @endforeach


                                            <td class="am-hide-sm-only">
                                                <input type="text" name="stock" class="am-input-sm"
                                                       value="{{$product->stock}}">
                                            </td>
                                            <td class="am-hide-sm-only">
                                                {{$product->created_at}} / {{$product->deleted_at}}
                                            </td>

                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="{{route('products.restore',$product->id)}}" class="am-btn
                                                        am-btn-default am-btn-xs am-text-secondary">
                                                            <span class="am-icon-reply"></span> 还原
                                                        </a>
                                                        <a href="{{route('products.force_destroy',$product->id)}}"
                                                           data-method="delete" data-token="{{csrf_token()}}"
                                                           data-confirm="确定要删除吗?"
                                                           class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                            <span class="am-icon-trash"></span> 删除
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="am-cf">
                                    <div class="am-fr">
                                    </div>
                                </div>
                                <hr/>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/vendor/daterangepicker/moment.js"></script>
    <script src="/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="/js/daterange_config.js"></script>
    {{--<script src="/js/jquery.html5-fileupload.js"></script>--}}
    <script>
        $(function () {
            //是否
            $(".is_something").click(function () {
                var _this = $(this);
                var data = {
                    id: _this.parents("tr").data('id'),
                    attr: _this.data('attr')
                }
                $.ajax({
                    type: "PATCH",
                    url: "{{route('products.is_something')}}",
                    data: data,
                    success: function (data) {
                        _this.toggleClass('am-icon-close am-icon-check');
                    }
                });
            });

        })
    </script>
@endsection