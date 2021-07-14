<?php
    include 'connect.php';

    $ID = $_GET['ID'];

    $det = $pdo->prepare("delete from CL_REUNIÃO_MARCADA where ID = ?");
    $det->execute( [$ID] );

    header('Location: Read.php');
?>