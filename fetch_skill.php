<?php
session_start();
$id=$_SESSION['id'];
include "db.php";
$sql="select * from skills where user_id='$id' ";
$result = mysqli_query($conn,$sql);

$output = '<ul>';

if($result)
{

while($row=$result->fetch_assoc()) {

		$output .= '
			<li>'.$row["skill_name"].'</li>
		';

}
}
else
{
  $output .= '

		<h2>Data not found</h2>

	';
}
$output .= '</ul>';
echo $output;

?>
