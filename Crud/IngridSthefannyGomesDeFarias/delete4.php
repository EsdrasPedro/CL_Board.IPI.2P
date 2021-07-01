<?php 
$rows = file('BD4.csv');
$index = $_GET['line'];

unset($rows[$index]);

$new_data = implode('', $rows);

file_put_contents('BD4.csv', $new_data);

header('Location: BD-4.php');
?>

