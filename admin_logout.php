<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["user_name"]);
unset($_SESSION["is_super_admin"]);
header("Location:admin_login.php");
?>
