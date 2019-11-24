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

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <b class="">Md Asaduzzaman Sakib</b>
        </div>
        <div class="panel-body "><img src="images/sakib.jpg" class="img-responsive mg-fluid" style="width:100%" alt="Image"></div>
        <div class="panel-footer text-center">
        <p>Chief Software Developer</p>
        <a href="profile.php" class="btn btn-primary">View Details</a>
      </div>
      </div>
    </div>


  </div>
</div><br><br>

<?php
include 'footer.php';
?>