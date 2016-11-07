<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller
{
       public function register()
        {
            $this->display('User/register');
        }
       public function do_register()
        {
            $User= D('User');//实例化模型
            if(!$User->create()){
               $this->error($User->getError());
            }else{
              $User->add();
              $this->success('注册成功',U('login'));
            }
        }
        public function login()
        {
            $this->display();
        }
        public function do_login()
        {
            $code = I("post.code");
            if (!$this->check_verify($code)) {
                $this->error('验证码错误');
            }
            $data['usename'] = I("post.username");
            $data['password'] = md5(I("post.password"));
            $User = M('User');
            $user = $User->where($data)->find();
            if (!$user) {
                $this->error('账号或密码错误');
            }
            $token = $user['token'];
            if (isset($_POST['rem'])) {
                setcookie('token', $token, time() + 60 * 60 * 24 * 7, '/');
            } else {
                setcookie('token', $token, null, '/');
            }
            $this->success('登录成功', U('Index/index'));
        }

             public function verify()
             {
                 $config = array(
                    'length' => 4,     // 验证码位数
                    'codeSet' => '0123456789', // 关闭验证码杂点
                );
                $Verify = new \Think\Verify($config);
                $Verify->entry();
             }

            function check_verify($code, $id = '')
            {
                $verify = new \Think\Verify();
                return $verify->check($code, $id);
            }


            function logout()
            {
                $_SESSION=array();
                if(isset($_COOKIE[session_name()])){
                    setcookie('session_name()','',time() - 3600,'/');
                }
                if(isset($_COOKIE['token'])){
                    setcookie('session_name()','',time() - 3600,'/');
                }
                $this->success('您已经安全退出',U('User/login'));
            }

}