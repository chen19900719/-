<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Wycms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/bootstrap/css//bootstrap-multiselect.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/Public/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/Public/datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="/Public/select2/css/select2.min.css">

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
                        <span class='glyphicon glyphicon-th' aria-hidden='true'></span> 人事部门管理 <span
                            class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="">人事管理</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo U('Person/index');?>">职员信息列表</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Department/index');?>">部门信息列表</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Person/trash');?>">停职人员列表</a>
                        </li>
                    </ul>
                </li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (ucfirst($user["username"])); ?> 管理员 <span
                            class="caret"></span></a>
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
                    <h1>新增职员信息
                        <small>Create Person</small>
                    </h1>
                </div>

                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">新增职员信息</div>
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">新增职员信息</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <form class="form-horizontal" role="form" method="post" action="<?php echo U('edit');?>">
                                    <input type="hidden" name="id" value="<?php echo ($person["id"]); ?>">

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <div class="form-group">
                                                <label for="department_id" class="col-sm-2 control-label">所属部门</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="department_id"
                                                            name="department_id">
                                                        <option>请选择</option>
                                                        <?php if(is_array($departments)): $i = 0; $__LIST__ = $departments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><option value="<?php echo ($d["id"]); ?>"
                                                            <?php if(($d["id"]) == $person["department_id"]): ?>selected<?php endif; ?>
                                                            >
                                                            <?php echo ($d["name"]); ?>
                                                            </option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">姓名</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                           placeholder="姓名" value="<?php echo ($person["name"]); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">性别</label>
                                                <div class="col-sm-10">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="sex" id="is_show" value="男"
                                                        <?php if(($person["sex"]) == "男"): ?>checked<?php endif; ?>
                                                        > 男
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="sex" id="" value="女"
                                                        <?php if(($person["sex"]) == "女"): ?>checked<?php endif; ?>
                                                        > 女
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">入职时间</label>
                                                <div class="col-sm-10">
                                                    <input type="text" data-date-format="yyyy-mm-dd"
                                                           class="form-control datepicker" id="inputPassword3"
                                                           name="time"
                                                           placeholder="date" value="<?php echo ($person["time"]); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="age" class="col-sm-2 control-label">年龄</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="age" class="form-control" id="age"
                                                           placeholder="年龄" value="<?php echo ($person["age"]); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="position" class="col-sm-2 control-label">职务</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="position" class="form-control"
                                                           id="position"
                                                           placeholder="职务" value="<?php echo ($person["position"]); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="thumb" class="col-sm-2 control-label">照片</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="thumb" class="form-control" id="thumb"
                                                           placeholder="照片" value="<?php echo ($person["thumb"]); ?>">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">提 交</button>
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

</div>


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap-multiselect.js"></script>


    <script src="/Public/ckeditor/ckeditor.js"></script>
    <script src="/Public/ckfinder/ckfinder.js"></script>
    <script src="/Public/select2/js/select2.min.js"></script>
    <script src="/Public/select2/js/i18n/zh-CN.js"></script>
    <script src="/Public/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/Public/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/Public/datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
    <script>
        $('.datepicker').datepicker({
            language: 'zh-CN'
        });
    </script>

</body>
</html>