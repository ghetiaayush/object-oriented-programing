<?php
include_once "users.php";

$obj= new Users();
 if($_POST['register']){  
        $username = $_POST['username'];  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
     //   $confirmPassword = $_POST['confirm_password'];  
       // if($password == $confirmPassword) 


            $email1 = $obj->isUserExist("$email"); 
            if(!$email1){  
                $register = $obj->UserRegister($username, $email,$password);  
                if($register){  
                		?>

                		<script type=text/javascript>
							alert('Registration Successful');
							window.location.href="loginRegstration.php"


		</script>";
		<?php
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                
                ?>

		<script type=text/javascript>
		alert('	email id already exist  Try another ');
		window.location.href="loginRegstration.php"


		</script>";


                <?php 
            }    
          
        }  
    

?>
