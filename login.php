<?php
include 'db.php';
session_start();

	if (isset($_POST['login']))
		{
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' and password = '$password'");
			$row  = mysqli_fetch_array($result);
			// print_r($row);
			// die("=======");
			if(is_array($row)) {
				$_SESSION["id"] = $row[user_id];
				$_SESSION["name"] = $row[name];
				$GLOBALS['acc_type']=$row[acc_type];
				// die($GLOBALS['acc_type']);

			} else {
				$message = "Invalid Username or Password!";}
			}
			if(isset($_SESSION["id"])) {
				if($GLOBALS['acc_type']=='1'){
					header("Location:advisor_profile.php");

				}
				else{
					header("Location:home.php");
				}

			}

?>









<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="main.js"></script>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bin2.jpeg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/sakib2.jpg" alt="">
				</div>
				<form action="login.php" method="post" name="login_form" onsubmit="return login_validate();" >
					<h3>Login here</h3>
					<p><?php if(isset($message)){ echo $message; } ?></p>


					<div class="form-wrapper">
						<input type="text" name="email" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>

					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>

					<button type="submit" name="login">Login
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<a href="register.php">Do not have accout?create account</a>
				</form>
			</div>
		</div>

	</body>
</html>
