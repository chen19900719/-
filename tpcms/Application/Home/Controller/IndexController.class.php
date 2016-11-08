<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    var $article;
    public function __construct()
    {
        parent::__construct();
       $this->article=M('article');
    }

    public function index()
    {
        $articles=$this->article->select();
        $this->assign('articles',$articles);
        $this->display();
    }
    public function store()
    {
        $time=time();
        $this->article->create();
        $this->article->time=$time;
        $this->article->add();
        echo $time;
    }

}