<?php
    include '../Connect.php';

    session_destroy();
    header('location: /Login.html');

?>