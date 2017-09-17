<?php
/**
 * 路由控制
 */
namespace core;

class route{
    public $dir='';
    public $ctrl='index';
    public $action='index';
    public $params=array();
    public $http_get_params='';
    public function __construct(){
        //echo 'route is ready!';

        /**
         * 1、隐藏index.php
         * 2、获取URL中的控制器和方法
         * 3、获取URL中的参数
         */
        $this->ctrl = \core\conf::get('CTRL','route_config');
        $this->action = \core\conf::get('ACTION','route_config');
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/' ){
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('?',trim($path, '/'));
            if(isset($patharr[1])){
                $this->http_get_params = $patharr[1];
            }
            $patharr = $patharr[0];
            $patharr = explode('/',trim($patharr, '/'));
        }else{
            $patharr = array();
        }
        //echo json_encode($_SERVER);
        //var_dump($patharr);
        $os = strtoupper(substr(PHP_OS,0,3))==='WIN'? 'windows':'linux';
        $arr = $os==='windows'? explode('\\',VKPHP) : explode('/',VKPHP);
        $project_name = end($arr);
        if(isset($_SERVER['HTTP_HOST']) && isset($patharr[0]) && $patharr[0] == $project_name){
            // 去掉项目名称
            $patharr = array_slice($patharr,1,count($patharr)-1);
        }

        if(isset($patharr[0])){
            if($patharr[0] == 'index.php'){
                // 去掉index.php
                $patharr = array_slice($patharr,1,count($patharr)-1);
            }
            $dir_path = APP.'/ctrl'.'/'.$patharr[0];
            if(is_dir($dir_path)){
                $this->dir = $patharr[0];
                $patharr = array_slice($patharr,1,count($patharr)-1);
            }
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
            }
            if(isset($patharr[1])){
                $this->action = $patharr[1];
            } 
            
            $count = count($patharr);
            $i=2;
            while($i < $count){
                if(isset($patharr[$i+1])){
                    $this->params[$patharr[$i]] = $patharr[$i+1];
                }
                $i = $i + 2;
            }
        }
        
        // p($this->ctrl);
        // p($this->action);
        // p($this->params);
    }
}