<?php 
include 'db.php';
if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $acc_type=$_POST['person'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $password=md5($_POST['password']);
    $phone=$_POST['phone'];

    $insert="INSERT INTO users (name,email,dob,gender,acc_type,phone,password) VALUES ('$name','$email','$dob','$gender','$acc_type','$phone','$password') ";

    if ($conn->query($insert) === TRUE) {
           // echo '<script language="javascript">';
           //  echo 'alert("Accoun has been created successfully \n Now you can log in.")';
           // echo '</script>';
           header("Location:login.php");
        }
    else {
            echo "Error: " . $insert . "<br>" . $conn->error;}
}

 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="main.js"></script>
</head>

<body>

    <div class="wrapper" style="background-image: url('images/bin2.jpeg');">
        <div class="inner">
            <div class="image-holder">
                <img src="images/sakib2.jpg" alt="">
            </div>
            <form action="register.php" method="post" name="registration_form" onsubmit="return register_validate();">
                <h3>Registration Form</h3>
                <div class="form-wrapper">
                    <select name="person" id="" class="form-control">
                        <option value="null" disabled selected>Create account as</option>
                        <option value="0">User</option>
                        <option value="1">Advisor</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                    <i class="zmdi zmdi-account"></i>
                </div>

                <div class="form-wrapper">
                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <p>Date of birth</p>
                    <input type="date" name="dob"  class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <select name="gender" id="" class="form-control">
                        <option value="null" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="femal">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="phone" placeholder="Phone " class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <button type="submit" name="submit">Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

</body>

</html>