<?php

    include './Auth/Connect.php';

    if (!is_logged()) {
        header('location: Login.php');
        exit();
    }

    $stmt = $pdo->query('SELECT CL_DISCIPLINA_OFERTADA.ID, CL_DISCIPLINA.NOME, CL_DISCIPLINA_OFERTADA.ANO, CL_DISCIPLINA_OFERTADA.SEMESTRE 
                        FROM CL_DISCIPLINA_OFERTADA JOIN CL_DISCIPLINA 
                        ON CL_DISCIPLINA.ID = CL_DISCIPLINA_OFERTADA.DIS_ID 
                        GROUP BY CL_DISCIPLINA_OFERTADA.ID');
    $data = $stmt->fetchAll();
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
          color:grey;
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
            <h4 class="mb-3 cc">Marcar Chamada</h4>

          <div class="tab-content">
            <div class="tab-pane fade show active">
              <form class="needs-validation" role="form" action="./Auth/Reunião/save.php" method="POST" novalidate>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label class="col-form-label cc">Nome</label>
                    <input type="text" name="NameMateria" class="form-control" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                      <label class="col-form-label cc">Horário de Início</label>
                      <input type="datetime-local" name="Date_Ini" class="form-control" required>  
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="col-form-label cc">Horário de Término</label>
                    <input type="datetime-local" name="Date_Fim" class="form-control" required>  
                  </div>
                </div>

                <div class="col-md-12 form-group">
                  <label class="col-form-label cc">Selecionar Disciplina Ofertada</label>
                  <select class="form-select" name="select_disciplina" required>
                    <option selected disabled value="">Escolher...</option>  

                    <?php foreach ($data as $row ): ?>
                      <option value=" <?= $row['ID'] ?>" > <?= $row['NOME'] ?>  -  <?= $row['ANO'] ?>  -  <?= $row['SEMESTRE'] ?> 
                      </option>
                    <?php endforeach ?>
                    
                  </select>
                </div>
                
                <br>
                <button type="submit" class="btn btn-primary btn-block rounded-pill shadow-sm w-100">Confirmar</button>
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