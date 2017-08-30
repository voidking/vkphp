<?php
namespace core\util;
    //echo get_full_url();          
    // http://localhost/purchase/index.php/Buyer/Index/index?username=haojin
    //echo $_SERVER['HTTP_HOST'];   
    // localhost
    //echo $_SERVER['SCRIPT_NAME'];
    // /purchase/index.php
    //echo $_SERVER['PHP_SELF'];
    // /purchase/index.php/Buyer/Index/index
    //echo $_SERVER['PATH_INFO'];   
    // Index/index
    //echo $_SERVER['REQUEST_URI']; 
    // /purchase/index.php/Buyer/Index/index?username=haojin
    //echo $_SERVER['QUERY_STRING'];
    // username=haojin
class url{
    function get_full_url() {
        $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
        $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
        $param = isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info;
        $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
        $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.$param;
        return $sys_protocal.$host.$relate_url;
    }
    function get_script_url() {
        $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
        $php_script = $_SERVER['SCRIPT_NAME'];
        return $sys_protocal.$host.$php_script;
    }
}
