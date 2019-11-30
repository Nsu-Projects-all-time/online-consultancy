<?php
include 'admin_header.php';

 	$result = mysqli_query($conn,"SELECT * FROM users WHERE acc_type='0' ");
  //dd($result);
  //die($result);
?>


<div class="container">
  <table class="table">
      <thead>

        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
  <?php while($row=$result->fetch_assoc()){ ?>
        <tr>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["email"]; ?></td>
          <td><?php echo $row["phone"]; ?></td>
          <td>
            <a href="#">SMS</a>| <a href="#">EMAIL</a>|<a href="#">BAN</a>
          </td>
        </tr>
      <?php } ?>


      </tbody>
    </table>
</div>
<?php include 'admin_footer.php'; ?>
