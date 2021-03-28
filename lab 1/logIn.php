
<?php

 if($_SERVER["REQUEST_METHOD"]=="POST"){
 	$username=$_POST["username"];
 	$password=$_POST["password"];
 	if($username=="atowar" && $password=="1234"){

 		setcookie("username",$username,time()+120);
 		header("Location: dashboard.php");
 	}

 }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		Username : <input type="text" name="username"><br>

		Password : <input type="password" name="password"><br>

		<input type="submit" name="submit" value="login"><br>


	</form>

</body>
</html>