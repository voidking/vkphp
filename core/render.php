<?php

namespace core;

class render{
    
    public $smarty;
    public $basepath;
    public $assets;
    public function __construct(){

        $this->smarty = new \Smarty();
        $this->smarty->setTemplateDir(APP.'/smarty/templates/');
        $this->smarty->setCompileDir(APP.'/smarty/templates_c/');
        $this->smarty->setConfigDir(APP.'/smarty/configs/');
        $this->smarty->setCacheDir(APP.'/smarty/cache/');

        $url = new \core\util\url();
        $this->basepath = $url->get_root_url();
        $this->assets = $this->basepath.'/assets';
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