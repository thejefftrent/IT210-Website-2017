<?php
include 'settings.php';
session_start();

if(isset($_SESSION['username']))
{
  $mysqli = new mysqli($host, $user, $pass, $db);

  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  $u = $mysqli->query("SELECT * FROM users");
  while($row = $u->fetch_assoc()) {
    if($_SESSION['username'] == $row['username'])
    {
      $sql = "UPDATE users SET login = 0 WHERE userID=" . $row['userID'];
      $mysqli->query($sql);
    }
  }
  $mysqli->close();
}


$_SESSION = array();

session_destroy();

header('Location: ../login.php');
exit;

?>
