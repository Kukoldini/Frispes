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
	<p id="reg">Register</p>
		<div class="register-form">
			<form action="register.php" method="post">
				<input class="input" type="text" name="mail" placeholder="Email">
 				<input class="input" type="text" name="login" placeholder="login"/>
 				<input class="input" type="password" name="password" placeholder="Password" />
 				<button class="input" id="button" type="submit" name="submit">Register</button>
			</form>
		</div>
		<p>
			<?php
				//Проверка заполнености формы
				if (isset($_POST['submit'])) {
			  		$mail = $_POST['mail'];
			    	$login = $_POST['login'];
			    	$password = md5($_POST['password']);
			    	//Проверка свободного логина
			    	$sqlLoginVerify = mysqli_query($conn, "SELECT * FROM `user_accounts` WHERE `login` = '$login'");
					if (mysqli_num_rows($sqlLoginVerify) > 0) {
			    		$_SESSION['loginAlert'] = "This login name is already taked";
			    		echo "This login is already taked";
			    	} 
			    	//Проверка заполненности всех полей
			    	elseif (empty($mail)) {
			    		echo "Fill in all fields";
			    	} elseif (empty($login)) {
			    		echo "Fill in all fields";
			    	} elseif (empty($password)) {
			    		echo "Fill in all fields";
			    	} else {
			    		//Добавление в базу данных, перенаправление на страницу входа
			    		$sql = "INSERT INTO user_accounts(mail, login, password) VALUES ('$mail', '$login', '$password')";
			    		
					    mysqli_query($conn, $sql);
					    $conn->close();
					    header('Location: http://localhost/website/login.php');
			    	}
			  	}
			?>
		</p>
		<p>Already have account?</p>
		<a href="login.php" id="loginlink">Login</a>
	</div>
	<?php 
		require_once "footer.html";
	?>
	<script src="script.js"></script>
</body>
</html>