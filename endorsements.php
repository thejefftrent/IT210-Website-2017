<?php

	function addEndorsement($name, $comment, $date)
	{
		$ejsontext = file_get_contents("js/endorsement.json");
		$ejson = json_decode($ejsontext, true);

		$newE = new stdClass();
		$newE->name = $name;
		$newE->comment = $comment;
		$newE->date = $date;
		$newE->name = $name;
		$newE->timestamp = time();

		$addE = json_encode($newE);

		array_push($ejson, $newE);

		file_put_contents('js/endorsement.json', json_encode($ejson));
	}

	if(isset($_POST['name']) && isset($_POST['comment']) && isset($_POST['date']))
	{
		$name = htmlspecialchars($_POST['name']);
		$comment = htmlspecialchars($_POST['comment']);
		$date = htmlspecialchars($_POST['date']);

		echo $name;
		echo $comment;
		addEndorsement($name, $comment, $date);
	}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Endorsements</title>
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&effect=fire-animation" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<!-- CUSTOM CSS -->
		<link rel="stylesheet" type="text/css" href="css/it210.css">

		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/it210-endorsements.js"></script>
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
				<h2 class="text-center" id="subtitletext">Here are some endorsements from people who might like me!</h2>
			</header>
<?php include('php/nav.php'); ?>

				<div class="col-lg-8 content-box">
					<h3 class="content-heading">Write an endorsement</h3>
					<form id="eForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<div class="form-group">
							<label for="text">Your Name</label>
							<input name="name" onkeyup="saveComments()" type="text" class="form-control" id="nameField" placeholder="John Smith"></input>
						</div>
						<div class="form-group">
							<label for="textarea">Your Endorsement</label>
							<textarea name="comment" onkeyup="saveComments()" class="form-control" id="commentField" placeholder="I think he is really great!" rows="5"></textarea>
						</div>
						<div class="form-group">
							<label for="date">Date of Endorsement</label>
							<input name="date" onkeyup="saveComments()" type="date" id="timeField">
						</div>
						<button type="button" data-toggle="modal" class="btn btn-default" data-target="#myModal">Submit</button>

						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Submit Endorsement?</h4>
									</div>
									<div class="modal-body">
										<p>Are you sure you want to submit your endorsement?</script></p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal" onclick="commitNewEndorsement()">Okay</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-8 content-box">
					<h3 class="content-heading">What others have said</h3>
					<button class="btn btn-default" onclick="sortByKey('name');">Sort by Name</button>
					<button class="btn btn-default" onclick="sortByKey('date');">Sort by Time</button>
					<div id="AllEndor">
					</div>
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
