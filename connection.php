<?php
class database{

	public $host = "localhost";
	public $hostname = "root";
	public $pass = "";
	public $db = "user_data";
	public $conn;




	 function __construct(){

		$this->conn = mysqli_connect($this->host,$this->hostname,$this->pass,$this->db);

		//return $this->conn;
	}

}

//$obj = new database();



?>