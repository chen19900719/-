<?php
namespace Home\Controller;

use Think\Controller;
use EasyWeChat\Foundation\Application;

class WechatController extends Controller
{

    public function check()
    {
        $app = new Application(C('weixin'));
        $oauth = $app->oauth;
        // 未登录
        if (empty($_SESSION['wechat_user'])) {
            $_SESSION['target_url'] = '/';
            $oauth->redirect()->send();
            // 这里不一定是return，如果你的框架action不是返回内容的话你就得使用
            // $oauth->redirect()->send();
        }

    }

    public function oauth_callback()
    {
        $app = new Application(C('weixin'));
        $oauth = $app->oauth;
        // 获取 OAuth 授权结果用户信息
        $user = $oauth->user();
        $_SESSION['wechat_user'] = $user->toArray();
        $targetUrl = empty($_SESSION['target_url']) ? '/' : $_SESSION['target_url'];
        header('location:' . $targetUrl); // 跳转到 user/profile
    }


}