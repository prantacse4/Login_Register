<?php 
include 'config.php';

session_start();

$name = "";
$email    = "";
$errors = array(); 

if (isset($_POST['register'])) {

	$name = mysqli_real_escape_string($db,$_POST['name']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);

	$user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
  	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
  
  	if ($user) { 
    if ($user['name'] === $name) {
      array_push($errors, "Name already exists");
   	 }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  	}
  	if (count($errors) == 0) {
  			$q = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
		mysqli_query($db,$q);
		$_SESSION['email'] = $email;
  		$_SESSION['success'] = "You are now logged in.";
  		header('location:index.php');
  }


	
	
}


if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in.";
  	  header('location:index.php');
  	}else {
  		array_push($errors, "Wrong Email/Phone combination");
  	}

}





 ?>