<?php 
$rows = file('BD.CSV');

$index = $_GET['line'];

unset($rows[$index]);
	
$new_data = implode('', $rows);

file_put_contents('BD.CSV', $new_data);

header('Location: table.php');
?>