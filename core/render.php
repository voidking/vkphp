<?php

namespace core;

class render{
    
    public $smarty;
    public function __construct(){
        //ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.LIB.'/smarty/libs');

        require_once(LIB.'/smarty/libs/Smarty.class.php');

        $this->smarty = new \Smarty();

        $this->smarty->setTemplateDir(APP.'/smarty/templates/');
        $this->smarty->setCompileDir(APP.'/smarty/templates_c/');
        $this->smarty->setConfigDir(APP.'/smarty/configs/');
        $this->smarty->setCacheDir(APP.'/smarty/cache/');
    }

    public $params = array();
    public function assign($name,$value){
        $this->params[$name] = $value;
    }

    public function display($file){
        $file = APP.'/view/'.$file;
        if(is_file($file)){
            extract($this->params); //把数组变成变量
            include $file;
        }
    }
}