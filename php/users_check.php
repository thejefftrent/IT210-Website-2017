<?php
include 'settings.php';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$u = $mysqli->query("SELECT * FROM users");
$c = $mysqli->query("SELECT users.name, comments.comments, comments.timestamp FROM comments INNER JOIN users ON users.userID=comments.userID");

$mysqli->close();
?>
