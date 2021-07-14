<?php
    include 'connect.php';

    $ID = $_GET['ID'];

    $det = $pdo->prepare("delete from cl_reunião_marcada where ID = ?");
    $det->execute( [$ID] );

    header('Location: Read.php');
?>