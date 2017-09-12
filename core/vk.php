<?php

namespace core;

class vk{
    public function run(){
        include CORE.'/autoload.php';
        spl_autoload_register('\core\autoload::load');
        $route = new \core\route();

        $ctrl = $route->ctrl;
        $action = $route->action;
        $params = $route->params;
        $ctrl_file = APP.'/ctrl/'.$ctrl.'Ctrl.php';
        $ctrl_class = '\\app\\ctrl\\'.$ctrl.'Ctrl';
        if(is_file($ctrl_file)){
            include $ctrl_file;
            $ctrl_obj = new $ctrl_class;
            $ctrl_obj->$action();
        }else {
            throw new \Exception('找不到控制器'.$ctrl_file);
        }
    }
}