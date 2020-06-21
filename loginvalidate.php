<?php
include_once "users.php";

$obj= new Users();



if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = $obj->UserLogin($username,$password);
	

	if($login){

		header("location:welcome.php");
	}
	else
	{

		?>

		<script type=text/javascript>
		alert('	username and password incorrect')
		window.location.href="loginRegstration.php"


		</script>";

		<?php

	}
}
?>