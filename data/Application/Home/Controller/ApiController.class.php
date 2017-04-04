<?php
namespace Home\Controller;

use Think\Controller;

use EasyWeChat\Foundation\Application;

class ApiController extends Controller
{


    public function serve()
    {
        dump(C('weixin'));
        exit;
        $app = new Application(C('weixin'));
        $server = $app->server;


        $response = $server->serve();
        $response->send();
    }





}