<?php
    include '../Connect.php';

    $nome1 = $_POST['DitName'];
    $nome2 = $_POST['codig'];
    $cur = $_POST['select_curso'];


    $stmt = $pdo->prepare("INSERT INTO CL_DISCIPLINA (CODIGO, NOME, CUR_ID) VALUES (?, ?, ?)");
    $stmt->execute([$nome2, $nome1, $cur]);

    header('Location: /CL_disciplina_ofertada.php');
?>