<?php
$dbms = 'mysql';
$host = 'localhost';
$db   = 'webforms';
$user = 'root';
$pass = 'root';
$pdo  = new PDO($dbms . ":host=" . $host . ";dbname=" . $db . ";charset=utf8", $user, $pass);
?>
