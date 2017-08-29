<?php
/**
 * 路由控制
 */
namespace core;

class route{
    public $ctrl;
    public $action;
    public $params;
    public function __construct(){
        //echo 'route is ready!';

        /**
         * 1、隐藏index.php
         * 2、获取URL中的控制器和方法
         */

        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path, '/'));
            p($patharr);

            if(isset($patharr[0])){
                if($patharr[0] != 'index.php'){
                    // 省略了index.php
                    $this->ctrl = $patharr[0];

                    if(isset($patharr[1])){
                        $this->action = $patharr[1];
                    } else{
                        $this->action = 'index';
                    }

                }else{
                    // 没省略index.php
                    if(isset($patharr[1])){
                        $this->ctrl = $patharr[1];
                    }
                    if(isset($patharr[2])){
                        $this->action = $patharr[2];
                    } else{
                        $this->action = 'index';
                    }
                }
            }else{
                $this->ctrl = 'index';
                $this->action = 'index';
            }

        }else{
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}