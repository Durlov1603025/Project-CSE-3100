<?php session_start(); if (!empty($_SESSION['email'])) { ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inc/bootstrap.min.css">

    <title><?php echo $_SESSION['fn']; ?>: QAsite</title>

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

  <div class="container">
    <?php include 'navbar.php'; ?><br><br>

    <br><br>

      <div class="row">

       

        <div class="col-sm-9">

          <div class="jumbotron border border-secondary">

            <div class="container">

              
               
                  <div class="row">

                    <div class="col-9">

                    <div class="container">

                      <h5>Name:</h5>
                      <?php echo $_SESSION['fn'] . " " . $_SESSION['ln']; ?>

                      <br><br><br>
                      
                      <h5>Date-of-Birth:</h5>
                      <?php echo $_SESSION['dob']; ?>

                      <br><br><br>
                      <h5>Email:</h5>
                      <?php echo $_SESSION['email']; ?>

                      <br><br><br>
                      <h5>Phone-no:</h5>
                      <?php echo $_SESSION['phn']; ?>





                    </div>

                      </div>

</div>








</div>

</div>

</div>
      </div>

  </div>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="includes/jquery-3.3.1.slim.min.js"></script>
    <script src="includes/popper.min.js"></script>
    <script src="includes/bootstrap.min.js"></script>

  </body>
</html>

<?php }
?>