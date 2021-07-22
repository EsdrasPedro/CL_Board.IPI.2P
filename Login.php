<?php

  include './Auth/Connect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Grupo CL Board">
    <link href="./Assets/Css/bootstrap.min.css" rel="stylesheet">
    <title>CL Board</title>
    <style>
       .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
        .small{
          font-size:80%;
        }
        a, a:hover {
          text-decoration: none;
        }
    </style>
  </head>
  <body class="text-center">
    <link href="./Assets/Css/signin.css" rel="stylesheet">

<main class="form-signin">
  
  <form class="needs-validation" action="./Auth/Login/auth.php" method="POST" novalidate>
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
      <label for="floatingInput">Email</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" name="pw" placeholder="Senha" required>
      <label class="form-label" for="floatingPassword">Senha</label>
    </div>

    <div class="mb-3 text-right">
      <a href="Password-reset.html" class="small">Esqueceu a senha?</a>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>

    <div class="text-center mt-3 small">
      Não tem uma conta? <a href="CL_usuário.html">Cadastre-se</a>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small small">
      <p class="mb-1">&copy; 2021 CL Board</p>
    </footer>
    
  </form>

</main>

  <script src="./Assets/Js/form-validation.js"></script>

  </body>
</html>
