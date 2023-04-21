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
		require_once "header.php";
		require_once "php/connection.php";
		if (isset($_POST['sglogin']) and isset($_POST['sgpassword'])) {
	  		$sglogin = $_POST['sglogin'];
			$sgpassword = md5($_POST['sgpassword']);
			$check_user = mysqli_query($conn, "SELECT * FROM user_accounts WHERE login = '$sglogin' AND password = '$sgpassword'");
			if (mysqli_num_rows($check_user) > 0) {
				$_SESSION['user_id'] = $sglogin;
				header('Location: index.php');
			} else {
				$alert = "Wrong login or password";
			}
	  	}
	?>
	<div class="register">
	<p id="reg">Log in</p>
		<div class="register-form">
			<form action="login.php" method="post">
 				<input class="input" type="text" name="sglogin" placeholder="Login"/>
 				<input class="input" type="password" name="sgpassword" placeholder="Password" />
 				<button class="input" id="button" type="sgsubmit" name="submit">Log in</button>
			</form>
		</div>
		<?php
			if (!empty($alert)) {
				echo $alert;
			}
		?>
		<p>Don't have account yet?</p>
		<a href="register.php" id="loginlink">Create account</a>
	</div>
	<?php 
  		require_once "footer.html";
	?>
</body>
</html>