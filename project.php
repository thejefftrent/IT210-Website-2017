<!DOCTYPE HTML>

<!--
Created by:Tyler Bristow
This is an outline of a basic HTML page. Feel free to make any changes you would like.
-->

<html>
	<head>
		<title>My Projects</title>
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&effect=fire-animation" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<!-- CUSTOM CSS -->
		<link rel="stylesheet" type="text/css" href="css/it210.css">

		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/it210-project.js"></script>
		<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
		<link rel="icon" href="img/icon.ico" type="image/x-icon">
	</head>
	<body>
		<section class="container">
			<header class="mainheader row">
				<h1 class="text-center font-effect-fire-animation" id="thetitle">IT 210 Website</h1>
			</header>
			<header id ="project-slider" class="subheader row carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol id="slider-indicator" class="carousel-indicators">
					<li data-target="#project-slider" data-slide-to="0"></li>
					<li data-target="#project-slider" data-slide-to="1"></li>
					<li data-target="#project-slider" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div id="slider-inner" class="carousel-inner">
					<div class="item">
						<img src="img/flower.jpeg" alt="subtitle picture" class="img-circle header-image center-block">
						<h2 class="text-center" id="subtitletext">Here is my first project</h2>
					</div>
					<div class="item">
						<img src="img/sheep.jpg" alt="subtitle picture" class="img-circle header-image center-block">
						<h2 class="text-center" id="subtitletext">Here is the second project</h2>
					</div>
					<div class="item">
						<img src="img/shark.jpg" alt="subtitle picture" class="img-circle header-image center-block">
						<h2 class="text-center" id="subtitletext">And now here is the third project</h2>
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#project-slider" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#project-slider" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</header>
			<div class="row">
				<nav class="col-lg-4 navbar-right">
				  <ul class="list-unstyled nav nav-stacked nav-pills">
				    <li class="nav-item">
				      <a href="php/logout.php" class="nav-link">Logout</a>
				    </li>
				    <li class="nav-item">
				      <a href="home.php" class=" nav-link"><span class="glyphicon glyphicon-home"></span> Home</a>
				    </li>
				    <li class="nav-item">
				      <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> My projects <span class="glyphicon glyphicon-menu-down"></span></a>
				      <ul class="dropdown-menu">
				        <li>
				          <a href="project.php?project=0" class="nav-link"><span class="glyphicon glyphicon-king"></span> Project 1</a>
				        </li>
				        <li>
				          <a href="project.php?project=1" class="nav-link"><span class="glyphicon glyphicon-queen"></span> Project 2</a>
				        </li>
				        <li>
				          <a href="project.php?project=2" class="nav-link"><span class="glyphicon glyphicon-pawn"></span> Project 3</a>
				        </li>
				      </ul>
				    </li>
				    <li class="nav-item">
				      <a href="endorsements.php" class=" nav-link"><span class="glyphicon glyphicon-gift"></span> Endorsements from others</a>
				    </li>
				    <li class="nav-item">
				      <a href="contact.php" class=" nav-link"><span class="glyphicon glyphicon-envelope"></span> Contact me</a>
				    </li>
				  </ul>
				</nav>

				<div id="content1" class="col-lg-8 content-box">
					<h3 class="content-heading">Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit neque sem, nec placerat lacus viverra sit amet. Maecenas dignissim iaculis quam nec fermentum. Nulla pharetra metus sed augue eleifend placerat. Nullam aliquet augue sit amet justo egestas, vel congue tortor condimentum. Nulla aliquet risus neque, ut scelerisque quam accumsan nec. Donec convallis, leo in volutpat facilisis, nisi sem blandit augue, id mattis augue erat vel mauris. Integer bibendum dictum ante, vel viverra ante dignissim eget. Phasellus vitae porttitor ex.</p>
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
