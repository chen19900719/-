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
        $count = $this->article->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 3);// 实例化分页类
        $show = $Page->show();// 分页显示
        if ($children) {
            $data['category_id'] =  array('in', $children);;
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $articles = $this->article->where($data)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        } else {
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $articles = $this->article->where("category_id='$category_id'")->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        }
        $this->assign('page', $show);// 赋值分页输出
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