<?php
namespace core;

class model extends \core\medoo{
    public $table_name = '';
    public function __construct($table_name){
        $name_arr = explode('\\',$table_name);
        $this->table_name = strtolower(end($name_arr));
        parent::__construct();
        //dump($this->table_name);
    }

    public function list_all(){
        $ret = $this->select($this->table_name,'*');
        return $ret;
    }

    public function find_by_id($id){
        $ret = $this->select($this->table_name,'*',['id'=>$id]);
        return $ret;
    }

    public function find_by_condition($condition){
        $ret = $this->get($this->table_name,'*',$condition);
        return $ret;
    }

    public function list_by_condition($condition){
        $ret = $this->select($this->table_name,'*',$condition);
        return $ret;
    }

    public function add($data){
        $ret = $this->insert($this->table_name,$data);
        return $this->id();
    }

    public function del($condition){
        $ret = $this->delete($this->table_name,$condition);
        return $ret->rowCount(); // 受影响的行数
    }

    public function edit($data,$condition){
        $ret = $this->update($this->table_name,$data,$condition);
        return $ret->rowCount();
    }

}