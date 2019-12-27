<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary border">
  <?php if (empty($_SESSION['email'])) { ?>
    <a class="navbar-brand" href="welcome.php">QAsite</a>
  <?php } else { ?>
    <a class="navbar-brand" href="home.php">QAsite</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><?php echo $_SESSION['fn']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timeline.php">Timeline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="question.php">Ask</a>
        </li>
       
      </ul>

      <nav class="navbar navbar-inverse">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav navbar-right">
    <li class="active" ><a style="color: white" href="logoutDB.php"> Log Out</a></li>
    </ul>

      </nav>
      
    </div>
  <?php } ?>
</nav>
