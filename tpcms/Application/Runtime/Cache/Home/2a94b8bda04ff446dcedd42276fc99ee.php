<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html cl/Public/amazeui="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>Hello Amaze UI</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="/Public/amazeui/i/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="/Public/amazeui/i/app-icon72x72@2x.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="/Public/amazeui/i/app-icon72x72@2x.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="/Public/amazeui/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">

    <link rel="stylesheet" href="/Public/amazeui/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/amazeui/css/app.css">
</head>
<body>
<div class="am-container">
    <h1>留言版</h1>
    <table class="am-table">
        <thead>
        <tr>
            <th>标题</th>
            <th>内容</th>
            <th>创建时间</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($a["title"]); ?></td>
            <td><?php echo ($a["content"]); ?></td>
            <td><?php echo ($a["time"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<form class="am-form am-form-horizontal">
    <div class="am-form-group">
        <label for="title" class="am-u-sm-2 am-form-label">标题</label>
        <div class="am-u-sm-10">
            <input type="text" id="title" placeholder="" name="title">
        </div>
    </div>

    <div class="am-form-group">
        <label for="content" class="am-u-sm-2 am-form-label">内容</label>
        <div class="am-u-sm-10">
            <textarea class="" rows="5" id="content" name="content"></textarea>
        </div>
    </div>

    <div class="am-form-group">
        <div class="am-u-sm-10 am-u-sm-offset-2">
            <button type="submit" class="am-btn am-btn-default store">提交</button>
        </div>
    </div>
</form>

<!--在这里编写你的代码-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Public/amazeui/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="amazeui/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/Public/amazeui/js/amazeui.min.js"></script>
<script>
    $(function () {
            $('.store').click(function () {
                var title=$("#title").val();
                var content=$("#content").val();
                $.post("<?php echo U('store');?>",{   //回调函数，显示PHP的输出内容
                    title:title,
                    content:content
                },function(data){

                    var html='<tr>'+
                            '<td>'+ title +'</td> ' +
                            '<td>'+ content +'</td> ' +
                            '<td>'+ data +'</td> ' +
                            '</tr>';
                    console.log(data);
                    $("tbody").append(html);

                },"html")
                return false;
            })

    })

</script>
</body>
</html>