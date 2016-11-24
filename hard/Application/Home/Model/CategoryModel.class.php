<?php
namespace Home\Model;

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
        if (!F('HYAC_category')) {
            $categories = $this->relation(true)->where("parent_id=0 and is_show=1")->select();
            foreach ($categories as &$value){
                $value['link']=$this->make_link($value);
                foreach ($value['children'] as &$v){
                    $v['link']=$this->make_link($v);
                }
            }
            F('HYAC_category',$categories);
        }
        return F('HYAC_category');
    }

    function make_link($category)
    {
        switch ($category['type']) {
            //封面
            case '1':
                $link = U("article", array('id' => $category['id']));
                break;
            //列表
            case '2';
                $link = U('lists', array('id' => $category['id']));
                break;
            //url跳转
            case '3';
                $link = $category['url'];
                break;
        }
        return $link;
    }


}