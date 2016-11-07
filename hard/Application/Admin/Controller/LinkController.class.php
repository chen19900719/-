<?php
namespace Admin\Controller;
class LinkController extends CommonController
{
        public function __construct()
        {
            parent:: __construct();
            $this->link=M('link');

        }
        public function index()
        {
            $links= $this->link->order("sort_order")->select();
            $this->assign('links',$links);
            $this->display();

        }
        public function store()
        {
            $this->link->create();
            $this->link->add();
            $this->success('新增成功');
        }
        public function update()
        {
            $this->link->create();
            $this->link->save();
            $this->success('修改成功');
        }
        public  function destroy()
        {
            $id=I("get.id");
            $this->link->delete($id);
            $this->success('删除成功');
        }
        //多选删除
        public function destroy_checked()
        {
            $checked=I("post.destroy_checked");
            foreach($checked as $id){
                $this->link->delete($id);
            }
            $this->success('删除成功');
        }

    public function sort_order()
    {

        $id = I("post.id");
        $sort_order = I("post.sort_order");
        foreach($id as $k =>$v){
            $this->link->where("id='$v'")->setField('sort_order',$sort_order[$k]);
        }
        $this->redirect("index");

    }

}