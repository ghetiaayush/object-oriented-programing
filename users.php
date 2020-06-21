<?php
session_start();
include"connection.php";
class Users extends database{

		function __construct(){

			parent::__construct();


		}
	
	

	 public function UserRegister($username,$email,$password){

		$password = md5($password);

	//	$con = mysqli_connect('localhost','root','','user_data');
		$sql = "INSERT INTO userdata(username,email,password) values('".$username."','".$email."','".$password."')";


	//	print_r($this->conn);




		$result = mysqli_query($this->conn,$sql);
		return $result;


	}

	function UserLogin($username,$password){

		//$con = mysqli_connect('localhost','root','','user_data');

		$sql = "SELECT * FROM userdata where username = '".$username."' AND
		 password = '".md5($password)."'";
		$result = mysqli_query($this->conn,$sql);

		$userdata =mysqli_fetch_array($result);

		$num_rows = mysqli_num_rows($result);

		if($num_rows == 1)
		{
			$_SESSION['username'] = $userdata['username'];
			$_SESSION['email'] = $userdata['email'];
			$_SESSION['uid'] = $userdata['user_id'];
			return true;
		}else
		{
			return false;
		}
	}

		 function isUserExist($email){

	

			//$con = mysqli_connect('localhost','root','','user_data');

			$sql = "SELECT * FROM userdata WHERE email = '".$email."'";

			$result = mysqli_query($this->conn,$sql);

			$rows = mysqli_num_rows($result);

			if($rows > 0)
			{
				return true;
			} 
			else{
				return false ; 
			}
		}




	
}
 //$obj = new user();>
 
?>