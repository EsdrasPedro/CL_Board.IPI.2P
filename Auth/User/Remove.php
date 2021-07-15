<?php
    include '../init/Connect.php';

    $ID = $_GET['ID'];

    $det = $pdo->prepare("delete from CL_USUARIO where ID = ?");
    $det->execute( [$ID] );

    header('Location: Read.php');
?>