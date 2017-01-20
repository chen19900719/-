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
        <h2>重置密码</h2>
    </div>
    </hr>
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <h3>邮箱地址</h3>
        <hr>
        <div class="am-panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form method="post" class="am-form" action="{{url('/admin/password/email')}}" role="form">
                {{csrf_field()}}
                <div class="am-form-group {{ $errors->has('email') ? ' am-form-error' : '' }} am-form-icon am-form-feedback">
                    @if ($errors->has('email'))
                    <label class="am-form-label" for="doc-ipt-success">{{ $errors->first('email') }}</label>
                    @endif
                    <input id="email" type="email" class="am-form-field" name="email"
                           value="{{ old('email') }}" required autofocus placeholder="请输入邮箱">
                    @if ($errors->has('email'))
                        <span class="am-icon-close"></span>
                    @endif
                </div>
                <div class="am-cf">
                    <input type="submit" name="" value="发送到邮箱 " class="am-btn am-btn-primary am-btn-sm am-fl">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


