<?php
    include 'Connect.php';

    $ID = $_GET['ID'];

    $det = $pdo->prepare("delete from cl_usuario where ID = ?");
    $det->execute( [$ID] );

    header('Location: Read.php');
?>