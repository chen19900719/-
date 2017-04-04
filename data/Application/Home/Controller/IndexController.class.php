<?php
namespace Home\Controller;

use EasyWeChat\Foundation\Application;

class IndexController extends WechatController
{
    public function __construct()
    {
        parent::__construct();
        $this->check();
    }

    public function index()
    {
        $users = M('user')->limit(0, 5)->select();
        $this->assign('users', $users);
        $this->display();
    }

    public function more()
    {
        $page = I("post.page");
        $min = ($page - 1) * 5;
        $users = M('user')->limit($min, 5)->select();
        $this->success($users);
    }

    public function show()
    {
        $app = new Application(C('weixin'));
        $js = $app->js;
        $id = I('get.id');
        $user = M('user')->find($id);
        $this->assign('user', $user);
        $this->assign('js', $js);
        $this->display('Index/show');
    }

}