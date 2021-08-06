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
    <link href="/Assets/Css/bootstrap.min.css" rel="stylesheet">
    <link href="/Assets/Css/cover.css" rel="stylesheet">
    <link href="/Assets/Css/chartist.css" rel="stylesheet">
    <link href="/Assets/Css/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="/Assets/Css/gd.css" rel="stylesheet">
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
        .task-delete {
          margin-left: 10px;
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

        .task-item:hover {
          background-color: #f6fbff;
        }
        .task-list {
          max-height: 23vh;
          overflow: auto;
        }
        .task-tools {
          display: flex;
          justify-content: space-between;
          flex-wrap: wrap;
          align-items: flex-start;
        }
        .task-filter {
          border: 0;
          padding: 4px 8px;
          background: 0;
          font-size: 14px;
          line-height: 1;
          cursor: pointer;
          font-family: var(--font);
          border-radius: 20px;
          color: #fff;
          background-color: #0d6efd;
          border-color: #0d6efd
        }
        .task-item:hover > .task-delete {
          display: block;
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
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">

  <header class="mb-auto">
  </header>

    <div class="app">

        <div class="bg-white rounded-lg shadow-sm p-5 ">

          <div class="task-input">

            <div class="mb-5"></div>

            <div class="position-relative">
             <h4 class="mb-5 cc position-absolute top-10 start-0">Lista de Cursos</h4> 
            </div>

            <div class="task-tools">
              <div class="task-count">
              </div>
              <div class="task-filters">
                <a class="side-nav-menu-link media align-items-center" href="CL_curso.php">
                  <button class="task-filter btn btn-primary">Cadastrar</button>
                </a>
              </div>
            </div>

            <div class="mb-4"></div>
            
          </div>
            

          <div class="tab-content">
            <div class="row">

            <div class="tab-pane fade show active task-list">

              
                <?php foreach($cursos as $curso): ?>
                  <div class="justify-content-between cc align-items-center d-flex unfold-item task-item"><?=  $curso['DESC_CURSO']  ?> 
                  
                  <a class="unfold-link align-items-center text-nowrap task-delete" href="./Auth/Curso/delete.php?ID=<?= $curso['ID'] ?>">
                  <span class="unfold-item-icon">
                        <i class="gd-close"></i>
                    </span></a>
                  
                </div>
                <?php endforeach ?>
                  
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