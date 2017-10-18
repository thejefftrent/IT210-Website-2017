<?php


use PHPMailer\PHPMailer\PHPMailer;

include 'php/users_check.php';
require 'php/phpmailer/src/PHPMailer.php';
require 'php/phpmailer/src/Exception.php';
require 'php/phpmailer/src/OAuth.php';
require 'php/phpmailer/src/SMTP.php';
require 'php/phpmailer/src/POP3.php';
	$log = false;
	$name = null;
	$email = null;
	$sent = false;
session_start();
if(isset($_SESSION['logged_in']) && isset($_SESSION['username']))
{

	while($row = $u->fetch_assoc()) {
		if($_SESSION['username'] == $row['username'])
		{
			$name = $row['name'];
			$email = $row['email'];
			$log = $row['login'];
		}
	}
	if($log)
	{

	} else {
		header('Location: login.php');
		exit;
	}
}
else
{
	header('Location: login.php');
	exit;
}

if(isset($_POST['emailbody']) && isset($_POST['subject']) && isset($_POST['subject']) && isset($_POST['subject']))
{
	$sendname = $_POST['contactname'];
	$sendemail = $_POST['email'];
	$body = $_POST['emailbody']. '<br><br>' . $sendname;

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "thisemailisforit210@gmail.com";
	$mail->Password = "impossiblesafe";
	$mail->setFrom($sendemail, $sendname); //use mysqli....
	$mail->addReplyTo($sendemail, $sendname);
	$mail->addAddress('thisemailisforit210@gmail.com', 'Web Admin');
	$mail->Subject = $_POST['subject'];
	$mail->isHTML(true);
	$mail->Body = $body;
	if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	$sent = true;
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
}
?>

<!DOCTYPE HTML>


<html>
	<head>
		<title>My Home Page</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<!-- CUSTOM CSS -->
		<link rel="stylesheet" type="text/css" href="css/it210.css">

		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/it210-contact.js"></script>
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
<?php include('php/nav.php'); ?>

				<div class="col-lg-8 content-box">
					<h3 class="content-heading">Contact me!</h3>
					<p id="cerror"></p>
					<?php if($sent){echo "<script type='text/javascript'>alert('Message sent!');</script>";}?>
					<form id="cform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<div class="form-group">
							<label for="text">Name:</label>
							<input type="text" class="form-control" id="contactname" name="contactname" value="<?php echo $name ; ?>">
						</div>
						<div class="form-group">
							<label for="text">Email:</label>
							<input type="text" class="form-control" id="email" name="email" value="<?php echo $email ; ?>">
						</div>
						<div class="form-group">
              <label for="text">Subject:</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Your website sucks!">
            </div>
						<div class="form-group">
							<label for="textarea">Your Comment or Question:</label>
							<textarea name="emailbody" class="form-control" id="emailbody" placeholder="Literally the worst." rows="5"></textarea>
						</div>
            <button type="button" class="btn btn-default" onclick="sendContact()">Submit</button>
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
