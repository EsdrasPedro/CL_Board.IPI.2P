<?php
    include 'Connect.php';

    $nome1 = $_POST['DitName'];
    $nome2 = $_POST['codig'];


    $stmt = $pdo->prepare("INSERT INTO cl_disciplina (CODIGO, NOME) VALUES (?, ?)");
    $stmt->execute([$nome2, $nome1]);

    header('Location: /CL_disciplina.html');
?>