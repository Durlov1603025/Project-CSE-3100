<?php

  include 'inc/connect.php';

  $query = "select q_id, q_title, time, first_name, last_name from questions, user_info
            where user_info.email=questions.email";

  $run = mysqli_query($con, $query);
 ?>
