<?php
namespace app\ctrl\bookmark;

class manage_ctrl extends \core\render{
    public function index(){
        $this->smarty->assign('basepath',$this->basepath);
        $this->smarty->assign('assets',$this->assets);
        $this->smarty->display('bookmark/manage/index.html');
    }
}