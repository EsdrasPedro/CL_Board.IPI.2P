<?php
    include 'Connect.php';

    $ano = $_POST['ano']; 
    $semestre = $_POST['semestre'];  
    $cor = $_POST['cor'];  

    $stmt = $pdo->prepare("INSERT INTO cl_disciplina_ofertada (ANO, SEMESTRE, COR) VALUES (?, ?, ?)");
    $stmt->execute([$ano, $semestre, $cor]);

    header('Location: CL_disciplina_ofertada.html');
?>