<?php

    include './Auth/Connect.php';

    if (!is_logged()) {
      header('location: Login.php');
      exit();
    }
    
    $stmt = $pdo->query('SELECT * FROM CL_CURSO');
    $cursos = $stmt->fetchAll();

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
    <title>Agenda</title>

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
        .app {
          max-width: 470px;
          width: 100%;
          margin: auto;
          background-color: #fff;
          font-family: var(--font);
          border-radius: 16px;
          font-size: 15px;
          overflow: hidden;
          color: #455963;
          box-shadow: 0 20px 80px rgba(0,0,0,.3);
        }
    </style>
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark"> 
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column ">

  <header class="mb-auto">
    <div>
    </div>
  </header>

    <div class="app">

        <div class="bg-white rounded-lg shadow-sm p-5">
            <h4 class="mb-3 cc">Cadastrar Disciplina</h4>

          <div class="tab-content">
            <div class="tab-pane fade show active">
              <form class="needs-validation" role="form" action="./Auth/Disciplina/Save.php" method="POST" novalidate>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="col-form-label cc">Nome</label>
                        <input type="text" class="form-control" name="DitName" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="col-form-label cc">Código</label>
                        <input type="text" class="form-control" name="codig" required>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label class="col-form-label cc">Selecionar Curso</label>
                    <select class="form-select" name="select_curso" required>
                      <option selected disabled value="">Escolher...</option>  

                      <?php foreach($cursos as $curso): ?>
                        <option value=" <?= $curso['ID'] ?>" > <?= $curso['DESC_CURSO'] ?> </option>
                      <?php endforeach ?>
                      
                    </select>
                  </div>
                </div>

                <br>
                <button type="submit" class="btn btn-primary btn-block rounded-pill shadow-sm w-100">Continuar</button>
              </form>
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