<?php
    include 'Connect.php';

    $ano = $_POST['country1']; 
    $semestre = $_POST['country2'];  
    $cor = $_POST['country3'];  

    $stmt = $pdo->prepare("INSERT INTO cl_disciplina_ofertada (ANO, SEMESTRE, COR_DISC) VALUES (?, ?, ?)");
    $stmt->execute([$ano, $semestre, $cor]);

    header('Location: /CL_disciplina_ofertada.html');
?>