<!DOCTYPE HTML>

<!--
Created by:Tyler Bristow
This is an outline of a basic HTML page. Feel free to make any changes you would like.
-->

<html>
	<head>
		<title>My Home Page</title>
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
				<h1 class="text-center" id="thetitle">IT 210 Website</h1>
			</header>
			<header class="subheader row">
				<img src="img/mountain.jpg" alt="subtitle picture" class="img-circle header-image center-block">
				<h2 class="text-center" id="subtitletext">This is a demonstration that I can do stuff with CSS</h2>
			</header>
			<div class="row">
				<nav class="col-lg-4 navbar-right">
					<ul class="list-unstyled nav nav-stacked nav-pills">
						<li class="nav-item">
							<a href="home.html" class="nav-link"><span class="glyphicon glyphicon-home"></span> Home</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> My projects <span class="glyphicon glyphicon-menu-down"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="project.html?project=0" class="nav-link"><span class="glyphicon glyphicon-king"></span> Project 1</a>
								</li>
								<li>
									<a href="project.html?project=1" class="nav-link"><span class="glyphicon glyphicon-queen"></span> Project 2</a>
								</li>
								<li>
									<a href="project.html?project=2" class="nav-link"><span class="glyphicon glyphicon-pawn"></span> Project 3</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="endorsements.html" class="nav-link"><span class="glyphicon glyphicon-gift"></span> Endorsements from others</a>
						</li>
						<li class="nav-item">
							<a href="contact.html" class="nav-link"><span class="glyphicon glyphicon-envelope"></span> Contact me</a>
						</li>
					</ul>
				</nav>
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
