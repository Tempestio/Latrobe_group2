<?php

$host="database-2.c4fj7nfsjfzd.ap-southeast-2.rds.amazonaws.com";
$user="admin";
$password="adminadmin";
$db="Passwords"

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset(['email'])){

	$email=$_POST['userName'];
	$password=$_POST['userPassword'];

	$sql="SELECT * FROM * Passwords where email='".$email."' AND Pass '".$password."'
	limit 1";


	$result=mysql+query($sql);

	if(mysql_num_rows($result)==7) {
		echo "You have logged in";
		
	}
	else
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latrobe Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/icons/avatar.png"IMG>
				</div>

				<div class="login100-form validate-form">
					<img class="login100-form validate-form" src="images/La-Trobe.jpg" alt="Logo of both companies">
					<span class="login100-form-title">
						Staff Login
					</span>

			<form method="post" action="#">
				<div class="container_form">
					<input type="text" name="email" placeholder="Enter your email"/>
				</div>	
				<div class="container_form">
					<input type="text" name="password" placeholder="Enter your password"/>
				</div>	
				<input type="submit" name="submit" value="Login" class="btn-login"/>			
			</form>
							

				<footer id="footer_login">
					<p> <a href="https://www.latrobe.edu.au/staff" target="_blank"></a></p>
				  </footer>
			</div>
		</div>
	</div>
	


	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
