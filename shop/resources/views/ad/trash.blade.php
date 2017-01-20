@extends('layouts.admin.app')
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">广告列表</strong> /
                <small>Ad list</small>
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
                                    <a href="{{route('ads.create')}}" class="am-btn am-btn-default"><span
                                                class="am-icon-plus"></span> 新增
                                    </a>
                                    <a href="" class="am-btn am-btn-default"><span
                                                class="am-icon-plus"></span> 删除
                                    </a>
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
                                        <th class="table-check"><input type="checkbox" id="checked"/></th>
                                        <th class="table-id">编号</th>
                                        <th >缩略图</th>
                                        <th class="table-name">标题</th>
                                        <th >所属栏目</th>
                                        <th class="table-show am-hide-sm-only">描述信息</th>
                                        <th class="table-sort" style="width: 10%">排序</th>
                                        <th class="table-date">发布日期/删除日期</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ads as $ad)
                                        <tr data-id="{{$ad->id}}" class="xParent" id="row_{{$ad->id}}">
                                            <td><input type="checkbox" value="{{$ad->id}}" class="checked_id"
                                                       name="checked_id[]"/></td>
                                            <td>{{$ad->id}}</td>
                                            <td><img src="{{$ad->thumb}}" id="img_show"
                                                     style="max-height: 100px;"></td>
                                            <td>{{$ad->title}}</td>
                                            <td>{{$ad->adcategory->name or ''}}</td>
                                            <td>{{$ad->desc}}</td>
                                            <td class="am-hide-sm-only">
                                                <input type="text" name="sort_order" value="{{$ad->sort_order}}"
                                                       class="am-input-sm sort_order">
                                            </td>
                                            <td> {{$ad->created_at}} / {{$ad->deleted_at}}</td>

                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="{{route('ads.restore',$ad->id)}}" class="am-btn
                                                        am-btn-default am-btn-xs am-text-secondary">
                                                            <span class="am-icon-reply"></span> 还原
                                                        </a>
                                                        <a href="{{route('ads.force_destroy',$ad->id)}}"
                                                           data-method="delete" data-token="{{csrf_token()}}"
                                                           data-confirm="确定要删除吗?"
                                                           class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                            <span class="am-icon-trash-o"></span> 删除
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach-
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

@endsection