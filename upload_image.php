<?php
include "db.php";

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$id=$_POST['id'];
		//Getting actual file name
		$name = $_FILES['image']['name'];

		//Getting temporary file name stored in php tmp folder
		$tmp_name = $_FILES['image']['tmp_name'];

		//Path to store files on server
		$path = 'images/';

		//checking file available or not
		if(!empty($name)){
			//Moving file to temporary location to upload path
			move_uploaded_file($tmp_name,$path.$name);
			$update="UPDATE users SET image='$name' WHERE user_id='$id' ";
			mysqli_query($conn,$update);
			//Displaying success message
			header("Location:advisor_profile.php");
		}else{
			//If file not selected displaying a message to choose a file
			echo "Please choose a file";
		}
	}
  ?>
