<?php
    
    include '../Connect.php';

    $us = $_POST['email'];
    $pw = $_POST['pw'];

    $stmt = $pdo->prepare('select * from CL_USUARIO where E_MAIL = ? and SENHA = ?');
    $stmt->execute([$us, $pw]);

    $data = $stmt->fetchAll();

    if (sizeof($data) == 0) {
        
        header('location: /index.php');
        exit();

    }

    $cl_usuario = $data[0];
    $_SESSION['CL_USUARIO_ID'] = $cl_usuario['ID'];
    $_SESSION['E_MAIL'] = $cl_usuario['E_MAIL'];

    header('location: /index.php');

?>