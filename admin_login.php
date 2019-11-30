<?php
include 'db.php';
session_start();

	if (isset($_POST['login']))
		{
			$user_name = $_POST['user_name'];
			$password = md5($_POST['password']);

			$result = mysqli_query($conn,"SELECT * FROM admin WHERE user_name='$user_name' and password = '$password'");
			$row  = mysqli_fetch_array($result);
			// print_r($row);
			// die("=======");
			if(is_array($row)) {
				$_SESSION["id"] = $row[id];
				$_SESSION["user_name"] = $row[user_name];
				$_SESSION['is_super_admin']=$row[is_super_admin];
				// die($GLOBALS['acc_type']);

			} else {
				$message = "Invalid Username or Password!";}
			}
			if(isset($_SESSION["id"])) {
				header("Location:admin_home.php");

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
				<form action="admin_login.php" method="post" name="login_form" onsubmit="return login_validate();" >
					<h3>Login here</h3>
					<p><?php if(isset($message)){ echo $message; } ?></p>


					<div class="form-wrapper">
						<input type="text" name="user_name" placeholder="User Name" class="form-control" required>
						<i class="zmdi zmdi-email"></i>
					</div>

					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>

					<button type="submit" name="login">Login
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<a href="registration.html">Do not have accout?create account</a>
				</form>
			</div>
		</div>

	</body>
</html>
