<?php

    //$pdo = new PDO('mysql:host=sql10.freemysqlhosting.net;dbname=sql10423959', 'sql10423959', 'veUWr6HNrm');
    //$pdo = new PDO('mysql:host=localhost;dbname=cl_board;port=3306', 'root', 'Alessandra1-');
    $pdo = new PDO ('mysql:host=localhost;dbname=cl_board;port=3306', 'root', 'daniel333');
    /*$pdo = new PDO('mysql:host=localhost;dbname=cl_board;port=3306', 'root', 'Ipi2020');*/

    session_start();

    function is_logged() {
        if (isset($_SESSION['CL_USUARIO_ID'])){
            return true;
        }
        return false;
    }

    function user() {
        return $_SESSION['NOME'] ?? false;
    }
?>