<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>设置密码</title>
    <style style type="text/css">
        * {
            font-family: "Microsoft YaHei", Arial, Helvetica, sans-serif, "宋体";
        }
    </style>

</head>
<body>
<form action="<?php echo U('do_password');?>" method="post">
    <input type="hidden" name="key" value="<?php echo ($key); ?>">
    密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 码：<input type="password" name='password'><br><br>
    确认密码：<input type="password" name='check_password'><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="提交">

</form>
</body>
</html>