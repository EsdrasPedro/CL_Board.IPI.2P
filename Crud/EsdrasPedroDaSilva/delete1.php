<?php 
$rows = file('BD1.CSV');
$index = $_GET['line'];

unset($rows[$index]);

$new_data = implode('', $rows);

file_put_contents('BD1.CSV', $new_data);

header('Location: BD-1.php');
?>