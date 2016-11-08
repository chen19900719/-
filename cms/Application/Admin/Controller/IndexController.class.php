<?php
namespace Admin\Controller;
class IndexController extends CommonController {
    public function index()
    {
        $this->display();
    }

    public function test()
    {

        echo '测试页面';
    }
}