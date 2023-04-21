<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/button.css">
</head>
<body>
	<div class="up_menu">
		<p class="logo">Frispers.</p>
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Workspace</a></li>
			<li><a href="#">Service</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Revievs</a></li>
			<li><a href="#">Contact us</a></li>
		</ul>
		<ul class="login">
			<?php
				if (isset($_SESSION['user_id'])) {
					echo '<form action="header.php" method="post">
						  	<button id="logout" name="logout">Logout</button>
						  </form>';
					if (isset($_POST['logout'])) {
						unset($_SESSION['user_id']);
						header('Location: index.php');
					}
				} else {
					echo '<li><a href="login.php">Log in</a></li>
						  <li><a href="register.php">Sign up</a></li>';
				}
			?>
		</ul>
	</div>
</body>
</html>