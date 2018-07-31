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
            <a href="./addidea.php" class="btn btn-outline-light custom-button">Add idea</a>
          </li>
          <li class="nav-item">
            <a href="./ideas.php" class="btn btn-light custom-button">All ideas</a>
          </li>
        </ul>
      </div>
    </nav>



<header>
      <h1 class="display-4">Accelerating all kinds of ideas</h1>
      <p class="lead">A platform designed to help you reach well-prepared people, happy to give advice or eager to work.</p>
      <hr class="my-4">
      <p>Publish your idea and find a team / Join a project / Give feedback</p>
      <a class="btn btn-outline-light btn-lg custom-button" href="#description" role="button">Learn more</a>
    </header>


<main id="description">
      <h1 class="display-4">Be a part of something bigger</h1>
      <br />
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Recruit for your project</h5>
          <p class="card-text">Make a short description - don't give away your idea, but be as convincing as you can while explaining why it can succeed.</p>
          <p class="card-text"><small class="text-muted">There might be room for improvement. Your can get advice and feedback.</small></p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Apply to a project</h5>
          <p class="card-text">Brag about your skills and if you believe in the idea, try to become a part of it. Grow with it.</p>
          <p class="card-text"><small class="text-muted">Most likely you will have to prove yourself and you will get feedback.</small></p>
        </div>
      </div>
    </main>

    <footer>
      <div class="custom-main">
        <h6 class="font-weight-light font-italic">"Great minds discuss ideas; average minds discuss events; small minds discuss people."</h6>
        - Eleanor Roosevelt
      </div>
      <div class="custom-license">
        All rights reserved.
      </div>
    </footer>

    <a href="#" id="go_top" title="Go to the top"><img src="./images/icons/arrow.png" class="custom-size"></a> 

    <script src="./scripts/smoothScroll.js"></script>
    <script src="./scripts/goTop.js"></script>



<div class="header">
	
</div>

  <!-- <div class="content">
    	
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
      	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <?php endif ?>
  </div>  -->
	




 
      


    <!-- Optional JavaScript
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>