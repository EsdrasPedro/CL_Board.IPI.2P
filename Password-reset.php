<?php

    include './Auth/Connect.php';

    if (!is_logged()) {
        header('location: Login.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Assets/Css/PageLogin.css" rel="stylesheet">
    <title>Redefinir Senha</title>
</head>

<body>
  <main class="main">
      <div class="container">
          <section class="wrapper">
              <div class="heading">
                  <h1 class="text text-large">Problemas para entrar?</h1>
              </div>
              <form class="form" action="./Auth/Login/auth.php" method="POST" novalidate>
                  
                <div class="input-control">
                    <label class="input-label" hidden>Nova Senha</label>
                    <input type="password" name="pw" class="input-field" placeholder="Senha" required>
                  </div>
                  
                  <div class="input-control">
                    <div class="text-center mt-3 small">
                      <a href="CL_usuário.html">Criar nova conta</a>
                  </div>
                    <input type="submit" class="input-submit" value="Enviar link">

                  </div>
              </form>
          </section>
      </div>
  </main>
</body>
</html>