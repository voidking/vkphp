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
define('LIB',VKPHP.'/lib'); //第三方库所在目录
define('PUBLIC',VKPHP.'/public'); //静态资源目录
define('CONFIG',VKPHP.'/config'); //配置文件目录

define('DEBUG',true); //是否开启调试

if(DEBUG){
    ini_set('display_errors', 'On');
}else{
    ini_set('display_errors', 'Off');
}

include CORE.'/function.php';
include CORE.'/vk.php';
\core\vk::run();






