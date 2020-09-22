<?php 
include 'database/function.php';

if (isset($_SESSION['email'])){
	header('location:index.php');
}
 ?>
 <link rel="stylesheet" type="text/css" href="css/styleheader.css">
 <link rel="stylesheet" type="text/css" href="css/update.css">
 <link rel="stylesheet" type="text/css" href="css/profile.css">

<center>
<div class="login">
	<br><br><br>
	<h2>Member</h2>
	<form method="POST">
		<table class="tbl">
			<tr>
				<td><img id="imgs" src="img/email.png"></td>
				<td><input type="email" name="email" placeholder="xyz@email.com" Required></td>
			</tr>
			<tr>
				<td><img id="imgs" src="img/phone.png"></td>
				<td><input type="password" name="password" placeholder="*****" Required></td>
			</tr>
		</table>
		<div class="btnt">
		<button class="btn" name="login">Login</button>
		</div>
	</form>
</div>
<p><a id="sgn" href="https://mbasic.facebook.com/messages/read/?fbid=100013141967706&_rdr">Forgot Account?Inform</a></p>
<p><a id="sgn" href="signup.php">Do not have account?Signup here</a></p>
</center>


