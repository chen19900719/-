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
            <div class="col-md-10">

                <div class="page-header">
                    <h1>文章管理
                        <small>articles Manage</small>
                    </h1>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">文章列表</div>
                    <div class="panel-body">
                        <form action="" method="post" id="form">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkAll">全选</th>
                                    <th>标题</th>
                                    <th>所属栏目</th>
                                    <th>发布日期</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><tr data-id="<?php echo ($a["id"]); ?>">
                                        <td><input type="checkbox" class="check_destroy" name="destroy_checked[]"
                                                   value="<?php echo ($a["id"]); ?>"/></td>
                                        <td class="title"><?php echo ($a["title"]); ?></td>
                                        <td class="category_id"><?php echo ($a["category"]["name"]); ?></td>
                                        <td class="time"><?php echo (date("Y-m-d",$a["time"])); ?></td>
                                        <td>
                                            <a href="<?php echo U('edit',array('id'=>$a[id]));?>" class="edit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <a href="<?php echo U('destroy',array('id'=>$a[id]));?>" class="destroy">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </form>
                        <div class="pagination">
                           <?php echo ($page); ?>
                        </div>
                    </div>
                    <div class="panel-body"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="list-group">
                    <a href="<?php echo U('create');?>" class="list-group-item list-group-item-success" >
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 新增 (add)
                    </a>
                    <a href="javascript: void 0;" class="list-group-item list-group-item-info sort_flinks">
                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 排序 (sort)
                    </a>
                    <a href="javascript: void 0;"
                       class="list-group-item list-group-item-warning del_all_flinks">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 刪除 (delete)
                    </a>
                </div>
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
                    <h4 class="modal-title">删除文章</h4>
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


    <script>
        $(function () {
            //删除单条链接
            $('.destroy').click(function () {
                var id = $(this).parents("tr").data('id');
                $("#confirm_destroy").attr("href", "/Admin/Article/destroy/id/" + id);
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