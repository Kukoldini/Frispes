<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/register.css">
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body>
	<?php 
		require_once "header.html";
		require_once "php/connection.php"
	?>
	<div class="register">
	<p id="reg">REGISTER</p>
		<div class="register-form">
			<form action="register.php" method="post">
				<input class="input" type="text" name="mail" placeholder="Email">
 				<input class="input" type="text" name="login" placeholder="login"/>
 				<input class="input" type="password" name="password" placeholder="Password" />
 				<button class="input" id="button" type="submit" name="submit">Register</button>
			</form>
		</div>
		<p>Already have account?</p>
		<a href="login.php" id="loginlink">Login</a>
	</div>
	<?php 
  		if (isset($_POST['submit'])) {
  			if ($_POST['password'] ) {
  				// code...
  			}
  			$mail = $_POST['mail'];
    		$login = $_POST['login'];
    		$password = md5($_POST['password']);
    		$sql = "INSERT INTO user_accounts(mail, login, password) VALUES ('$mail', '$login', '$password')";
    		$conn->query($sql);
    		$conn->close();

    		header('Location: http://localhost/website/index.php');
  		}
  		$_SESSION['message'] = "Wrong Password";
	?>
</body>
</html>