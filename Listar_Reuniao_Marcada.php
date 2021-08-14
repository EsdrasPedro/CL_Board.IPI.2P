<?php
    include 'Connect.php';

    if (!is_logged()) {
      header('location: Login.php');
      exit();
    }
    
    $stmt = $pdo->query('SELECT ID, NOME, DATE(DATA_H_INICIO) AS DATE, TIME(DATA_H_INICIO) AS TIME1, TIME(DATA_H_FIM) AS TIME FROM CL_REUNIÃO_MARCADA');
    $discsO = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="PageIndex.css" rel="stylesheet">
    <script src="#"></script>
    <title>Novo</title>
</head>
<body>
    <div class="app-container">
        <div class="app-header">

          <div class="app-header-left">
            <span class="app-icon"></span>
            <p class="app-name">CL Board</p>

            <div class="search-wrapper">
              <input class="search-input" type="text" placeholder="Buscar">
              <svg width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="M21 21l-4.35-4.35"></path>
              </svg>
            </div>

          </div>

          <div class="app-header-right">

            <button class="notification-btn">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
            </button>

            <button class="profile-btn">
                <img src="https://assets.codepen.io/3306515/IMG_2025.jpg">
                <span> <?= user() ?> </span>
            </button>

          </div>
        </div>
        <div class="app-content">

          <div class="app-sidebar">

            <a href="" class="app-sidebar-link">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
          <polyline points="9 22 9 12 15 12 15 22" /></svg>
      </a>
      <a href="" class="app-sidebar-link">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
          <line x1="16" y1="2" x2="16" y2="6" />
          <line x1="8" y1="2" x2="8" y2="6" />
          <line x1="3" y1="10" x2="21" y2="10" /></svg>
      </a>
      <a href="" class="app-sidebar-link active">
        <svg class="btn-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" /></svg>
      </a>
      <a href="" class="app-sidebar-link">
        <svg class="link-icon" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-settings" viewBox="0 0 24 24">
          <defs/>
          <circle cx="12" cy="12" r="3" />
          <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
        </svg>
      </a>
      <a href="" class="btn-logout">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"></path>
        </svg>
      </a>

          </div>


        <div class="projects-section">

            
          <div class="row">
            <div class="col-12">
                <div class="card mb-3 mb-md-4">
                    <div class="card-header p-0">
                        <ul id="wallets" class="nav nav-v2 nav-justified d-block d-xl-flex w-100" role="tablist">
                            <li class="nav-item border-xl-bottom-0 det">
                                <a class="nav-link align-items-center py-2 px-3" href="#bitcoin" role="tab" aria-selected="true"
                                   data-toggle="tab">
                                    <span class="name1">Curso</span>
                                </a>
                            </li>
                            <li class="nav-item border-xl-bottom-0 border-xl-left det">
                                <a class="nav-link align-items-center py-2 px-3" href="#bitcoinCash" role="tab" aria-selected="false"
                                   data-toggle="tab">
                                    <span class="name1">Disciplina</span>
                                </a>
                            </li>
                            <li class="nav-item border-xl-bottom-0 border-xl-left det">
                                <a class="nav-link align-items-center py-2 px-3" href="#etherium" role="tab" aria-selected="false"
                                   data-toggle="tab">
                                    <span class="name1">Disciplina Ofertada</span>
                                </a>
                            </li>
                            <li class="nav-item border-xl-bottom-0">
                                <a class="nav-link align-items-center py-2 px-3" href="#litecoin" role="tab" aria-selected="false"
                                   data-toggle="tab">
                                    <span class="name">Reunião Marcadas</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>

          <div class="messages-section1">

            <div class="projects-section-header">
                <p>Cadastro de Reuniões Marcadas</p>
            </div>

            <div class="task-tools">
              <div>
              </div>
              <div>
                <button class="task-filter" data-param="completed" data-value="false">Marcar</button>
              </div>
            </div>

            <div class="search-wrapper1">
              <input class="search-input1" type="text" placeholder="Buscar">
            </div>

            <div class="project-boxe">

            <?php foreach($discsO as $discO): ?>

              <div class="message-box">
                <div class="message-content">
                  <div class="message-header">
                    <div> <?=  $discO['NOME']  ?> | <?=  $discO['DATE']  ?> | <?=  $discO['TIME1']  ?>  à  <?=  $discO['TIME']  ?></div>
                    <div class="star-checkbox">
                      <label class="star-1">
                        <a class="btn-logout" href="./Auth/Reunião/delete.php?ID=<?= $discO['ID'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                          <path d="M18 6L6 18M6 6l12 12"></path></svg>
                        </a>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <?php endforeach ?>

            </div>

          </div>

        </div>


      </div>
      </div>
      </div>
</body>
</html>