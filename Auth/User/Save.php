<?php
    include '../Connect.php';

    $nome1 = $_POST['fName'];
    $nome2 = $_POST['lName'];
    $nascer = $_POST['Nascimento'];
    $genero = $_POST['country'];
    $celular = $_POST['Celular'];
    $tipe1 = $_POST['country2'];
    $matricula = $_POST['Matricula'];
    $email = $_POST['email'];
    $senha = $_POST['password1']; 
    $senha2 = $_POST['password2'];

    if ($senha != $senha2) {
        header('location: /CL_Usuario.php');
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO CL_USUARIO (NOME, SOBRENOME, DATA_DE_NASCIMENTO, GENERO, N_CELULAR, TIPO_USUARIO, MATRICULA, E_MAIL, SENHA) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nome1, $nome2, $nascer, $genero, $celular, $tipe1, $matricula, $email, $senha]);

    header('Location: /Login.php');
?>