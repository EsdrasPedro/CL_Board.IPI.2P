<?php 

    include 'Connect.php';

    $Name = $_POST['NameMateria'];
    $D_Inicio = $_POST['Date_Ini'];
    $D_Fim = $_POST['Date_Fim'];
    $Select_D = $_POST['select_disciplina'];

    $stmt = $pdo->prepare("INSERT INTO CL_REUNIÃO_MARCADA (NOME, DATA_H_INICIO, DATA_H_FIM, DIO_ID) VALUES (?, ?, ?, ?)");
    $stmt->execute([$Name, $D_Inicio, $D_Fim, $Select_D]);

    header('Location: /index.php');


?>