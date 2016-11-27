<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Wycms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/common.css" rel="stylesheet">
    
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
            <a href="<?php echo U('Index/index');?>" class="navbar-brand">
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
                            <a href="">分类管理</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo U('Category/index');?>">栏目列表</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Article/index');?>">文章列表</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Article/status');?>">文章回收站</a>
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
                <li>
                    <a href="<?php echo U('Article/finder');?>">
                        <span class='glyphicon glyphicon-wrench' aria-hidden='true'></span>系统附件
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
                    <h1>新增栏目
                        <small>Create Category</small>
                    </h1>
                </div>

                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">栏目修改</div>

                            <div class="panel-body">
                                <!-- Nav tabs -->
                               <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">修改文章</a>
                                    </li>
                                    <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">文章内容</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <form class="form-horizontal" role="form" method="post" action="<?php echo U('update');?>">
                                    <input type="hidden" name="id" value="<?php echo ($category["id"]); ?>">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <div class="form-group">
                                                <label for="parent_id" class="col-sm-2 control-label">父栏目</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="parent_id">
                                                        <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><option value="<?php echo ($c["id"]); ?>"<?php if(($c["id"]) == $category["parent_id"]): ?>selected<?php endif; ?>><?php echo ($c["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">名称</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                           placeholder="栏目名称" value="<?php echo ($category["name"]); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pinyin" class="col-sm-2 control-label">拼音</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="pinyin" class="form-control"
                                                           id="pinyin"
                                                           placeholder="栏目名称" value="<?php echo ($category["pinyin"]); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">类型</label>
                                                <div class="col-sm-10">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="type" id="inlineRadio1" value="1"<?php if(($category["type"]) == "1"): ?>checked<?php endif; ?>> 封面
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="type" id="inlineRadio2" value="2"<?php if(($category["type"]) == "2"): ?>checked<?php endif; ?>>
                                                        列表
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="type" id="inlineRadio3" value="3" <?php if(($category["type"]) == "3"): ?>checked<?php endif; ?>>
                                                        URL跳转
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="url" class="col-sm-2 control-label">Url跳转地址</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="url" class="form-control" id="url"
                                                           placeholder="栏目名称"  value="<?php echo ($category["url"]); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="is_show" class="col-sm-2 control-label">是否显示</label>
                                                <div class="col-sm-10">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_show" id="is_show" value="1"
                                                        <?php if(($category["is_show"]) == "1"): ?>checked<?php endif; ?>> 显示
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_show" id="" value="0" <?php if(($category["is_show"]) == "0"): ?>checked<?php endif; ?>>  隐藏
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <br>
                                            <div class="form-group">
                                                    <textarea name="content" rows="10" class="form-control"
                                                    ></textarea>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile_1">
                                            <br>
                                            <div class="form-group">
                                                <textarea name="content" rows="10" class="form-control"><?php echo ($category["content"]); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">添 加</button>
                                            </div>
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
    </script>

    <script type="text/javascript">
        $('select ').select2({
            language: "zh-CN"
        });
        //删除新增附件
        //$(document).on...
        $(document).on("click",".delete_file",function(){
            $(this).parents(".form-group").remove();
        });
        //删除第一个附件
        $("#delete_file1").click(function(){
            $("#file1").var('');
        });
    </script>


</body>
</html>