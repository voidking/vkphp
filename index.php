<?php
/**
 * 入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 */

define('VKPHP',realpath('./')); //获取项目所在根目录
define('CORE',VKPHP.'/core'); //核心文件所在目录
define('APP',VKPHP.'/app'); //应用文件所在目录

define('DEBUG',true); //是否开启调试

if(DEBUG){
    ini_set('display_errors', 'On');
}else{
    ini_set('display_errors', 'Off');
}

include CORE.'/common/function.php';
//p(VKPHP);
include CORE.'/vk.php';

//将函数注册到SPL __autoload函数队列中。
//spl_autoload_register(function ($class_name) {
//    require_once $class_name . '.php';
//});

include CORE.'/autoload.php';
spl_autoload_register('\core\autoload::load');

\core\vk::run();
