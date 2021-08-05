<?php
    include '../Connect.php';

    $ano = $_POST['country1']; 
    $semestre = $_POST['country2'];
    $cor = $_POST['country3']; 
    $dis = $_POST['dis_id'];
    $id = $_SESSION['CL_USUARIO_ID'];

    $stmt = $pdo->prepare("INSERT INTO CL_DISCIPLINA_OFERTADA (ANO, SEMESTRE, COR_DISC, DIS_ID, USU_ID_PROFESSOR) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$ano, $semestre, $cor, $dis, $id]);

    header('Location: /index.php');
?>