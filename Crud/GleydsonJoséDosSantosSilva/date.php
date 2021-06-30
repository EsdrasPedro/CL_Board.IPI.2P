<?php
 
 

 $name = $_POST['f_Disciplina'];
 $horario = $_POST['f_HoraInicial'];
 $HoraFinal= $_POST['f_HoraFinal'];
 $data = $_POST['f_DataEncontro'];


$saved = $name . ";" . $horario . ";" . $HoraFinal . ";" . $data . "\n";

$fp = fopen('BD.csv', 'a');

fwrite($fp, $saved);

header('Location: index.html');

?>