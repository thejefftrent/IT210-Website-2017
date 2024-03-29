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
if(isset($_POST['user']) && isset($_POST['pwd']))
{
  while($row = $u->fetch_assoc()) {
    if($_POST['user'] == $row['username'] && sha1($_POST['pwd']) == $row['password']) {
      echo "MATCH!";
      $sql = "UPDATE users SET login = 1 WHERE userID=" . $row['userID'];
      $mysqli->query($sql);
      $mysqli->close();
      session_start();
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $row['username'];
      header('Location: contact.php');
      exit;
    }
  }
  $fail = true;
}
$mysqli->close();

?>
<html>
	<head>
		<title>Logins</title>
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
				<h2 class="text-center" id="subtitletext">Please Login!</h2>
			</header>
			<div class="row">
        <?php include('php/nav.php'); ?>
				<div class="col-lg-8 content-box">
					<h3 class="content-heading">Login</h3>
          <?php if($fail){echo '<p style="color: red;">Password or username is incorrect, please try again.</p>';}?>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
              <label for="text">Username:</label>
              <input type="text" class="form-control" id="user" name="user">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="pwd">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
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
