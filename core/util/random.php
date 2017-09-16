<?php

namespace core\util;

class random{
    public function get_random_string($length){
        $str = null;
        $str_pool = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($str_pool)-1;
        for($i=0;$i<$length;$i++){
            //rand($min,$max)生成介于min和max两个数之间的一个随机整数
            $str.=$str_pool[rand(0,$max)];
        }
        return $str;
    }
}
?>