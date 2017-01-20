<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page | Amaze UI Example</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="/vendor/amazeui/i/favicon.png">
    <link rel="stylesheet" href="/vendor/amazeui/css/amazeui.min.css"/>
    <style>
        .header {
            text-align: center;
        }

        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }

        .header p {
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="am-g">
        <h1>shop商城</h1>
        <p>登录界面</p>
    </div>
    <hr/>
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <h3>登录</h3>
        <hr>
        <form method="post" class="am-form" action="{{url('/admin/login')}}" role="form">
            {{csrf_field()}}
            <div class="am-form-group {{ $errors->has('name') ? ' am-form-error' : '' }} am-form-icon am-form-feedback">
                <div class="am-form-group">用户名</div>
                @if ($errors->has('name'))
                    <label class="am-form-label" for="doc-ipt-success">{{ $errors->first('name') }}</label>
                @endif
                <input id="name" type="text" class="am-form-field" name="name"
                       value="{{ old('name') }}" required autofocus placeholder="请输入用户名">
                @if ($errors->has('name'))
                    <span class="am-icon-close"></span>
                @endif
            </div>
            <br>

            <div class="am-form-group {{ $errors->has('password') ? ' am-form-error' : '' }} am-form-icon am-form-feedback">
                <div class="am-form-group">密码</div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <label class="am-form-label" for="doc-ipt-success">{{ $errors->first('password') }}</label>
                    </span>
                @endif

                <input id="password" type="password" class="am-form-field" name="password" required placeholder="请输入密码">
                @if ($errors->has('password'))
                    <span class="am-icon-close"></span>
                @endif
            </div>

            <div class="am-form-group {{ $errors->has('captcha') ? ' am-form-error' : '' }} am-form-icon am-form-feedback">
                <div class="am-form-group">验证码</div>
                @if ($errors->has('captcha'))
                    <span class="help-block">
                        <label class="am-form-label" for="doc-ipt-success">{{ $errors->first('captcha') }}</label>
                    </span>
                @endif

                <div class="am-g">
                    <div class="am-u-sm-8">
                        <input id="captcha" type="text" class="am-form-field" name="captcha" required>
                    </div>
                    <div class="am-u-sm-4">
                        <img src="{{captcha_src()}}" alt="" style="cursor: pointer;"
                             onclick="this.src='{{captcha_src()}}'+ Math.random();">
                    </div>
                </div>
            </div>
            <label for="remember-me">
                <input id="remember-me" type="checkbox">
                记住密码
            </label>
            <br/>
            <div class="am-cf">
                <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
                <a href="{{ url('/admin/register') }}" class="am-btn am-btn-default am-btn-sm am-fr">注册新用户 ^_^?</a>
                <a href="{{ url('/admin/password/reset') }}" class="am-btn am-btn-default am-btn-sm am-fr">忘记密码 ^_^?</a>
            </div>
        </form>
        <hr>
        <p>© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </div>
</div>
</body>
</html>
