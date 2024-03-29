<?php
include 'php/users_check.php';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$comments = '';
while($row = $c->fetch_assoc()) {
	$comments .= '<tr><td>' . $row['name'] . '</td><td>' . $row['comments'] . '</td><td>' . $row['timestamp'] . '</td></tr>' ;
}

session_start();
$login = false;
$userID = null;
if(isset($_SESSION['logged_in']) && isset($_SESSION['username']))
{
	while($row = $u->fetch_assoc()) {
		if($row['username'] == $_SESSION['username']) {
			$userID = $row['userID'];
		}
	}

	$login = true;

	if(isset($_POST['projectComment']))
	{
		$comment = trim($mysqli->real_escape_string($_POST['projectComment']), " ");

		$sqlst = $mysqli->prepare("INSERT INTO comments (comments, userID) VALUES (?,?)");
		$sqlst->bind_param("si", $comment, $userID);
		$sqlst->execute();
		$sqlst->close();
	}
}
$mysqli->close();
?>


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
			<?php include('php/nav.php'); ?>
				<div id="content1" class="col-lg-8 content-box">
					<h3 class="content-heading">Make a Comment</h3>
					<?php if($login){include('php/projectform.php');}else{echo "<p>You must be logged in to comment.</p>";} ?>
				</div>
				<div id="content1" class="col-lg-8 content-box">
					<h3 class="content-heading">Comments</h3>
					<table class="table">
				    <thead>
				      <tr>
				        <th>Name</th>
				        <th>Comment</th>
				        <th>Date</th>
				      </tr>
				    </thead>
				    <tbody>
							<?php echo $comments ?>
				    </tbody>
				  </table>
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
