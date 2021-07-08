<?php
    include 'Connect.php';

    $ID = $_GET['ID'];

    $det = $pdo->prepare("delete from cl_reuniao_marcada where ID = ?");
    $det->execute( [$ID] );

    header('Location: index.php');
?>