<?php

    include '../Connect.php';

    $desc_ = $_POST['descn'];

    $stmt = $pdo->prepare("INSERT INTO CL_CURSO (DESC_CURSO) VALUES (?)");
    $stmt->execute([$desc_]);

    header('Location: /Listar.php');

?>