<?php

    $ano = $_POST['country1'];
    $semestre = $_POST['country2'];
    $cor = $_POST['country3'];

    $data = $ano . ";" . $semestre . ";" . $cor . "\n";

    $fp = fopen('BD4.CSV', 'a');

    fwrite($fp, $data);

    header('Location: CL_Disciplina_ofertada.html');

?>