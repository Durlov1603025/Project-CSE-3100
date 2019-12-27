<?php session_start(); if (!empty($_SESSION['email'])) { ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inc/bootstrap.min.css">

    <title>Feed: QAsite</title>

    <style media="screen">
      a:hover {
        text-decoration: inherit;
      }
      .link {
        color: black;
      }
    </style>
  </head>
  <body>
    <?php include 'navbar.php'; ?><br><br>

    <?php if (isset($_SESSION['err'])) { ?>
      <div class="jumbotron">
        <div class="container">
          <?php
            echo $_SESSION['err'];
            unset($_SESSION['err']);
           ?>
        </div>
      </div>
    <?php } ?>


    <?php include 'homeDB.php' ?>

    <div class="container">

      <div class="row justify-content-center align-items-center">
        <div class="col-12">

        </div>
      </div>

      <?php while ($row = mysqli_fetch_assoc($run)) { 
         $qid = $row['q_id'];
         $query = 'SELECT COUNT(*) AS TotalAnswers FROM answers WHERE answers.q_id = '.$qid;
         $result = mysqli_query($con, $query);
         $NumberOfAnswers = mysqli_fetch_array($result);
         ?>
        <div class="row justify-content-center align-items-center">
          <div class="col-12"><br>
            <div class="jumbotron border border-success">
              <a href="des_ques.php?id=<?php echo $qid; ?>" class="link d-flex justify-content-center h4"> <?php echo $row['q_title']; ?><br></a>
              <p class="h5 d-flex justify-content-center">By <?php echo $row['first_name'] . " " . $row['last_name']; ?> </p>
              <p class="h6 d-flex justify-content-center">At <?php echo $row['time']; ?> </p>
              <p class="d-flex justify-content-center">Answered <?php echo $NumberOfAnswers['TotalAnswers'];?> Times.</p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="inc/jquery-3.3.1.slim.min.js"></script>
    <script src="inc/popper.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
  </body>
</html>
<?php } else {
  echo "<script>window.open('home1.php', '_self')</script>";
}
?>
