<?php

namespace core;

class log{

    public function log($message,$file_name){
        $log_path = LOG.'/'.$file_name.'-'.date('YmdHis').'.log';
        $message = date('Y-m-d H:i:s').' '.$message;
        file_put_contents($log_path,json_encode($message));
    }
}