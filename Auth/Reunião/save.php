<?php 
include 'connect.php';


$Name = $_POST['NameMateria'];
$D_Inicio = $_POST['Date_Ini'];
$D_Fim = $_POST['Date_Fim'];

$stmt = $pdo->prepare("INSERT INTO cl_reunião_marcada (NOME, DATA_H_INICIO, DATA_H_FIM) VALUES (?,?,?)");
$stmt->execute([$Name, $D_Inicio, $D_Fim]);

header('Location: /Cl_reuniao_marcada.html');


?>