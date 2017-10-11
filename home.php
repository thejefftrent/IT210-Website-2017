<!DOCTYPE HTML>

<!--
Created by:Tyler Bristow
This is an outline of a basic HTML page. Feel free to make any changes you would like.
-->

<html>
	<head>
		<title>My Home Page</title>
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&effect=fire-animation" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<!-- CUSTOM CSS -->
		<link rel="stylesheet" type="text/css" href="css/it210.css">

		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
		<link rel="icon" href="img/icon.ico" type="image/x-icon">
	</head>
	<body>
		<section class="container">
			<header class="mainheader row">
				<h1 class="text-center font-effect-fire-animation" id="thetitle">IT 210 Website</h1>
			</header>
			<header class="subheader row">
				<img src="img/mountain.jpg" alt="subtitle picture" class="img-circle header-image center-block">
				<h2 class="text-center" id="subtitletext">This is a demonstration that I can do stuff with CSS</h2>
			</header>
			<div class="row">
<?php include('php/nav.php'); ?>

				<div class="col-lg-8 content-box">
					<h3 class="content-heading">Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit neque sem, nec placerat lacus viverra sit amet. Maecenas dignissim iaculis quam nec fermentum. Nulla pharetra metus sed augue eleifend placerat. Nullam aliquet augue sit amet justo egestas, vel congue tortor condimentum. Nulla aliquet risus neque, ut scelerisque quam accumsan nec. Donec convallis, leo in volutpat facilisis, nisi sem blandit augue, id mattis augue erat vel mauris. Integer bibendum dictum ante, vel viverra ante dignissim eget. Phasellus vitae porttitor ex.</p>
				</div>
				<div class="col-lg-8 content-box">
					<h3 class="content-heading">A picture</h3>
					<img src="img/sheep.jpg" alt="sheep!" class="img-rounded content-image center-block">
				</div>
			</div>
		<footer class="row">
			<p id="thefinetext" class="text-center">
				Copyright &copy; 2017 by Jeff Trent
			</p>
		</footer>
		</section>
		<script>
			$(document).ready(function () {
			$('.dropdown-toggle').dropdown();
			});
		</script>
	</body>
</html>
