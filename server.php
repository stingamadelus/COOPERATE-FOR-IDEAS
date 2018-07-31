<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$password_1 = "";
$password_2 = "";
$firstname = "";
$lastname    = "";
$errors = array(); 
$eml = "";
$about = "";
$title = "";
$implementation = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'idei');

// REGISTER USER
if (isset($_POST['register_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM userpass WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO userpass (username, email, password, firstname, lastname) 
  			  VALUES('$username', '$email', '$password', '$firstname', '$lastname')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}


//ADD IDEA

if (isset($_POST['addideaa'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $about = mysqli_real_escape_string($db, $_POST['about']);
  $implementation = mysqli_real_escape_string($db, $_POST['implementation']);
  $eml = mysqli_real_escape_string($db, $_POST['eml']);


  $query1 = "INSERT INTO ideas (title, about, implementation, email) 
          VALUES('$title', '$about', '$implementation', '$eml')";
          mysqli_query($db, $query1);
          header('location: home.php');
}
  


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM userpass WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  // $_SESSION['success'] = "You are now logged in";
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


//logout

// if (isset($_GET['logout'])) {
//   session_start();
//   session_destroy();
//   unset($_SESSION['username']);
//   header('location: login.php');
// }




// if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['username']);
//     header('location: login.php');
//   }

?>