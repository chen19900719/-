<?php
namespace Admin\Model;

use Think\Model;

class UserModel extends Model
{
    protected $_validate = array(
        array('verify', 'require', '验证码必须！'), //默认情况下用正则进行验证
        array('username', 'require', '用户名必须！'), //默认情况下用正则进行验证
    );

    protected $_auto = array(
        array('password', 'md5', 3, 'function'), // 对password字段在新增和编辑的时候使md5函数处理
        array('token', 'get_token', 1, 'callback'),
    );

    function get_token()
    {
        return md5(uniqid());
    }
}