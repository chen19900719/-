<?php
namespace Admin\Controller;
class ArticleController extends CommonController
{
    var $article;
    var $category;

    function __construct()
    {
        parent::__construct();
        $this->article = M("article");
        $this->category = D("Category");
    }

    function index()
    {
        $article = D("article");
        $articles = $article->all();
        $this->assign('articles', $articles);
        $this->display();
    }

    public function create()
    {

        $article = D("article");
        $articles = $article->all();
        $this->assign('articles', $articles);
        $this->display();
    }

    public function store()
    {
        //自动完成
        //implode explode
        $data['files'] = implode('|', array_filter(I("post.file")));
        dump($data);
        dump($_POST);
        exit;
        $this->article->create();
        $this->article->add();
        F('categories', NULL);
        $this->success("新增成功", U('index'));

    }
}