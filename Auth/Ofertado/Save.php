<?php
    include '../Connect.php';

    $ano = $_POST['country1']; 
    $semestre = $_POST['country2'];  
    $cor = $_POST['country3'];  

    $stmt = $pdo->prepare("INSERT INTO CL_DISCIPLINA_OFERTADA (ANO, SEMESTRE, COR_DISC) VALUES (?, ?, ?)");
    $stmt->execute([$ano, $semestre, $cor]);

    header('Location: /index.html');
?>