<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Wycms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/bootstrap/css//bootstrap-multiselect.css" rel="stylesheet">
    
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
            <div class="col-md-10">

                <div class="page-header">
                    <h1>長樂未央 <small>簡明、易用</small></h1>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">我的信息</div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <table class="table table-hover ">
                                <thead>
                                <tr>
                                    <th colspan="2">系统信息</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>長樂未央系統版本:</td>
                                    <td>2.0 <a href="http://www.whphp.com" target="_blank">访问官网</a></td>
                                </tr>
                                <tr>
                                    <td>操作系統:</td>
                                    <td>Mark</td>
                                </tr>
                                <tr>
                                    <td>運行環境:</td>
                                    <td>Mark</td>
                                </tr>
                                <tr>
                                    <td>PHP運行方法:</td>
                                    <td>Mark</td>
                                </tr>
                                <tr>
                                    <td>MySQL版本:</td>
                                    <td>Mark</td>
                                </tr>
                                <tr>
                                    <td>上傳限制:</td>
                                    <td>Mark</td>
                                </tr>
                                <tr>
                                    <td>核心版本:</td>
                                    <td>Mark</td>
                                </tr>
                                <tr>
                                    <td>已用空間:</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <table class="table table-bordered ">
                                <thead>
                                <tr>
                                    <th colspan="2">站點信息</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>標題 (title):</td>
                                    <td><%= @system.title %></td>
                                </tr>
                                <tr>
                                    <td>關鍵詞 (keywords):</td>
                                    <td><%= @system.keywords %></td>
                                </tr>
                                <tr>
                                    <td>描述信息 (description):</td>
                                    <td><%= @system.description %></td>
                                </tr>
                                <tr>
                                    <td>所有者 (author):</td>
                                    <td><%= @system.author %></td>
                                </tr>
                                <tr>
                                    <td>版權信息 (copyright):</td>
                                    <td><%= @system.copyright %></td>
                                </tr>
                                <tr>
                                    <td>備案號 (icp):</td>
                                    <td><%= @system.icp %></td>
                                </tr>

                                </tbody>
                            </table>
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


</body>
</html>