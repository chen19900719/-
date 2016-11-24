<?php
namespace Admin\Model;

use Think\Model\RelationModel;

class CategoryModel extends RelationModel
{
    protected $_link = array(
        'category' => array(
            'mapping_type' => self::HAS_MANY, //一级栏目与二级栏目的关系
            'mapping_name' => 'children',  //二级栏目定义为一个子数组children
        ),
    );

    function all()
    {
        if (!F('categories')) {
            $categories = $this->relation(true)->where("parent_id=0")->order("sort_order")->select();
            F('categories', $categories);
        }

        return F('categories');
    }

    function do_destroy($id)
    {
        $result = array();
        $children = $this->where("parent_id='$id'")->find();
        if ($children) {
            $result['info'] = "必须先删除子栏目";
            $result['status'] = 0;
            return $result;
        }
        $Aritcle = M('Article');
        $article = $Aritcle->where("category_id='$id'")->find();
        if ($article) {
            $result['info'] = "必须先删除文章";
            $result['status'] = 0;
            return $result;
        }

        $result['status'] = 1;
        return $result;

    }

}