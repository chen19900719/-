<?php
namespace Admin\Controller;
class ArticleController extends CommonController
{
    var $article;
    var $category;

    public function __construct()
    {
        parent::__construct();
        $this->article = M("article");
        $this->category = M("category");
    }

    public function index()
    {
        $Article = D('Article');
        $count = $Article->where('status=1')->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $articles =$Article->relation(true)->where('status=1')->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('page', $show);// 赋值分页输出
        $this->assign("articles", $articles);
        $this->display();
    }

    public function create()
    {
        $Article = D('Article');
        $articles = $Article->select();
        $categories = $this->category->select();
        $this->assign('categories', $categories);
        $this->assign("articles", $articles);
        $this->display();
    }

    public function store()
    {
        $Article = D('Article');
        if (!$Article->create()) {
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($Article->getError(''));
        } else {
            $Article->add();
            $this->success('新增成功', U("index"));
        }

    }

    public function edit()
    {

        $id = I("get.id");
        $article = $this->article->find($id);
        $categories = $this->category->select();
        $this->assign('categories', $categories);
        $this->assign("article", $article);
        $files = explode('|', $article['files']);
        $this->assign('files', $files);
        $this->display();
    }

    public function update()
    {
        $Article = D('Article');
        if (!$Article->create()) {
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($Article->getError());
        } else {
            $Article->save();
            $this->success('修改成功', U("index"));
        }
    }

    public function destroy()
    {
        $id = I("get.id");
        $this->article->find($id);
        $this->article->where("id='$id'")->setField("status", 0);
        $this->success('删除成功', U("index"));
    }

    public function status()
    {
        $Article = D('Article');
        $articles = $Article->relation(true)->where("status=0")->select();
        $this->assign("articles", $articles);
        $this->display();
    }

    public function restore()
    {
        $id = I("get.id");
        $this->article->find($id);
        $this->article->where("id='$id'")->setField("status", 1);
        $this->success('还原成功');
    }

    public function do_destroy()
    {
        $id = I("get.id");
        $this->article->find($id);
        $this->article->delete($id);
        $this->success('删除成功');
    }

    public function destroy_checked()
    {
        $checked = I("post.destroy_checked");
        foreach ($checked as $id) {
            $this->article->where("id='$id'")->select();
            $this->article->where("id='$id'")->setField("status", 0);
        }
        $this->success('删除成功');
    }

    public function finder()
    {
        $this->display();
    }

}