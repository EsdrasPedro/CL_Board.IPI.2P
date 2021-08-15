<?php 

    include 'Connect.php';

    $Name = $_POST['NameMateria'];
    $R_Data = $_POST['DataReuniao']
    $D_Inicio = $_POST['Date_Ini'];
    $D_Fim = $_POST['Date_Fim'];
    $Select_D = $_POST['select_disciplina'];

    $stmt = $pdo->prepare("INSERT INTO CL_REUNIÃO_MARCADA (NOME, DATA, DATA_H_INICIO, DATA_H_FIM, DIO_ID) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$Name, $R_Data, $D_Inicio, $D_Fim, $Select_D]);

    header('Location: /Listar_Reuniao_Marcada.php');


?>