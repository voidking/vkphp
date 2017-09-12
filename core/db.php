<?php
namespace core;

class db extends \PDO{
    public function __construct(){
        // $dsn = \core\conf::get('DSN','db_config');
        // $user = \core\conf::get('USER','db_config');
        // $passwd = \core\conf::get('PASSWD','db_config');
        $conf = \core\conf::all('db_config');
        $dsn = $conf['DSN'];
        $user = $conf['USER'];
        $passwd = $conf['PASSWD'];
        try{
            parent::__construct($dsn,$user,$passwd);
            // echo 'database connect success';
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}