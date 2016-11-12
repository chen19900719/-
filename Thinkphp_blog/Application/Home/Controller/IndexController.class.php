<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    var $article;
    var $category;


    function __construct()
    {
        parent::__construct();
        $this->article = M('Article');
        $this->category = M('Category');

    }

    public function index()
    {
        $Article = D('Article');
        $articles = $Article->relation(true)->select();
        $this->assign('articles', $articles);
        $this->display();
    }

    function create(){
        $categories=$this->category->select();
        $this->assign('categories',$categories);
        $this->display();
    }
    function store()
    {
        //$date['title'] = I("post.title");
        //$date['content']=I("post.content");
        //$date['time']=time();
        //$this->article->add($data);
        $this->article->create(); //组装数据
        $this->article->time=time();
        $this->article->add();
        //echo $this->article->getLastSql();
        //exti;
        $this->success('新增成功',U('index'));
    }
    function destroy()
    {
        $id=I("get.id");
        $this->article->delete($id);
        $this->success('删除成功');
    }
    function show()
    {
        $id=I("get.id");
        $Article=D('Article');
        $article=$Article->relation(true)->find($id);
        $this->article->where("id=$id")->setInc('view');
        $this->assign('article',$article);
        $this->display();
    }
    function edit()
    {
        $id = I("get,id");
        $categories=$this->category->select();
        $article = $this->article->find($id);
        $this->assign('categories', $categories);
        $this->assign('article', $article);
        $this->display();
    }

    function update()
    {
        $Article = D("Article");//实例化User对象
        if(!$Article->create()){
            $this->error($Article->getError());
        }else{
            $Article->save();
            $this->success('修改成功',U('index'));
        }

    }
}
