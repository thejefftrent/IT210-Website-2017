<?php
$dbms = 'mysql';
$host = 'localhost';
$db   = 'webforms';
$pass = 'password';
$user = 'limiteduse';
$pdo  = new PDO($dbms . ":host=" . $host . ";dbname=" . $db . ";charset=utf8", $user, $pass);
?>
