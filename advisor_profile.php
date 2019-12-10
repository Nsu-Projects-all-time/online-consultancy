<?php
include "advisor_header.php";
$sql="select * from users where user_id='$id' ";
 	$result = mysqli_query($conn,$sql);
  $row=$result->fetch_assoc();

 ?>
    <br>

        <div class="container emp-profile">
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Danger</strong> You need to update your profile.
            </div>


                <div class="row">
                    <div class="col-md-4">

                        <div class="profile-img">

                            <img src="images/<?php echo $row["image"];?>" alt="" />
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
                      Skills:
                      <div id="skill_data">

                      </div>
                        <div class="profile-work">


                            <div id="show" class="btn btn-primary">Add skills</div>
                            <br>
                            <div class="menu" style="display: none;">
                                <form action="" id="skill_form" action="" method="post" >
                                  <input type="hidden" class="form-control " id="user_id" name="ui" value="<?php echo $id; ?>">
                                <div class="form-group ">


                                    <input type="text" class="form-control"  placeholder="skill name" id="skill_name" name="skill_name">
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
            $(document).ready(function() {
                $('#show').click(function() {
                    $('.menu').toggle("slide");
                });
            });
        </script>
        <script>
            $(document).on('click', '#add_skill', function(e) {
                var data = $("#skill_form").serialize();
                $.ajax({
                    data: data,
                    type: "post",
                    url: "save_skill.php",
                    success: function(data) {
                        alert("Data: " + data);
                    }
                });
            });
        </script>
        <script type="text/javascript">

$(document).ready(function(){
            load_data();

function load_data()
{
  $.ajax({
    url:"fetch_skill.php",
    method:"POST",
    success:function(data)
    {
      $('#skill_data').html(data);
    }
  });
}

          });
        </script>

        </body>

        </html>
