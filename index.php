<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<center><?php 
include 'database/function.php';
if (!isset($_SESSION['email'])){
	header('location:login.php');
}
if (isset($_SESSION['email'])) {
	$email = $_SESSION['email'];
}
 ?>
<h1>Login As <span><?php echo "$email"; ?></span></h1>
<a style="color:red;" href="logout.php">Logout</a>
</center>
	
</body>
</html>









