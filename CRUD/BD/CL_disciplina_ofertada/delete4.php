<?php
    include 'Connection4.php';

    $ID = $_GET['ID'];

    $stmt = $pdo->prepare("delete from cl_disciplina_ofertada where ID = ?");
    $stmt->execute([$ID]);

    header('Location: Read4.php');
?>