<?php 
    $rows = file('BD4.CSV');
    $index = $_GET['line'];

    unset($rows[$index]);
ssss
    $new_data = implode('', $rows);

    file_put_contents('BD4.CSV', $new_data);

    header('Location: BD-4.php');

?>