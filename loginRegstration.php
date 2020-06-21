<?php
//session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>login Registration form</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.css">
</head>
<body>
		<div class="container-fluid mt-5">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<div class="card border-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Login</div>
  <div class="card-body">
  	<form method="post" action="loginvalidate.php">
  		<div class="form-group">
      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter UserName">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group text-center">
    	<input type="submit" name="submit" value="Login" class="btn btn-primary">    	
    	<input type="reset" name="reset" value="clear" class="btn btn-danger">
    </div>
  	</form>
  </div>
</div>

</div>

<div class="col-md-4">
					<div class="card border-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Registration</div>
  <div class="card-body">
  	<form method="post" action="regisvalidate.php">
  		<div class="form-group">

      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="UserName"><br>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group text-center">
    	<input type="submit" name="register" value="Register" class="btn btn-primary ">    	
    	<input type="reset" name="reset" value="clear" class="btn btn-danger">
    </div>
  	</form>
  </div>

</body>
</html>