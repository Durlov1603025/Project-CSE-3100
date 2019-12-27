<?php

  include 'inc/connect.php';

  $email = $_SESSION['email'];
  $query = "select * from questions where email = '$email' ";


  $run = mysqli_query($con, $query);








 ?>
