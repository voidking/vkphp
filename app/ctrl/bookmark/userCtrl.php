<?php
namespace app\ctrl\bookmark;

class userCtrl extends \core\render{
    public function index(){
        echo 'user ctrl';
    }

    public function captcha(){
        $captcha = new \core\util\captcha();
        $captcha->get_captcha();
    }

    public function check(){
        $code = $_POST['code'];
        $captcha = new \core\util\captcha();
        $ret = $captcha->check($code);
        if($ret == 0){
            $result = array(
                'code'=>'0',
                'ext'=>'验证成功'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
        }else if($ret == -1){
            $result = array(
                'code'=>'-1',
                'ext'=>'验证码错误'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
        }else if($ret == -2){
            $result = array(
                'code'=>'-2',
                'ext'=>'请先获取验证码'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
        }
    }

    public function reg(){
        if(!(isset($_POST['username']) 
            && isset($_POST['password']) 
            && isset($_POST['password2'])
            && isset($_POST['captcha'])
            && $_POST['username'] !== ''
            && $_POST['password'] !== ''
            && $_POST['password2'] !== '')
            && $_POST['captcha'] !== ''
        ){
            $result = array(
                'code'=>'-1',
                'ext'=>'参数不能为空'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            return;
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $captcha = $_POST['captcha'];


        if($password !== $password2){
            $result = array(
                'code'=>'-2',
                'ext'=>'两次密码不同'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            return;
        }

        $salt = \core\util\random::get_random_string(16);
        $password = md5($password.$salt);
        $data = array(
            'username'=>$username,
            'password'=>$password,
            'salt'=>$salt
        );
        $user = new \app\model\user();
        $ret = $user->find_by_condition(['username'=>$username]);
        if($ret){
            $result = array(
                'code'=>'-2',
                'ext'=>'用户名已存在'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            return;
        }
        $user_id = $user->add($data);
        if($ret >= 1){
            $result = array(
                'code'=>'0',
                'user_id'=>$user_id,
                'ext'=>'注册成功'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
        }
    }
}