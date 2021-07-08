<?php

 include 'connect.php';
 
 $Id = $_POST['f_Id'];
 $name = $_POST['f_Disciplina'];
 $DateTime_Inicio = $_POST['f_HoraInicial'];
 $DateTime_Fim = $_POST['f_HoraFinal'];
 $Id_DIO = $_POST['f_ID_DIO'];

$pdo = new PDO ('mysql:host=localhost;dbname=cl_board;port=3306', 'root', 'daniel333');

$stmt = $pdo->prepare("INSERT INTO cl_reuniao_marcada (ID, NOME, DATA_H_INICIO, DATA_H_FIM, DIO_ID) VALUES (?,?,?,?,?) ");
$stmt->execute ([$Id, $name, $DateTime_Inicio, $DateTime_Fim, $Id_DIO]);


header('Location: create.html');

?>