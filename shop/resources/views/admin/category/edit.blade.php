@extends('layouts.admin.app')
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改商品分类</strong>
            </div>
        </div>

        @include('layouts.admin._flash')
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form " action="{{route('categories.update',$category->id)}}" method="post">
                            {!! csrf_field() !!}
                            {!! method_field('put') !!}

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    上级分类
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <select name="parent_id">
                                        <option>顶级分类</option>
                                        @foreach($categories as $c)
                                            <option value="{{$c->id}}" @if($category->parent_id==$c->id) selected @endif>
                                                {{$c->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    分类名称
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm" name="name" value="{{$category->name}}">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    分类商品
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <input type="text" class="am-input-sm" name="title"  value="{{$category->title}}">
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
                                        <input type="hidden" name="thumb" >
                                    </div>
                                    <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed"/>

                                    <div>
                                        <img src="{{$category->thumb}}" id="img_show" style="max-height: 200px;">
                                    </div>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    描述信息
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <textarea rows="4" name="description">{{$category->description}}</textarea>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    是否显示
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <label class="am-radio-inline">
                                        <input type="radio" value="1" name="is_show" @if($category->is_show==1) checked @endif> 是
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" value="0" name="is_show" @if($category->is_show==0) checked @endif> 否
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
@endsection