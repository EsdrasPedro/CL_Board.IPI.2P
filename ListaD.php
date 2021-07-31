<?php
    include './Auth/Connect.php';

    if (!is_logged()) {
      header('location: Login.php');
      exit();
    }
    
    $stmt = $pdo->query('SELECT * FROM CL_DISCIPLINA');
    $discs = $stmt->fetchAll();

?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Grupo CL Board">
    <link href="/Assets/Css/bootstrap.min.css" rel="stylesheet">
    <link href="/Assets/Css/cover.css" rel="stylesheet">
    <link href="/Assets/Css/chartist.css" rel="stylesheet">
    <link href="/Assets/Css/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="/Assets/Css/gd.css" rel="stylesheet">
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
        .task-delete {
          display: flex;
        }
        .task-item {
          padding: 12px 20px;
        }
        .task-input {
          flex: 1;
          font-size: 16px;
          font-family: var(--font);
          padding: 10px 20px;
          border: 0;
          box-shadow: 0 -1px 0 #e2e4ea inset;
          color: #455963;
        }
        .task-item + .task-item {
          border-top: 1px solid #eef0f5;
        }
        .task-list {
          max-height: 60vh;
          overflow: auto;
        }
    </style>
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark"> 
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">

  <header class="mb-auto">
    <div>
    </div>
  </header>

    <div class="row">
      <div class="col-lg-5 mx-auto">
        <div class="bg-white rounded-lg shadow-sm p-5">

            <div class="task-input">
              <h4 class="mb-3 cc">Lista de Disciplinas</h4>
            </div>

          <div class="tab-content">
            <div class="row">

            <div class="tab-pane fade show active task-list">
              
              <?php foreach($discs as $disc): ?>
                <p class="cc justify-content-between align-items-center d-flex unfold-item task-item"><?=  $disc['NOME']  ?> 

                  <a class="unfold-link align-items-center text-nowrap task-delete" href="./Auth/Disciplina/delete.php?ID=<?= $disc['ID'] ?>">
                    <span class="unfold-item-icon">
                      <i class="gd-close"></i>
                    </span>
                  </a> 

                </p>
              <?php endforeach ?>
            
          </div>
          <div>
            
          </div>

            </div>
          </div>
  
        </div>
      </div>
    </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  </footer>
</div>
  </body>
</html>