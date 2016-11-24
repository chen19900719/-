<?php
namespace Admin\Controller;
class CategoryController extends CommonController
{
    var $category;
    var $article;

    public function __construct()
    {
        parent:: __construct();
        $this->category = M('category');
        $this->article = M('article');
    }


    public function index()
    {
        $Category = D('Category');
        $categories = $Category->all();
        $this->assign('categories', $categories);
        $this->display();
        F('categories', NULL);
    }

    public function create()
    {
        $Category = D('Category');
        $categories = $Category->all();
        $this->assign('categories', $categories);
        $this->display("Category/create");
    }
    public function store()
    {
        $this->category->create();
        $this->category->add();
        $this->success("新增成功", U('index'));
        F('categories', NULL);
    }

    public function edit()
    {
        $id = I("get.id");
        $category = $this->category->find($id);
        $this->assign('category', $category);
        $Category = D('Category');
        $categories = $Category->all();
        $this->assign('categories', $categories);
        $this->display("Category/edit");
    }

    public function update()
    {

        $this->category->create();
        $this->category->save();
        $this->success("编辑成功", U('index'));
        F('categories', NULL);
    }

    public function destroy()
    {
        $id = I("get.id");
//        $articles = $this->article->where("category_id='$id'")->select();
//        $categories = $this->category->where("parent_id='$id'")->select();
//        if ($articles || $categories) {
//            $this->error('需要先删除文章');
//        } else {
//            $this->category->delete($id);
//            $this->success('删除成功');
//        }
//        F('categories', NULL);
        $Category = D("Category");
        $check = $Category->do_destroy($id);
        if (!$check['status']) {
            $this->error($check['info']);
        }

        $this->category->delete($id);
        F('categories', NULL);
        $this->success('删除成功');
      }

    public function destroy_checked()
    {
        $checkd = I("post.destroy_checked");
        foreach ($checkd as $id) {
            $articles = $this->article->where("category_id='$id'")->select();
            $categories = $this->category->where("parent_id='$id'")->select();
            if ($articles || $categories) {
                $this->error('需要先删除文章或者二级栏目');
            } else {
                $this->category->delete($id);
            }
        }
        $this->success('删除成功');
        F('categories', NULL);
    }

    public function sort_order()
    {

        $id = I("post.id");
        $sort_order = I("post.sort_order");
        foreach ($id as $k => $v) {
            $this->link->where("id='$v'")->setField('sort_order', $sort_order[$k]);
        }
        $this->redirect("index");

    }
}