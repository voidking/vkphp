<?php
namespace app\ctrl\bookmark;

class indexCtrl extends \core\render{
    public function index(){
        echo 'index ctrl';
    }

    public function data(){
        $db = new \core\db();
        $sql = 'select * from vk_user';
        $result = $db->query($sql);
        dump($result);
        dump($result->fetchAll());
    }

    public function render(){
        $this->assign('username','voidking');
        $this->display('index/render.html');
    }

    public function render2(){
        $this->smarty->assign('username','voidking');
        $this->smarty->display('index/render2.html');
    }

    public function conf(){
        // include CORE.'/conf.php';
        $value = \core\conf::get('ACTION','route_config');
        echo $value;
    }

    public function log(){
        $log = new \core\log();
        $log->log('this is log','log_test');
        echo '成功写入日志';
    }

    public function medoo(){
        $medoo = new \core\medoo();
        dump($medoo);

        // 查找
        $ret = $medoo->select('user','*',['username'=>'voidking']);
        dump($ret);

        // 插入
        $data = array(
            'username'=>'voidking1',
            'password'=>'voidking1'
        );
        $ret = $medoo->insert('user',$data);
        dump($medoo->id());

        // 删除
        $ret = $medoo->delete('user',['username'=>'voidking2']);
        dump($ret->rowCount()); // 受影响的行数

        // 修改
        $ret = $medoo->update('user',['username'=>'voidking2'],['username'=>'voidking1']);
        dump($ret->rowCount());
    }

    public function model(){
        $user = new \app\model\user();
        dump($user->list_all());
        dump($user->find_by_id(1));
        dump($user->find_by_condition(['username'=>'voidking']));
        dump($user->add(['username'=>'voidking1','password'=>'voidking1']));
        dump($user->edit(['username'=>'voidking2'],['username'=>'voidking1']));
        dump($user->del(['username'=>'voidking2']));
    }
}