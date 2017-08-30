<?php
namespace app\ctrl;

class indexCtrl extends \core\render{
    public function index(){
        echo 'index ctrl';
    }

    public function render(){
        $this->assign('username','voidking');
        $this->display('index/render.html');
    }
}