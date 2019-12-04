<?php
include "db.php";

if(isset($_REQUEST))
{

$user_id=(int)$_POST['ui'];
$skill_name=$_POST['skill_name'];
$insert="INSERT INTO skills (skill_name,user_id) VALUES ('$skill_name','$user_id') ";

if ($conn->query($insert) === TRUE) {

       header("Location:login.php");
    }
else {
        echo "Error: " . $insert . "<br>" . $conn->error;}
      }


 ?>
