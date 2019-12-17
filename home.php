<?php
include 'header.php';

?>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Online Consultancy</h1>
    <p>Mission, Vission & Values</p>
  </div>
</div>
<br>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort by
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      <li><a href="#">Doctor</a></li>
      <li><a href="#">Engineer</a></li>
      <li><a href="#">Lawyer</a></li>
      <li><a href="#">Top advisor</a></li>
    </ul>
  </div>

<br>
<?php
	$result = mysqli_query($conn,"SELECT * FROM users WHERE acc_type='1' ");

?>
<div class="container">
  <div class="row">
      <?php while($row=$result->fetch_assoc()){ ?>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <b class=""><?php echo $row["name"]; ?></b>
        </div>
        <div class="panel-body "><img src="images/<?php echo $row["image"]; ?>" class="img-responsive mg-fluid" style="width:100%" alt="Image"></div>
        <div class="panel-footer text-center">
          <?php
          //die($row["cat_id"]);
          //$category=mysqli_query($conn,'select * from catagories where cat_id="$row["cat_id"]" limit 1 ');
        //  $id=$row["cat_id"];
          //$category=mysqli_query($conn,'select * from catagories where cat_id="$id" ');
          // $cat=$category->fetch_assoc()


           ?>
        <p>Engineer</p>


        <a href="profile.php?id=<?php echo $row["user_id"];?>" class="btn btn-primary">View Details</a>
      </div>
      </div>
    </div>

  <?php } ?>


  </div>
</div><br><br>

<?php
include 'footer.php';
?>
