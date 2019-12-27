<?php session_start(); if (!empty($_SESSION['email'])) { ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inc/bootstrap.min.css">

    <title>Timeline: QAsite</title>

    <style media="screen">
      a:hover {
        text-decoration: none;
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

    <?php
      include 'timelineDB.php';
    ?>


          <div class="container border">

            <div class="row justify-content-center align-items-center">
              <div class="col-12">

              </div>
            </div>

            <?php while ($row = mysqli_fetch_assoc($run)) { ?>
              <?php $qid = $row['q_id']; ?>
              <div class="row justify-content-center align-items-center">
                <div class="col-12"><br>
                  <div class="jumbotron border border-success">
                    <a href="des_ques.php?id=<?php echo $qid; ?>" class="h4 link d-flex justify-content-center"> <?php echo $row['q_title']; ?><br></a>
                  </div>
                </div>
              </div>
            <?php } ?>
            <div class="row justify-content-center">
              <div class="col-12">

              </div>
            </div>
          </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="inc/jquery-3.3.1.slim.min.js"></script>
    <script src="inc/popper.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
  </body>
</html>
<?php } else {
  echo "<script>window.open('welcome.php', '_self')</script>";
}
?>
