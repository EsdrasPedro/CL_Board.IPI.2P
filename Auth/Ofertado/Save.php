<?php
    include '../Connect.php';

    $ano = $_POST['country1']; 
    $semestre = $_POST['country2'];
    $cor = $_POST['country3']; 
    $select_dis = $_POST['select_disciplina']; 
    $id = $_SESSION['CL_USUARIO_ID'];

    $stmt = $pdo->prepare("INSERT INTO CL_DISCIPLINA_OFERTADA (ANO, SEMESTRE, COR_DISC, DIS_ID, USU_ID_PROFESSOR) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$ano, $semestre, $cor, $select_dis, $id]);

    header('Location: /ListaO.php');
?>

