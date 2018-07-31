<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }


?>
<!DOCTYPE html>
<html>
<head>


<meta charset="UTF-8">
    <meta name="description" content="Page description">
    <meta name="keywords" content="Ideas, Cooperate">
    <meta name="author" content="Author">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=3, shrink-to-fit=no">

    <title>Cooperate for ideas</title>

    <link rel="icon" href="./images/icons/favicon.ico">
    <link rel="stylesheet" href="./style/lib/bootstrap.min.css">
    <link rel="stylesheet" href="./style/fonts.css">
    <link rel="stylesheet" href="./style/body.css">
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/footer.css">

    <script src="./scripts/lib/jquery-3.3.1.min.js"></script>
    <script src="./scripts/lib/popper.min.js"></script>
    <script src="./scripts/lib/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top custom-background">
      <img src="./images/icons/logo.png">
      <a class="navbar-brand mr-auto custom-brand" href="./home.php">Cooperate for ideas</a>


<div class="content" align="right">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    
    <?php  if (isset($_SESSION['username'])) : ?>
      <p style="color: red;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>




      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul> -->
        <ul class="navbar-nav form-inline custom-align">
          <li class="nav-item">
            <a href="./home.php" class="btn btn-outline-light custom-button">Home</a>
          </li>
          
        </ul>
      </div>
    </nav>

<div class="container-fluid bg" style="margin: 7rem 0 7rem 0">
<div class="list-group" align="left">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>    
</div>


        <main id="description">
    <br />
    <div class="container-fluid bg" style="margin: 5rem 0 5rem 0">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">




        <div class="card">
  <div class="card-header">
    Titlu idee
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Descriere ideee</p>
      <p>implementare</p>
      <footer class="blockquote-footer">email</footer>
    </blockquote>
  </div>
</div>

        </main>

    </body>
</html>