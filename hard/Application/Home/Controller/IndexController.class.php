<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->category = D('category');
        $this->article = M('article');
    }

    public function index()
    {
        $categories = $this->category->all();
        $children = $this->category->where("is_show=0")->select();
        $articles = $this->article->select();
        $this->assign('children',$children);
        $this->assign('articles', $articles);
        $this->assign('categories', $categories);
        $this->display();
        F('categories', NULL);
    }

    public function article()
    {
        $id=I("get.id");
        $categories = $this->category->all();
        $articles = $this->article->where("id='$id'")->select();;
        $this->assign('categories', $categories);
        $this->assign('articles', $articles);
        $this->display("Article/article");
    }

    public function lists()
    {
        $category_id = I("get.id");
        $categories = $this->category->all();
        $children = $this->category->where("parent_id='$category_id'")->getField('id', true);
        if ($children) {
            $data['category_id'] =  array('in', $children);;
            $articles = $this->article->where($data)->select();
        } else {
            $articles = $this->article->where("category_id='$category_id'")->select();
        }
        $this->assign('categories', $categories);
        $this->assign('articles', $articles);
        $this->display("Lists/lists");
        F('categories', NULL);
    }

    public function show()
    {
        $id = I("get.id");
        $categories = $this->category->all();
        $articles = $this->article->where("id='$id'")->select();
        $this->assign('categories', $categories);
        $this->assign('articles', $articles);
        $this->display("Show/show");
        F('categories', NULL);
    }

    public function chat()
    {

    }
}