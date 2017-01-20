@extends('layouts.admin.app')
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">品牌管理</strong> /
                <small>Brands Manage</small>
            </div>
        </div>

        @include('layouts.admin._flash')
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">

                <div class="am-tab-panel">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="{{route('brands.create')}}" class="am-btn am-btn-default"><span
                                                class="am-icon-plus"></span> 新增
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <form action="{{route('brands.index')}}" method="get">
                                <div class="am-input-group am-input-group-sm">
                                    <input type="text" class="am-form-field" name="keyword"
                                           value="{{Request::input('keyword')}}">
                                    <span class="am-input-group-btn">
                                        <button class="am-btn am-btn-default" type="submit">搜索</button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                    <tr>
                                        <th class="table-id">编号</th>
                                        <th class="table-title">缩略图</th>
                                        <th class="table-type">品牌名称</th>
                                        <th class="table-author am-hide-sm-only">品牌商品</th>
                                        <th class="table-date am-hide-sm-only">是否显示</th>
                                        <th class="table-set">排序</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($brands as $brand)
                                        <tr data-id="{{$brand->id}}">
                                            <td>{{$brand->id}}</td>
                                            <td></td>
                                            <td>{{$brand->name}}</td>
                                            <td></td>
                                            <td class="am-hide-sm-only is_something">
                                                {!! is_something('is_show',$brand) !!}
                                            </td>
                                            <td class="am-hide-sm-only">
                                                <input type="text" name="sort_order" value="{{$brand->sort_order}}"
                                                       class="am-input-smsort_order">
                                            </td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="{{route('brands.edit',$brand->id)}}" class="am-btn
                                                        am-btn-default am-btn-xs am-text-secondary">
                                                            <span class="am-icon-pencil-square-o"></span> 编辑
                                                        </a>
                                                        <a href="{{route('brands.destroy',$brand->id)}}"
                                                           data-method="delete" data-token="{{csrf_token()}}"
                                                           data-confirm="确定要删除吗?"
                                                           class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                            <span class="am-icon-trash-o"></span> 删除
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <div class="am-cf">
                                    共 {{ $brands->total()}}条记录
                                    <div class="am-fr">
                                        {{ $brands->appends(Request::all())->links()}}
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
    {{--<script src="/js/jquery.html5-fileupload.js"></script>--}}
    <script>
        $(function () {
            $('.sort_order').change(function () {
                var data = {
                    sort_order: $(this).val(),
                    id: $(this).parents('tr').data('id'),
                }
                $.ajax({
                    type: "PATCH",
                    url: "{{route('brands.sort_order')}}",
                    data: data
                });
            })
            // 是否显示
            $('.is_something').click(function () {
                var id = $(this).parents('tr').data('id');
                var _this = $(this);
                $.ajax({
                    type: "PATCH",
                    url: "{{route('brands.is_something')}}",
                    data: {id: id},
                    success: function () {
                        _this.children().toggleClass("am-icon-check am-icon-close");
                    }

                })
            });
        })

    </script>
@endsection