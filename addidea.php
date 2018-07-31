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

    <main id="description">
    <br />
    <div class="container-fluid bg" style="margin: 5rem 0 5rem 0">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- Form Start -->
   


<form class="form-container" method="post" action="server.php">
            <h1 class="display-4 shadowed-text">Add idea</h1>
            <div class="form-group">
              <label >Title</label>
              <input type="text" class="form-control"  placeholder="Title" name="title">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">About</label>
              <input type="firstname" class="form-control" id="exampleInputEmail" placeholder="About idea" name="about">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">Implementation</label>
              <input type="lastname" class="form-control" id="exampleInputEmail" placeholder="Implementation" name="implementation">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">E-mail</label>
              <input type="eml" class="form-control" id="exampleInputEmail" placeholder="Enter e-mail address" name="eml">
            </div>
            
            <br>
            <button type="submit" class="btn btn-success btn-block" name="addideaa">Add idea</button>
          </form>




  
  </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
    </div>
  </main>




</body>
</html>


<!-- if (isset($_POST['addidea'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $about = mysqli_real_escape_string($db, $_POST['about']);
  $implementation = mysqli_real_escape_string($db, $_POST['implementation']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  if (empty($title)) { array_push($errors, "Title is required"); }
  if (empty($about)) { array_push($errors, "Tell us something about..."); }
  if (empty($email)) { array_push($errors, "They need your Email!!"); }

  $query = "INSERT INTO ideas (title, about, implementation, email) 
          VALUES('$title', '$about', '$implementation', '$email')";

  } -->