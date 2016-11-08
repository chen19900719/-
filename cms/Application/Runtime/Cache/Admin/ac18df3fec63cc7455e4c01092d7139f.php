<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Wycms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/common.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public//Publicselect2/css/select2.min.css">
    <link rel="stylesheet" href="/Public/colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/Public/datepicker/css/bootstrap-datepicker3.min.css">
    
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top col-md-10">
    <div class="container-fluid nav_bg">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand">
                <span class='glyphicon glyphicon-home' aria-hidden='true'></span> 長樂未央
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class='glyphicon glyphicon-th' aria-hidden='true'></span> 內容管理 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo U('Category/index');?>">栏目管理</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo U('Article/index');?>">文章列表</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Article/create');?>">新增文章</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo U('Link/index');?>">
                        <span class='glyphicon glyphicon-link' aria-hidden='true'></span> 友情链接
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('System/config');?>">
                        <span class='glyphicon glyphicon-wrench' aria-hidden='true'></span> 系统设置
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (ucfirst($user["username"])); ?> 管理员 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo U('User/logout');?>">安全退出</a></li>
                        <li><a href="<?php echo U('System/change_password');?>">修改密码</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="main">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>新增文章
                        <small>Create Article</small>
                    </h1>
                </div>

                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">新增文章</div>

                            <div class="panel-body">


                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">添加文章
                                    </li>

                                </ul>

                                <!-- Tab panes -->
                                <form class="form-horizontal" role="form" method="post" action="<?php echo U('store');?>">

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <div class="form-group">
                                                <label for="parent_id" class="col-sm-2 control-label">所属栏目</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="parent_id">
                                                        <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><option value="<?php echo ($category["id"]); ?>"><?php echo ($category["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">标题</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                           placeholder="标题">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">选择颜色</label>
                                                <div class="col-sm-10">
                                                    <div id="cp2" class="input-group colorpicker-component">
                                                        <input type="text" value="#00AABB" class="form-control"/>
                                                        <span class="input-group-addon"><i></i></span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">日期选择</label>
                                                <div class="col-sm-10">
                                                    <input type="text" data-date-format="yyyy-mm-dd"
                                                           class="form-control datepicker" id="inputPassword3"
                                                           placeholder="date">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="url" class="col-sm-2 control-label">描述</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="url" class="form-control" id="url"
                                                           placeholder="文章描述">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="url" class="col-sm-2 control-label">缩略图</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="thumb" class="form-control" id="thumb"
                                                           placeholder="缩略图">
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-info"
                                                            onclick="BrowseServer('thumb','img_show')">上传
                                                    </button>
                                                    <button type="button" class="btn btn-danger delete_thumb">删除
                                                    </button>
                                                </div>
                                                <div class="col-sm-2">
                                                    <img src="" alt="" id="img_show" width="60px" height="60px">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="url" class="col-sm-2 control-label">新增附件</label>
                                                <div class="col-sm-10">
                                                    <button type="button" class="btn btn-primary" id="add_file">增加
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="files">
                                                <div class="form-group">
                                                    <label for="url" class="col-sm-2 control-label">附件(1)</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="file[]" class="form-control" id="file1"
                                                               placeholder="">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <button type="button" class="btn btn-info"
                                                                onclick="BrowseServer('file1')">上传
                                                        </button>
                                                        <button type="button" class="btn btn-danger">删除</button>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <textarea name="content" rows="10" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">添 加</button>
                                                </div>
                                            </div>

                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>

    <script src="/Public/select2/js/select2.min.js"></script>
    <script src="/Public/select2/js/i18n/zh-CN.js"></script>
    <script src="/Public/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/Public/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/Public/datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
    <script src="/Public/ckeditor/ckeditor.js"></script>
    <script src="/Public/ckfinder/ckfinder.js"></script>
    <script>
        CKEDITOR.replace('content',
                {
                    filebrowserBrowseUrl: '/Public/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '/Public/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '/Public/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });

        $('select').select2({
            language: "zh-CN"
        });

        $(function () {
            $('#cp2').colorpicker();
        });

        $('.datepicker').datepicker({
            language: 'zh-CN'
        });

        var index = 1;
        $("#add_file").click(function () {
            var length = $(".files").children().length;
            if (length == 5) {
                alert('您最多只能增加5个附件');
                return false;
            }

            index++;
            var html = '  <div class="form-group">' +
                    '<label for="url" class="col-sm-2 control-label">附件(' + index + ')</label>' +
                    '<div class="col-sm-6">' +
                    '<input type="text" name="file[]" class="form-control" id="file' + index + '" placeholder="">' +
                    '</div>' +
                    '<div class="col-sm-4">' +
                    '<button type="button" class="btn btn-info" onclick="BrowseServerFile(\'file' + index + '\')">上传</button> ' +
                    '<button type="button" class="btn btn-danger">删除</button>' +
                    '</div>' +
                    '</div>';

            $(".files").append(html);
        })

        function BrowseServer(thumb, img_show) {
            var finder = new CKFinder();

            //当选中图片时执行的函数
            finder.selectActionFunction = function (fileUrl) {
                $("#" + thumb).val(fileUrl);
                $("#" + img_show).attr("src", "" + fileUrl + "");
            }

            finder.popup();//调用窗口
        }

        function BrowseServerFile(file) {
            var finder = new CKFinder();

            //当选中图片时执行的函数
            finder.selectActionFunction = function (fileUrl) {
                $("#" + file).val(fileUrl);
            }

            finder.popup();//调用窗口
        }

        $(".delete_thumb").click(function () {
            $("#thumb").val('');
            $("#img_show").attr('src', '');
        })
    </script>



</body>
</html>