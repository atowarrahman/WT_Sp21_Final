<?php
if(!isset($_COOKIE["username"])){
	header("Location:logIn.php");
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome  <?php echo $_COOKIE["username"]; ?></h1>

</body>
</html>