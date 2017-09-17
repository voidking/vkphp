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
define('LIB',VKPHP.'/vendor'); //第三方库所在目录
include LIB.'/autoload.php'; //自动加载第三方库
define('ASSETS',VKPHP.'/assets'); //静态资源目录
define('CONFIG',VKPHP.'/config'); //配置文件目录
define('LOG',VKPHP.'/log'); //日志文件目录

define('DEBUG',true); //是否开启调试

if(DEBUG){
    ini_set('display_errors', 'On');
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}else{
    ini_set('display_errors', 'Off');
}

date_default_timezone_set('Asia/Shanghai');

include CORE.'/function.php';
include CORE.'/vk.php';
\core\vk::run();


