<?php

class User_Model extends Base_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getUserAdmin(){
		$sql = "SELECT * FROM guest";
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		if(!empty($query) && $query->num_rows > 0){
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
	}
	public function add($data){
		$password = md5($data['password']);
		$sql = "INSERT INTO guest (username, password, email, role) VALUES('{$data['username']}', '{$password}', '{$data['email']}', '{$data['role']}')";
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}
}