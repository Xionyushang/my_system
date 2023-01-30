<?php

class seller {
    public $mysql;
    public  $table = 'my_test';
    public  $id = 'id';

    function __construct($mysql) {
        if ($mysql != '') {
            $this->mysql = $mysql;
        }
    }

    function read($array) {
        extract($array);
        $sql = "select * from {$this->table} ";
        $sql .= empty(${$this->id}) ? " where 1=1 " : " where {$this->id}='{${$this->id}}' ";

        $sql .= empty($find_user_name) ? "" : " and user_name='{$find_user_name}' ";
        $sql .= empty($find_user_id) ? "" : " and user_id='{$find_user_id}' ";
        $sql .= empty($find_email) ? "" : " and email='{$find_email}' ";

        return $this->mysql->data_query($sql);
    }

    function update($array) { //修改
        extract($array);
        $sql = "UPDATE {$this->table} SET 
				user_name=\"{$user_name}\",
				user_id=\"{$user_id}\",
				user_password=\"{$user_password}\",
				email=\"{$email}\"

				WHERE {$this->id}=\"{${$this->id}}\"
				;";
        return $this->mysql->data_update($sql);
    }

    function delete($id) {
        $sql = "delete FROM {$this->table} where {$this->id}=\"{$id}\"";
        return $this->mysql->data_delete($sql);
    }
}
