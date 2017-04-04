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
                    <br>
                    <h1>部门信息列表
                    </h1>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">部门信息列表</div>
                    <div class="panel-body">
                        <form action="" method="post" id="form">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($departments)): $i = 0; $__LIST__ = $departments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$department): $mod = ($i % 2 );++$i;?><td class="'name"><?php echo ($department["name"]); ?></td>
                                    <td>
                                        <a href="<?php echo U('edit',array('id'=>$department[id]));?>" class="edit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <a href="<?php echo U('delete',array('id'=>$c[id]));?>" class="edit">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                        <a href="<?php echo U('add');?>" class="add">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </a>
                                    </td>
                                    </tr>
                                    <?php if(is_array($department["children"])): $i = 0; $__LIST__ = $department["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><td class="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($c["name"]); ?></td>
                                        <td>
                                            <a href="<?php echo U('edit',array('id'=>$c[id]));?>" class="edit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <a href="<?php echo U('delete',array('id'=>$c[id]));?>" class="edit">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                            <a href="<?php echo U('add');?>" class="add">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="panel-body"></div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>


    <!-- 删除 -->
    <div class="modal fade" id="destroy_link" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">删除友情链接</h4>
                </div>
                <div class="modal-body">
                    <p>确定删除当前内容吗？</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <a class="btn btn-primary" id="confirm_destroy">确 定</a>
                </div>
            </div>
        </div>
    </div>



</div>


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap-multiselect.js"></script>


    <script>
        $(function () {
            //删除单条链接
            $('.destroy').click(function () {
                var id = $(this).parents("tr").data('id');
                $("#confirm_destroy").attr("href", "/Admin/department/destroy/id/" + id);
            })
            //多选
            $("#checkAll").click(function () {
                $(".check_destroy").prop("checked", this.checked);
            })
            //多选删除
            $(".del_all_flinks").click(function () {
                var length = $(".check_destroy:checked").length;
                if (length == 0) {
                    alert('你必须至少选中一条记录');
                    return false;
                }
                $("#form").attr("action", "<?php echo U('destroy_checked');?>").submit();
            })
            //排序
            $(".sort_flinks").click(function () {
                $("#form").attr("action", "<?php echo U('sort_order');?>").submit();
            })
        })
    </script>

</body>
</html>