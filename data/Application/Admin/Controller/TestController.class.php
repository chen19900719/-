<?php
namespace Admin\Controller;

use Think\Controller;

class TestController extends Controller
{
    public function run()
    {
        \Predis\Autoloader::register();

        $info = M('user')->getField('email', true);
        $redis = new \Predis\Client();
        $redis->connect('127.0.0.1', 6379);
        foreach ($info as $k => $v) {
            $redis->rpush("mylist", $v);
        }
        $value = $redis->lpop('mylist');
        $data = array();
        $data['email'] = $value;
        M('email')->add($data);

    }

}