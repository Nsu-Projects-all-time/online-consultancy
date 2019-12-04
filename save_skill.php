<?php
include "db.php";

if(isset($_REQUEST))
{

$user_id=$_POST['user_id'];
$skill_name=$_POST['skill_name'];
$sql="INSERT INTO skills(skill_name,user_id) VALUES ('$skill_name','$user_id')";
$result=mysql_query($conn,$sql);
if($result){
echo "You have been successfully subscribed.";
}
}


 ?>
