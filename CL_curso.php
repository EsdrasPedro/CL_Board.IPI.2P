<?php

    include './Auth/Connect.php';

    if (!is_logged()) {
        header('location: Login.php');
        exit();
    }

?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Grupo CL Board">
    <link href="./Assets/Css/bootstrap.min.css" rel="stylesheet">
    <link href="./Assets/Css/cover.css" rel="stylesheet">
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
        body {
            background: #f5f5f5;
        }

        .rounded-lg {
            border-radius: 1rem;
        }
        .cc{
            color: black;
        }
        .cd{
          color:grey
        }
    </style>
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark"> 
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column ">

  <header class="mb-auto">
    <div>
    </div>
  </header>

    <div class="row">
      <div class="col-lg-5 mx-auto">
        <div class="bg-white rounded-lg shadow-sm p-5">
            <h4 class="mb-3 cc">Cadastrar Curso</h4>

          <div class="tab-content">
            <div class="tab-pane fade show active">
              <form class="needs-validation" role="form" action="./Auth/Curso/Save.php" method="POST" novalidate>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="col-form-label cc">Nome</label>
                        <input type="text" class="form-control" name="descn" placeholder="Nome" required>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-primary btn-block rounded-pill shadow-sm w-100">Cadastrar</button>
              </form>
            </div>
          </div>
  
        </div>
      </div>
    </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  </footer>
</div>
      <script src="./Assets/Js/form-validation.js"></script>
  </body>
</html>