<?php
	
	$Cdg = $_POST['codig'];
    
    $Dna = $_POST['DName'];

    $data = $Cdg . ";" . $Dna . "\n";

    $fp = fopen('BD3.csv', 'a');

    fwrite($fp, $data);

    header('Location: CL_Disciplina.html');

?>