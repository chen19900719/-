@extends('layouts.admin.app')
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商品分类管理</strong> /
                <small>Good Categories Manage</small>
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
                                    <a href="{{route('categories.create')}}" class="am-btn am-btn-default"><span
                                                class="am-icon-plus"></span> 新增
                                    </a>
                                    <button class="am-btn am-btn-success" type="submit" id="show_all"> <span
                                                class="am-icon-arrows-alt">
                                        </span>展开所有
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                    <tr>
                                        <th class="table-id">编号</th>
                                        <th>缩略图</th>
                                        <th class="table-name" style="width: 20%">分类名</th>
                                        <th style="width: 20%">分类商品</th>
                                        <th class="table-show am-hide-sm-only">是否显示</th>
                                        <th class="table-sort" style="width: 10%">排序</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr data-id="{{$category->id}}" class="xParent" id="row_{{$category->id}}">
                                            <td>{{$category->id}}</td>
                                            <td><img src="{{$category->thumb}}" id="img_show"
                                                     style="max-height: 200px;"></td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->title}}</td>
                                                <td class="am-hide-sm-only is_something">
                                                    {!! is_something('is_show', $category) !!}
                                                </td>
                                            <td class="am-hide-sm-only">
                                                <input type="text" name="sort_order" value="{{$category->sort_order}}"
                                                       class="am-input-sm sort_order">
                                            </td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="{{route('categories.edit',$category->id)}}" class="am-btn
                                                        am-btn-default am-btn-xs am-text-secondary">
                                                            <span class="am-icon-pencil-square-o"></span> 编辑
                                                        </a>
                                                        <a href="{{route('categories.destroy',$category->id)}}"
                                                           data-method="delete" data-token="{{csrf_token()}}"
                                                           data-confirm="确定要删除吗?"
                                                           class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                            <span class="am-icon-trash-o"></span> 删除
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach($category->children as $c)
                                            <tr data-id="{{$c->id}}" class="xChildren child_row_{{$category->id}}"
                                                style="display: none">
                                                <td>{{$c->id}}</td>
                                                <td><img src="{{$c->thumb}}" id="img_show"
                                                         style="max-height: 100px;"></td>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$c->name}}</td>
                                                <td>{{$c->title}}</td>
                                                <td class="am-hide-sm-only is_something">
                                                    {!! is_something('is_show',$c) !!}
                                                </td>
                                                <td class="am-hide-sm-only">
                                                    <input type="text" name="sort_order" value="{{$c->sort_order}}"
                                                           class="am-input-sm sort_order">
                                                </td>
                                                <td>
                                                    <div class="am-btn-toolbar">
                                                        <div class="am-btn-group am-btn-group-xs">
                                                            <a href="{{route('categories.edit',$c->id)}}"
                                                               class="am-btn
                                                            am-btn-default am-btn-xs am-text-secondary">
                                                                <span class="am-icon-pencil-square-o"></span> 编辑
                                                            </a>
                                                            <a href="{{route('categories.destroy',$c->id)}}"
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
    {{--<script src="/js/jquery.html5-fileupload.js"></script>--}}
    <script>
        $(function () {
            //排序
            $('.sort_order').change(function () {
                var data = {
                    sort_order: $(this).val(),
                    id: $(this).parents('tr').data('id'),
                }
                $.ajax({
                    type: "PATCH",
                    url: "{{route('categories.sort_order')}}",
                    data: data
                });
            })
            //修改显示界面
            $('.is_something').click(function () {
                var id=$(this).parents('tr').data('id');
                var _this = $(this);
                $.ajax({
                    type: "PATCH",
                    url: "{{route('categories.is_something')}}",
                    data: {id:id},
                    success: function () {
                        _this.toggleClass('am-icon-close am-icon-check');
                    }
                })
                return false;//js冒泡事件
            });
            //展开与折叠
            $('.xParent').dblclick(function () {
                $(this).toggleClass('am-active');
                $('.child_' + this.id).toggle();
            });
            $('#show_all').click(function () {
                $('.xParent').toggleClass('am-active');
                $('.xChildren').toggle();
            });

        })
    </script>
@endsection