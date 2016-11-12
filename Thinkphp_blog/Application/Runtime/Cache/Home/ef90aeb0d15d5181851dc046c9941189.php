<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html /Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    <link href="/Public/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo"></div>
        <div class="blog-header">
            <div class="blog-title"><IMG SRC="/Public/images/logo.png"  style="border:1px solid gray" BORDER="0" ALT="" align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a></div>
            <div class="blog-desc">武汉长乐教育PHP培训</div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">日志首页</a></li>
                <li><a href="">撰写日志</a></li>
                <li><a href="">官方网站</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="article-top">
                <div class="prev-article"><a href="#"><?php echo ($prev_link); ?></a></div>
                <div class="next-article"><a href="#"><?php echo ($next_link); ?></a></div>
            </div>
            <div class="textbox-title">
                <h4>
                    <img src="/Public/Images/icon_ctb.gif" width="11" height="11" border="0"  align="absmiddle">
                    <?php echo ($article["title"]); ?>
                </h4>
                <div class="textbox-label">
                    [<span style="color:gray;font-weight:normal"><?php echo (date("Y-m-d H:i:s",$article["time"])); ?> 发表在 <a href="#"></span>  ]
                </div>
            </div>
            <div class="textbox-content">
               <?php echo ($article["content"]); ?>
            </div>

            <div class="textbox-bottom"> <img src="/Public/images/cm_t_ArtRank2.gif" width="12" height="12" border="0"  align=""> <a href="#reply">我有话要说</a></div>
            <div class="textbox-urls" align="right"></div>
            <div class="no-comment-box"> [ 管理：<a href="/index.php/Home/Index/edit/id/{$vo.id}" target="_blank">编辑日志</a> <a href="#">删除日志</a> ]</div>
            <div id="comments">
                <?php if(is_array($article["comment"])): $i = 0; $__LIST__ = $article["comment"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><div class="commentbox">
                    <a ></a> <div class="commentbox-title" > <a><?php echo ($c["username"]); ?></a> 发表的评论 <span style="color:gray">[ 2014-9-11 15:20:20 ]</span>
                    <a href="index.php?a=des_comment&id=<?php echo ($c["id"]); ?>">删除评论</a></div>
                    <div class="commentbox-content"><?php echo ($c["content"]); ?></div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>




            </div>
            <a name="reply"></a>
            <div id="comment">
                <div id="result" class="result none"></div>

                <form method="post" id="form1" action="index.php?action=show" >
                    <table cellpadding=3 cellspacing=3 width="450px">
                        <tr>
                            <td class="tRight tTop"></td>
                            <td class="tLeft">用户名：<input type="text" name="username" class="text"  ></td>
                        </tr>
                        <tr>
                            <td class="tRight tTop"></td>
                            <td class="tLeft"><html:editor type="ubb"  id="editor" width="450px" height="185px" name="content"></html:editor></td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td class="center">
                                <input type="hidden" name="ajax" value="1">
                                <input type="hidden" name="module" value="Blog">
                                <textarea cols="70" rows="6" name="content"></textarea>
                                <br />
                                <div class="fLeft hMargin">
                                    <input type="submit" value="发表评论" class="submit small">
                                </div>
                            </TD>
                        </tr>
                    </TABLE>
                </form>

            </div>
        </div>
    </div>


        {{include file='sidebar.html'}}

</div>
<!-- 版权信息区域 -->
<div id="footer" class="footer" >
    <div id="innerFooter">Powered by 武汉长乐教育 |  <a target="_blank" href="http://www.whphp.com">whphp</a></div>
</div>
</body>
</html>