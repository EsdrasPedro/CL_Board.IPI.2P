<?php
    include '../Connect.php';

    $ID = $_GET['ID'];

    $det = $pdo->prepare("delete from CL_DISCIPLINA where ID = ?");
    $det->execute( [$ID] );

    header('Location: /Read.php');
?>