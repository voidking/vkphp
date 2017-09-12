<?php

namespace core;

class conf{

    public function get($name,$file){
        /**
         * 1、判断文件是否存在
         * 2、判断配置是否存在
         */
        $file_path = CONFIG.'/'.$file.'.php';
        if(is_file($file_path)){
            $conf = include $file_path;
            if(isset($conf[$name])){    
                return $conf[$name];
            }else{
                throw new \Exception('没有配置项'.$name);
            }
        }else{
            throw new \Exception('找不到配置文件'.$file);
        }

    }

    public function all($file){
        $file_path = CONFIG.'/'.$file.'.php';
        if(is_file($file_path)){
            $conf = include $file_path;
            return $conf;
        }else{
            throw new \Exception('找不到配置文件'.$file);
        }
    }
}