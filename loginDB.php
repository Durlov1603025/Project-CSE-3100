<?php

include 'inc/connect.php';

if (isset($_POST['login'])) {
  $email = htmlentities(mysqli_escape_string($con, $_POST['email']));
  $passWord = htmlentities(mysqli_escape_string($con, $_POST['password']));

  $login = "select * from user_info where email = '$email' and password = '$passWord'";

  $run = mysqli_query($con, $login);

  if (mysqli_num_rows($run) == 1) {
    $result = mysqli_fetch_assoc($run);
    $_SESSION['fn'] = $result['first_name'];
    $_SESSION['ln'] = $result['last_name'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['phn'] = $result['phone_no'];
    $_SESSION['dob'] = $result['DOB'];
    $_SESSION['un'] = $result['user_name'];
    $firstName = $_SESSION['fn'];
    echo "<script>alert('$firstName, you have logged into QAsite!!!')</script>";
    echo "<script>window.open('home.php', '_self')</script>";
  } else {
    $_SESSION['err'] = "Error: " . mysqli_error($con);
  }
}






 ?>
