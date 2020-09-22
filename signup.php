<?php 
include 'database/function.php';
if (isset($_SESSION['email'])){
	header('location:index.php');
}
 ?>
  <link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  		<link rel="stylesheet" type="text/css" href="css/update.css">

<center>
<div class="signup">
	<br><br><br>
	<h2>Registration</h2>
	<?php include 'database/error.php'; ?>



	<form method="POST">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Your name" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="xyz@email.com" Required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="******" Required></td>
			</tr>
		</table>
		<div class="btnt">
		<button class="btn" name="register">Signup</button>
		</div>
		<p><a id="sgn" href="login.php">Already have account?Login here</a></p>
	</form>
</div>
</div>

</center>
