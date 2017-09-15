<?php
namespace core;

class medoo extends \Medoo\Medoo{
    public function __construct(){
        $conf = \core\conf::all('medoo_config');
        parent::__construct($conf);
    }
}