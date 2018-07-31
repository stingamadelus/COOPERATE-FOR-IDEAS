<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Page description">
  <meta name="keywords" content="Ideas, Cooperate">
  <meta name="author" content="Author">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=3, shrink-to-fit=no">

  <title>Sign up - Cooperate for ideas</title>

  <link rel="icon" href="./images/icons/favicon.ico">
  <link rel="stylesheet" href="./style/bootstrap.min.css">
  <link rel="stylesheet" href="./style/fonts.css">
  <link rel="stylesheet" href="./style/body.css">
  <link rel="stylesheet" href="./style/nav.css">
  <link rel="stylesheet" href="./style/header.css">
  <link rel="stylesheet" href="./style/main.css">
  <link rel="stylesheet" href="./style/footer.css">

  <script src="./scripts/jquery-3.3.1.min.js"></script>
  <script src="./scripts/popper.min.js"></script>
  <script src="./scripts/bootstrap.min.js"></script>
</head>


<body>


<nav class="navbar navbar-expand-md navbar-dark fixed-top custom-background">
    <img src="./images/icons/logo.png">
    <a class="navbar-brand mr-auto custom-brand" href="./index.html">Cooperate for ideas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul> -->
      <ul class="navbar-nav form-inline my-2 custom-align">
        <li class="nav-item">
          <a href="./index.html" class="btn btn-outline-light custom-button">< Back</a>
        </li>
        <li class="nav-item">
          <a href="./login.php" class="btn btn-outline-light custom-button">Sign in</a>
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
	 


<form class="form-container" method="post" action="register.php">
            <h1 class="display-4 shadowed-text">Registration</h1>
            <div class="form-group">
              <label for="exampleInputEmail">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">First name</label>
              <input type="firstname" class="form-control" id="exampleInputEmail" placeholder="Enter first name" name="firstname">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">Last name</label>
              <input type="lastname" class="form-control" id="exampleInputEmail" placeholder="Enter last name" name="lastname">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter e-mail address" name="email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword" placeholder="Enter password" name="password_1">
              <br>
              <input type="password" class="form-control" id="exampleInputPassword" placeholder="Repeat password" name="password_2">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> I accept Terms & Conditions
              </label>
            </div>
            <br>
            <button type="submit" class="btn btn-success btn-block" name="register_user">Sign up</button>
          </form>




  
  </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
    </div>
  </main>
</body>
</html>

