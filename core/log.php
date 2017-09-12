<?php

namespace core;

class log{

    public function log($message,$file_name){
        $log_path = LOG.'/'.$file_name.'-'.date('YmdHis').'.log';
        $message = $message.' '.date('Y-m-d H:i:s');
        file_put_contents($log_path,json_encode($message));
    }
}