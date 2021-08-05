<?php

    include './Auth/Connect.php';

    if (!is_logged()) {
        header('location: Login.php');
        exit();
    }

    $stmt = $pdo->query('SELECT * FROM CL_DISCIPLINA');
    $disciplinas = $stmt->fetchAll();

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
            <h4 class="mb-3 cc">Cadastrar Disciplina</h4>

          <div class="tab-content">
            <div class="tab-pane fade show active">
              <form class="needs-validation" role="form" action="./Auth/Ofertado/Save.php" method="POST" novalidate>

                <div class="row">
                  <div class="col-md-6 form-group">
                   <label class="col-form-label cc">Ano</label>
                    <select class="form-select" name="country1" required>
                      <option selected disabled value="">Escolher...</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                    </select>
                    <div class="invalid-feedback">Por favor, selecione algo válido.</div>
                  </div>

                  <div class="col-md-6 form-group">
                    <label class="col-form-label cc">Semestre</label>
                    <select class="form-select" name="country2" required>
                      <option selected disabled value="">Escolher...</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                    <div class="invalid-feedback">Por favor, selecione algo válido.</div>
                  </div>

                </div>

                <div class="row">
                <div class="col-md-4 form-group">
                  <label class="col-form-label cc">Cor</label>
                  <input type="color" class="form-control form-control-color" name="country3" list="arcoIris" value="#FF0000" required>
                  <datalist name="country3" required>
                    <option value="#FF0000">Vermelho</option>
                    <option value="#FFA500">Laranja</option>
                    <option value="#FFFF00">Amarelo</option>
                    <option value="#008000">Verde</option>
                    <option value="#0000FF">Azul</option>
                    <option value="#4B0082">Indigo</option>
                    <option value="#EE82EE">Violeta</option>
                  </datalist>
                  <div class="invalid-feedback">Por favor, selecione uma cor.</div>
                </div>

              </div>

              <div class="row">
                  <div class="col-md-12 form-group">
                    <label class="col-form-label cc">Selecionar Disciplina</label>
                    <select class="form-select" name="select_disciplina" required>
                      <option selected disabled value="">Escolher...</option>  

                      <?php foreach($disciplinas as $disciplina): ?>
                        <option value=" <?= $disciplina['ID'] ?>" > <?= $disciplina['NOME'] ?> </option>
                      <?php endforeach ?>
                      
                    </select>
                  </div>
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