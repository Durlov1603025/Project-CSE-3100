<?php

include 'inc/connect.php';

if (isset($_POST['signup'])) {
  $firstName = htmlentities(mysqli_escape_string($con, $_POST['first_name']));
  $lastName = htmlentities(mysqli_escape_string($con, $_POST['last_name']));
  $email = htmlentities(mysqli_escape_string($con, $_POST['email']));
  $passWord = htmlentities(mysqli_escape_string($con, $_POST['password']));
  $birthDate = htmlentities(mysqli_escape_string($con, $_POST['birth_date']));
  $phone = htmlentities(mysqli_escape_string($con, $_POST['phone_no']));


        $username = strtolower($firstName . "_" . $lastName);
        $check_username_query = "select * from user_info where user_name='$username'";
        $run_username = mysqli_query($con, $check_username_query);

  $insert = "insert into user_info(first_name, last_name, email, password, phone_no, DOB) values('$firstName', '$lastName', '$email', '$passWord', '$phone', '$birthDate')";

  $run = mysqli_query($con, $insert);

  if ($run) {
    echo "<script>alert('$firstName, Welcome to QAsite!!!')</script>";
    echo "<script>window.open('login.php', '_self')</script>";
  } else {
    $_SESSION['err'] = "Error: " . mysqli_error($con);
  }
}






 ?>
