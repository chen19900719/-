@extends('layouts.admin.app')

@section('css')
    <link rel="stylesheet" href="/select2/css/select2.min.css">
@endsection

@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新增商品分类</strong>
            </div>
        </div>

        @include('layouts.admin._flash')
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form " action="{{route('categories.store')}}" method="post">
                            {!! csrf_field() !!}

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    上级分类
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <select name="parent_id">
                                        <option value="0">顶级栏目</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    分类名称
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm" name="name" value="{{ old('name')}}">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    分类商品
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <input type="text" class="am-input-sm" name="title">
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    缩略图
                                </div>

                                <div class="am-u-sm-8 am-u-md-8 am-u-end col-end">
                                    <div class="am-form-group am-form-file new_thumb">
                                        <button type="button" class="am-btn am-btn-secondary am-btn-sm">
                                            <i class="am-icon-cloud-upload" id="loading"></i> 上传新的缩略图
                                        </button>
                                        <input type="file" id="thumb_upload">
                                        <input type="hidden" name="thumb">
                                    </div>
                                    <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed"/>

                                    <div>
                                        <img src="" id="img_show" style="max-height: 200px;">
                                    </div>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    描述信息
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <textarea rows="4" name="description"></textarea>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    是否显示
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <label class="am-radio-inline">
                                        <input type="radio" value="1" name="is_show" checked> 是
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" value="0" name="is_show"> 否
                                    </label>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    排序
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <input type="text" name="sort_order" class="am-input-sm" value="99">
                                </div>
                            </div>
                            <div class="am-margin">
                                <button type="submit" class="am-btn am-btn-primary">提 交</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/jquery.html5-fileupload.js"></script>
    <script src="/js/upload.js"></script>
    <script src="/select2/js/select2.min.js"></script>
    <script src="/select2/js/i18n/zh-CN.js"></script>
    <script>
        //select插件
        $('select').select2({
            language: "zh-CN"
        });
    </script>
@endsection