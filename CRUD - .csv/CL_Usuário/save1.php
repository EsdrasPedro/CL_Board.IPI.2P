<?php

    $nome1 = $_POST['fName'];
    $nome2 = $_POST['lName'];
    $genero = $_POST['country'];
    $celular = $_POST['Celular'];
    $nascer = $_POST['Nascimento'];
    $tipe1 = $_POST['country2'];
    $matricula = $_POST['Matricula'];
    $email = $_POST['email'];
    $senha = $_POST['password1']; 

    $data = $nome1 . ";" . $nome2 . ";" . $nascer . ";" . $genero . ";" . $celular .";" . $tipe1 . ";" . $matricula . ";" . $email . ";" . $senha . "\n";

    $fp = fopen('BD1.CSV', 'a');

    fwrite($fp, $data);

    header('Location: CL_usuário1.html');

?>