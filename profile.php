<?php
include 'header.php';
$user_id=$_SESSION['id'];

$advisor_id = $_GET['id'];
$sql="select * from users where user_id='$advisor_id' ";
$result = mysqli_query($conn,$sql);
$row=$result->fetch_assoc();

$skills="select * from skills where user_id='$advisor_id' ";
$skill = mysqli_query($conn,$skills);
?>
<br><br>
<div class="container">
<div class="row">
    <div class="col-md-4">
        <img src="images/<?php echo $row["image"];?>" class="img-thumbnail" alt="Cinque Terre" style="height: 300px;">
        <h3>Name:<?php echo $row["name"];?></h3>


    </div>
    <div class="col-md-4">

        <h1><u>About</u></h1>
        <p>
            <?php echo $row["description"];?>
        </p>
        <h1>
            Skills
        </h1>
        <?php while($c=$skill->fetch_assoc()) { ?>

        <p><?php echo $c["skill_name"]; ?></p>

      <?php }?>

    </div>
    <div class="col-md-4">
        <h1>Rate:BDT <?php echo $row['consul_rate'];?></h1>
        <div>
            <a href="ssl_payment.php?advisor_id=<?php echo $row["user_id"];?>" class="btn btn-success">Get Consultancy</a>
        </div>

    </div>
</div>


</div>
