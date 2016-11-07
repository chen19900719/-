<?php
namespace Admin\Model;

use Think\Model\RelationModel;

class ArticleModel extends RelationModel
{
    protected $_link = array(
        'category'=> self::BELONGS_TO,
    );
    protected $_validate = array(
        array('title','require','标题必须有！'),  // 标题必需有
        array('content','require','内容必须有！'),  // 内容必须有
        array('title','0,45','标题长度不符！',3,'length'),  // 长度验证
        array('content','0,255','内容长度不符！',3,'length'), // 长度验证
    );

    protected $_auto = array(
        array('files', 'make_files', 3, 'callback'), // 对file字段在新增和编辑的时候使用函数处理
        array('time', 'strtotime', 3, 'function'), // 对password字段在新增和编辑的时候使函数处理
    );

    function make_files($files)
    {
        return implode('|', array_filter($files));
    }


}