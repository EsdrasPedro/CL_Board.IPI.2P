<?php
    include '../Connect.php';

    $ID = $_GET['ID'];

    $det = $pdo->prepare("delete from CL_DISCIPLINA_OFERTADA where ID = ?");
    $det->execute( [$ID] );

    header('Location: Read.php');
?>