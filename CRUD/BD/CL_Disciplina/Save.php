<?php
    include 'Connect.php';

    $nome1 = $_POST['codig'];
    $nome2 = $_POST['DName'];


    $stmt = $pdo->prepare("INSERT INTO cl_disciplnila (CODIGO, DISCIPLINA) VALUES (?, ?)");
    $stmt->execute([$codig, $DName]);

    header('Location: CL_Disciplina.html');
?>