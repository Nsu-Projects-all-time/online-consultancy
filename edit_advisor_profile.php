<?php
include "advisor_header.php";
$submit_id = $_GET['id'];
$sql="select * from users where user_id='$submit_id' ";
$result = mysqli_query($conn,$sql);
$row=$result->fetch_assoc();

$catagory="select * from catagories";
$res = mysqli_query($conn,$catagory);



if(isset($_POST["update"])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $description=$_POST['description'];
  $cat_id=$_POST['cat_id'];
  $update="UPDATE users SET name='$name',email='$email',phone='$phone',description='$description',cat_id='$cat_id' WHERE user_id='$submit_id' ";
  mysqli_query($conn,$update);
  header("Location:advisor_profile.php");
}
 ?>
<br>
<div class="container emp-profile">
  <div class="row">
    <div class="col-md-4">
      change profile picture

    </div>
    <div class="col-md-8">
      <form action="" method="post">
        <div class="form-group">
          <label for="email">Profession</label>


          <select name="cat_id" class="form-control" >
            <option value="null">Select profession</option>
            <?php while($c=$res->fetch_assoc()) { ?>
              <option value="<?php echo $c["cat_id"]; ?>"><?php echo $c["cat_name"]; ?></option>
            <?php } ?>

  </select>
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row["name"];?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row["email"];?>">
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter phone no" name="phone" value="<?php echo $row["phone"];?>">
        </div>
        <div class="form-group">
 <label for="comment">Description:</label>
 <textarea class="form-control" rows="5" id="description" name="description">
   <?php echo $row["description"]; ?>
 </textarea>
</div>


  <button type="submit" class="btn btn-default" name="update">update</button>
</form>
    </div>

  </div>

</div>
<!-- <script type="text/javascript">
$('#testButton').click(function () {
  var name = $("#name").val();
  var email = $("#email").val();
  var phone=$("#phone").val();
  var description=$("#description").val();

  $.ajax({
    type: "POST",
    url: "/echo/html/",
    data: { name: name, email: email,phone:phone,description }
  }).done(function( msg ) {
    alert( "Data Saved: " + msg );
});
});​
</script> -->

</body>
</html>
