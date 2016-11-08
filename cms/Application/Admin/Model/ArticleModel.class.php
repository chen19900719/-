<?php
namespace Admin\Model;

use Think\Model\RelationModel;

class ArticleModel extends RelationModel
{

//    protected $_link = array(
//        'category' => array(
//            'mapping_type' => self::HAS_MANY,
//            'mapping_name' => 'children',
//        ),
//    );


    function all()
    {
        if (!F('articles')) {
            $articles = $this->relation(true)->select();
            F('articles', $articles);
        }

        return F('articles');
    }

}
