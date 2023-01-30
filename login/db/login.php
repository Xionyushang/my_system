<?php
class login {
	public $mysql;
	private $table = 'my_test';
	private $id = 'id';

	function __construct($mysql) {
		if ($mysql != '') {
			$this->mysql = $mysql;
		}
	}

	//讀出user資料
	function read($user_id, $user_password) {
		$sql = "SELECT * FROM {$this->table} WHERE user_id='$user_id' AND user_password='$user_password' ;";
		return $this->mysql->data_read_one($sql);
	}

	//讀出一筆
	function read_one($id) {
		$sql = "SELECT * FROM {$this->table} WHERE {$this->id}=$id";
		return $this->mysql->data_read_one($sql);
	}

	function create($array) { //新增
		extract($array);
		$sql = "INSERT INTO {$this->table} SET 
					user_name=\"{$user_name}\",
					user_id=\"{$user_id}\",
					user_password=\"{$user_password}\",
					email=\"{$email}\"
					;";
		return $this->mysql->data_creat($sql);
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
}
