<?php
namespace Admin\Controller;
class CategoryController extends CommonController
{
    var $category;

    function __construct()
    {
        parent::__construct();
        $this->category = M("category");
    }

    function index()
    {
        $Category = D("Category");
        $categories = $Category->all();
        $this ->assign('categories',$categories);
        $this->display();
    }

    public function create()
    {
        $Category = D("Category");
        $categories = $Category->all();
        $this->assign('categories', $categories);
        $this->display();
    }

    public function store()
    {
        $this->category->create();
        $this->category->add();
        F('categories', NULL);
        $this->success("新增成功", U('index'));


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
        F('categories', NULL);
        $this->success("编辑成功", U('index'));
    }

    public function destroy()
    {
        $id = I("get.id");


        $this->category->delete($id);
        F('categories', NULL);
        $this->success('删除成功');
    }

    public function destroy_checked()
    {
        $checkd = I("post.destroy_checked");
        foreach ($checkd as $id) {
            $this->category->delete($id);
        }
        $this->success('删除成功 ');
    }
}


