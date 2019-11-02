<?php
//error_reporting(0);
class BaseConn{
	
		public $host;
		public $host_username;
		public $host_password;
		public $host_db;
		
		function isDB($x){
			$base = array(
				'host' => $this->host,
				'host_username' => $this->host_username,
				'host_password' => $this->host_password,
				'host_db' => $this->host_db
			);
			return $base[$x];
}

	function isBase(){
		return mysqli_connect($this->host,$this->host_username,$this->host_password,$this->host_db);
	}
	
	function isHost(){
		$check=mysqli_connect($this->host,$this->host_username,$this->host_password);
		if($check){
			return true;
		} else {
			return false;
		}
	}
	
	function isConn(){
		$check=mysqli_connect($this->host,$this->host_username,$this->host_password,$this->host_db);
		if($check){
			return true;
		} else {
			return false;
		}
	}
}
?>