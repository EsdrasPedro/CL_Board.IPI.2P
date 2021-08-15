<?php

  include './Auth/Connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="PageLogin.css" rel="stylesheet">
    <title>CL Board</title>
</head>
<body>
    <main class="main">
        <div class="container">
            <section class="wrapper">
                <div class="heading">
                    <h1 class="text text-large">Login</h1>
                    <p class="text text-normal">Não tem uma conta? <span><a href="CL_Usuario.php" class="small text ">Cadastre-se</a></span>
                    </p>
                </div>
                <form class="form" action="./Auth/Login/auth.php" method="POST" novalidate>
                    <div class="input-control">
                        <label class="input-label" hidden>Email</label>
                        <input type="email" name="email" class="input-field" placeholder="Email" required>
                    </div>
                    <div class="input-control">
                        <label class="input-label" hidden>Senha</label>
                        <input type="password" name="pw" class="input-field" placeholder="Senha" required>
                    </div>
                    <div class="input-control">
                        <a href="Password-reset.php" class="small text">Esqueceu a senha?</a>
                        <input type="submit" class="input-submit" value="Entrar">
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>