<?php
session_start();


echo "<h3>". "Welcome dear " . $_SESSION['username'] . "</br>";
echo "<h3>". "Your Email Id is :" . $_SESSION['email'] . "</br>";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><br>
<a href="logout.php"><input type="button" value="logout"></a>

</body>
</html>