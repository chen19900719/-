<?php
namespace Home\Model;
use Think\Model\RelationModel;
class ArticleModel extends RelationModel{
    protected $_link = array(
        'category'=> self::BELONGS_TO,
        'comment'=> self::HAS_MANY,
    );
    protected $_validate = array(
        array('title','require','标题必须填写！'), //默认情况下用正则进行验证
        array('title','','标题不能重复！',0,'unique',3), // 在新增的时候验证name字段是否唯一
        array('content','require','内容必须填写！'), //默认情况下用正则进行验证
    );

    protected $_auto = array (
        array('time','time',2,'function'), // 对update_time字段在更新的时候写入当前时间戳
    );





}