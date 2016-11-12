<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html /Public "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    <link href="/Public/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo"></div>
        <div class="blog-header">
            <div class="blog-title"><IMG SRC="/Public/images/logo.png" style="border:1px solid gray" BORDER="0" ALT=""
                                         align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a></div>
            <div class="blog-desc">武汉长乐教育PHP课程-博客系统开发</div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="">日志首页</a></li>
                <li><a href="<?php echo U('create');?>">撰写日志</a></li>
                <li><a href="">官方网站</a></li>
            </ul>
        </div>
    </div>
</div>
<!--中间部分-->
<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="announce text" style="border:1px solid silver;padding:5px;font-size:14px;">
                <h4 style="color:#FF3300"><img src="/Public/images/wav.gif" width="18" height="18" border="0" alt=""
                                               align="absmiddle"> 简单的BLOG示例</h4>
                本示例Blog包括日志的新增、修改、列表、统计、评论和删除等功能,可以作为入门PHP的绝佳示例。<P>请按照下面步骤操作，增加分类、添加日志、增加评论。
            </div>
            <!--
            <div class="article-top">
                <div class="view-mode">浏览模式: <a href="?mode=normal">普通</a> | <a href="?mode=list">列表</a></div><div class="pages">{$page}</div>
            </div>
            -->


            <div>
              <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><div class="textbox-title">
                    <h4>
                        <img src="/Public/images/icon_point2.gif" width="13" height="13" border="0" alt=""
                             align="absmiddle">
                        <a href="<?php echo U('show',array('id'=>$a['id']));?>"><?php echo ($a["title"]); ?></a>
                    </h4>
                    <div class="textbox-label">
                        [<?php echo (date("Y-m-d H:i:s",$a["time"])); ?>  | <a href="#"><?php echo ($a["category"]["name"]); ?></a>]
                    </div>
                </div>

                <div class="textbox-content"><?php echo ($a["content"]); ?></div>
                <div class="textbox-bottom">
                    [ 管理：<a href="<?php echo U('edit' ,array('id'=>$a['id']));?>">编辑</a> <a
                        href="<?php echo U('destroy',array('id'=>$a['id']));?> ">删除</a> ]
                    | <a href="">评论: 15</a> | 浏览: <?php echo ($a["view"]); ?>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

            </div>


            <!--
            <div class="article-bottom">
                <div class="pages">{$page}
                </div>
            </div>
            -->
        </div>
    </div>

    {{include file='sidebar.html'}}

</div>
<!-- 版权信息区域 -->
<div id="footer" class="footer">
    <div id="innerFooter">Powered by 武汉长乐教育 | <a target="_blank" href="http://www.whphp.com">whphp</a></div>
</div>
</body>
</html>