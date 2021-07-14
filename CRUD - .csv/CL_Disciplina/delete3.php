<?php 
$rows = file('BD3.csv');
$index = $_GET['line'];

unset($rows[$index]);

$new_data = implode('', $rows);

file_put_contents('BD3.csv', $new_data);

header('Location: BD-3.php');
?>