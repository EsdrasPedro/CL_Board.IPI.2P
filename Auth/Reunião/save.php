<?php 

    include 'Connect.php';

    $Name = $_POST['NameMateria'];
    $D_Inicio = $_POST['Date_Ini'];
    $D_Fim = $_POST['Date_Fim'];

    $stmt = $pdo->prepare("INSERT INTO CL_REUNIÃO_MARCADA (NOME, DATA_H_INICIO, DATA_H_FIM) VALUES (?, ?, ?)");
    $stmt->execute([$Name, $D_Inicio, $D_Fim]);

    header('Location: /index.html');


?>