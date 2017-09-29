<?php

include 'pdo_db_connection.php';


$amt = '1.00';
$query = 'SELECT title FROM Comics WHERE price > :amt';

$stmt = $pdo->prepare($query);

$stmt->bindParam(':amt', $amt, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
  echo $row['title'] . '<br />';
}

?>
