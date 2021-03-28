

<?php
                $uname="";
				$err_uname="";
				$pass="";
				$err_pass="";
				$hasError=false;
				$err_message="";

				$users=array("atowar"=>"1234");

           if($_SERVER["REQUEST_METHOD"] == "POST"){
					if(empty($_POST["uname"])){
						$err_uname="Username Required";
						$hasError = true;
					}
					else{
						$uname = htmlspecialchars($_POST["uname"]);
					}
					if(empty($_POST["pass"])){
						$err_pass="Password Required";
						$hassError = true;
					}
					else{
						$pass=htmlspecialchars($_POST["pass"]);
					}
					if(!$hasError){
						$found=false;
						foreach($users as $u=>$p){
							if($u==$uname && $p==$pass){

								setcookie("username",$username,time()+120);


								header( "Location: Dashboard.php");
							}
						}

						$err_message="Invalid username or password";		
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
				<table align="left">
					<tr>
					
						<td><span class="my-font">Username:</span> </td>
						<td><input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="username" name="uname">
						<br><span class="err-msg"><?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td><span class="my-font">Password: </span></td>
						<td><input class="my-font my-text-field" type="password" placeholder="password"  name="pass">
						<br><span class="err-msg"><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input class="btn-mine my-font" type="submit"  value="Login" name="login">
					</tr>
				</table>
			</form>

</body>
</html>