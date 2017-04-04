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
        $User = D('User');//实例化模型
        if (!$User->create()) {
            $this->error($User->getError());
        } else {
            $User->add();
            $this->success('注册成功', U('login'));
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
            $this->error("验证码错误");
        }
        $User = M('User');
        $data['username'] = I("post.username");
        $data['password'] = md5(I("post.password"));
        $user = $User->where($data)->find();
        if (!$user) {
            $this->error("账号密码错误");
        }
        $token = $user['token'];
        if (isset($_POST['rem'])) {
            setcookie('token', $token, time() + 60 * 60 * 24 * 7, '/');
        } else {
            setcookie('token', $token, null, '/');
        }
        $this->success("登录成功", U('Index/index'));
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

    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function check_verify($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    function logout()
    {
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) {
            setcookie('session_name()', '', time() - 3600, '/');//退出存贮的session
        }
        if (isset($_COOKIE['token'])) {
            setcookie('token', '', time() - 3600, '/');//退出存贮的cookie
        }
        $this->success('您已经安全退出', U('User/login'));
    }

    public function email()
    {
        $this->display();
    }

    public function send()
    {
        $map ['email'] = $_POST ['email'];
        $info = M('user')->where($map)->find();
        if ($info) {
            ////$this->success ( '发送成功...', U ( 'Email/email' ), 2 );
            $key = md5($info ['username'] . '+' . $info ['password']); // MD5不可逆，验证$string中username，防止URL更改username
//            $time = time();
//            $code = md5('mytime' . $time);

            // 生成URL

            $findpwd = $_SERVER ['HTTP_HOST'] . U('reset_password') . '?key=' . $key;
//                . '&time=' . $time . '&code=' . $code; // code是用来检验time是否有修改过


            // 调用发送邮件函数
            $username = $info ['username'];
            $title = "找回密码";

            $content = "<h3>亲爱的：$username 用户</h3>
			<br><br><a href=\"http://$findpwd\">找回密码链接</a>
			<br><br><br><h4>有效期30分钟</h4>
			<br><br>
			<img src='http://www.huabian.com/uploadfile/2014/0716/20140716101245193.jpg'>";

            $from = "cm181123@163.com"; //修改为你的发送邮箱
            $to = $info ['email'];
            $this->reset_password = M('reset_password');
            $data = array();
            $data['key'] = $key;
            $data['email'] = $from;
            $this->reset_password->add($data);
            $status = send_mail($title, $content, $from, $to);

            if ($status == 1) {
                $this->success('发送邮件成功...', U('login'), 2);
            } else {
                $this->error('发送邮件失败...');
                exit ();
            }

        } else {
            $this->error('此邮箱未注册');
            exit ();
        }

    }

    public function reset_password()
    {
        $key = I('get.key');
        $this->assign('key', $key);
        $this->display();
    }


    public function do_password()
    {
        $data = array();
        $data['key'] = I('post.key');
        $info = M('reset_password')->where($data)->find();
        $password = I("post.password");
        $check_password = I("post.check_password");
        $email = $info['email'];
        $user = M('User')->where("email='$email'")->find();
        $id = $user['id'];
        if (!$data['key']) {
            $this->error("未知错误");

        }
        if ($check_password != $password) {
            $this->error("两次输入密码不一致");
        }
        M('User')->where("id='$id'")->setField('password', md5($password));
        $this->success('修改成功', U('login'), 2);

    }


}