<?php
    include '../Connect.php';

    $nome1 = $_POST['DitName'];
    $nome2 = $_POST['codig'];


    $stmt = $pdo->prepare("INSERT INTO CL_DISCIPLINA (CODIGO, NOME) VALUES (?, ?)");
    $stmt->execute([$nome2, $nome1]);

    header('Location: /CL_disciplina_ofertada.html');
?>