<?php
    include 'Connect.php';

    $nome1 = $_POST['fName'];
    $nome2 = $_POST['lName'];
    $nascer = $_POST['Nascimento'];
    $genero = $_POST['country'];
    $celular = $_POST['Celular'];
    $tipe1 = $_POST['country2'];
    $matricula = $_POST['Matricula'];
    $email = $_POST['email'];
    $senha = $_POST['password1']; 

    $stmt = $pdo->prepare("INSERT INTO cl_usuario (NOME, SOBRENOME, DATA_DE_NASCIMENTO, GENERO, N_CELULAR, TIPO_USUARIO, MATRICULA, E_MAIL, SENHA) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nome1, $nome2, $nascer, $genero, $celular, $tipe1, $matricula, $email, $senha]);

    header('Location: /CL_usuário.html');
?>