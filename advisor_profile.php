<?php
include "advisor_header.php";
$sql="select * from users where user_id='$id' ";
 	$result = mysqli_query($conn,$sql);
  $row=$result->fetch_assoc();

 ?>
<br>
<?php
 if($row["image"]=="" || $row["description"]=="" || $row["cat_id"]==""){
 ?>
<div class="container emp-profile">
  <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger</strong> You need to update your profile.
  </div>
<?php } ?>

                <div class="row">
                    <div class="col-md-4">

                        <div class="profile-img">

                            <img src="images/sakib.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php
                                        echo $row['name'];
                                         ?>
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="edit_advisor_profile.php?id=<?php echo $id;?>" class="btn btn-primry">Edit Profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>

                            <div id="show" class="btn btn-primary">Add skills</div><br>
                            <div class="menu" style="display: none;">
                              <form action="" id="skill_form" action="<?php echo $_SERVER['PHP_SELF'];?> method="post">
                                <div class="form-group">

                                  <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $id; ?>">
                                  <input type="text" class="form-control" id="name" placeholder="skill name" id="skill_name" name="skill_name">
                                  <input type="submit" id="add_skill" value="add">
                                </div>

                              </form>
                                  </div>
                        </div>
                    </div>
                    <div class="col-md-8">


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                  <?php echo $row["email"]; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                  <?php
                                                  echo $row["phone"];
                                                   ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Desctiption</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                  <?php
                                                  echo $row["description"];
                                                   ?>
                                                </p>
                                            </div>
                                        </div>
                            </div>

                        </div>
                    </div>
                </div>

        </div>








</footer>

<script>
$(document).ready(function(){
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
});

</script>
<script>
  $(document).on('click','#add_skill',function(e) {
    var data = $("#skill_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "save_skill.php",
        success: function(data){
        alert("Data: " + data);
        }
    });
});
</script>

</body>
</html>
