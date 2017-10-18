<!DOCTYPE HTML>
<?php
include 'php/users_check.php';
/*
echo $_POST["user"];

$test = $u->fetch_assoc();

echo $test['username'];
*/
$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$fail = false;
if(isset($_POST['user']) && isset($_POST['pwd']) && isset($_POST['pwd2']) && isset($_POST['email']) && isset($_POST['name']))
{
  $username = trim($mysqli->real_escape_string($_POST['user']), " ");
  $pwd = sha1(trim($mysqli->real_escape_string($_POST['pwd']), " "));
  $name = trim($mysqli->real_escape_string($_POST['name']), " ");
  $email = trim($mysqli->real_escape_string($_POST['email']), " ");

  while($row = $u->fetch_assoc()) {
    if($_POST['user'] == $row['username']) {
      echo "Username is already in use. Please choose a new username.<br>";
        $fail = true;
    } elseif ($_POST['email'] == $row['email']) {
      echo "Email is already in use. Do you already have an account here?<br>";
      $fail = true;
    }
  }
  if(!$fail)
  {
    $sqlst = $mysqli->prepare("INSERT INTO users (name, username, email, password) VALUES (?,?,?,?)");
    $sqlst->bind_param("ssss", $name, $username, $email, $pwd);
    $sqlst->execute();
    $sqlst->close();
  }
}
$mysqli->close();

?>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<!-- CUSTOM CSS -->
		<link rel="stylesheet" type="text/css" href="css/it210.css">

		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.js"></script>
    <script src="js/it210-register.js"></script>
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
				<h2 class="text-center" id="subtitletext">Make an account.</h2>
			</header>
			<div class="row">
        <?php include('php/nav.php'); ?>
				<div class="col-lg-8 content-box">
					<h3 class="content-heading">Register</h3>
          <p id="rerror"></p>
          <form id="rform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
              <label for="text">Your name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="text">Username:</label>
              <input type="text" class="form-control" id="user" name="user" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control password" id="pwd" name="pwd" required>
              <label for="password">Confirm Password:</label>
              <input type="password" class="form-control password" id="pwd2" name="pwd2" required>
            </div>
            <button type="button" class="btn btn-default" onclick="register()">Submit</button>
          </form>
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
