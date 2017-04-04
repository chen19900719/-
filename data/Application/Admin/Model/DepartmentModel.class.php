<?php
namespace Admin\Model;

use Think\Model\RelationModel;

class DepartmentModel extends RelationModel
{
    protected $_link = array(

        'department' => array(
            'mapping_type' => self::HAS_MANY, //一级栏目与二级栏目的关系
            'mapping_name' => 'children',  //二级栏目定义为一个子数组children
        ),

    );


}