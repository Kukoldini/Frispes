<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Frispers</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
	<script src="script.js"></script>
</head>
<body>
	<?php
		require_once "header.html";
	?>
	<header class="header">
		<div class="container">
			<div class="introducting">
				<p>Introducing</p>
				<hr>
			</div>
			<div class="text">
				<p class="title"><span class="color-text">Revolutionary</span> co-working space to realize your innovation</p>
				<p class="right-text">In frispes, we spearhead new initiatives and provide mentorship to a new startup, and help grow their opportunities in key local, regional and global markets</p>
			</div>
			<img src="images/image 10.png" alt="" class="header-img">
			<div class="form-slider">
				<form action="#" class="header-form">
					<p class="form-text">Find your space now</p>
					<select name="loc" class="form"><option value="">Malang, Indonesia</option></select>
					<select name="loc" class="form"><option value="">Private Office</option></select>
					<select name="loc" class="form"><option value="">9 Aug 2020</option></select>
					<button class="form-button">find my space</button>
				</form>
			</div>
		</div>
	</header>
	<section>
		<div class="container">
			<div class="our-space-section">
				<div class="our-space-section-header">
					<p class="header-left-text">Our Spaces</p>
					<p class="header-right-text">Our space is designed to give you a different experience when working with your team or personally</p>
				</div>
				<div class="our-space-nav">
					<div class="our-space-nav-first">
						<img src="images/image 5.jpg" alt="">
						<p class="nav-first-bottom-text">Working with team</p>
					</div>
					<div class="our-space-nav-second">
						<p class="nav-second-p1">Private Space</p>
						<p class="nav-second-p2">Comfortable space, Full speed<br/>wifi, Free coffe & Snack<br/> 
						and many more</p>
						<a href="#" class="nav-second-button">Chek Avaibility <img src="images/XMLID.svg" alt=""></a>
					</div>
					<div class="our-space-nav-thrid">
						<img src="images/Rectangle 11.jpg" alt="">
						
						<p class="nav-first-bottom-text">Custom Office</p>
					</div>
				</div>
			</div>
		</div>
		<div class="social-container">
				<div class="social-block">
					<img src="images/social/meeting-room 1.svg" alt="">
					<div class="social-inside-block">
						<div class="social-block-text">
							<p class="social-text-paragraph">500+</p>
							<span>Meeting rooms</span>
						</div>
					</div>
				</div>
				<div class="social-block">
					<img src="images/social/circus 1.svg" alt="">
					<div class="social-inside-block">
						<div class="social-block-text">
							<p class="social-text-paragraph">100+</p>
							<span>Event spaces</span>
						</div>
					</div>
				</div>
				<div class="social-block">
					<img src="images/social/Flag.svg" alt="">
					<div class="social-inside-block">
						<div class="social-block-text">
							<p class="social-text-paragraph">60+</p>
							<span>Countries</span>
						</div>
					</div>
				</div>
				<div class="social-block">
					<img src="images/social/wifi 1.svg" alt="">
					<div class="social-inside-block">
						<div class="social-block-text">
							<p class="social-text-paragraph">500 Mbps</p>
							<span>Internet speed</span>
						</div>
					</div>
				</div>
				<div class="social-block">
					<img src="images/social/User 24px.svg" alt="">
					<div class="social-inside-block">
						<div class="social-block-text">
							<p class="social-text-paragraph">5K+</p>
							<span>Startup mentors</span>
						</div>
					</div>
				</div>
				<div class="social-block">
					<img src="images/social/User 24px group.svg" alt="">
					<div class="social-inside-block">
						<div class="social-block-text">
							<p class="social-text-paragraph">200+</p>
							<span>Communities inside</span>
						</div>
					</div>
				</div>
		</div>
	</section>
	<?php
		require_once "footer.html";
	?>
	<script src="script.js"></script>
</body>
</html>