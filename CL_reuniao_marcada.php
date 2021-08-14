<?php

    include './Auth/Connect.php';

    if (!is_logged()) {
        header('location: Login.php');
        exit();
    }

    $stmt = $pdo->query('SELECT CL_DISCIPLINA_OFERTADA.ID, CL_DISCIPLINA.NOME, CL_DISCIPLINA_OFERTADA.ANO, CL_DISCIPLINA_OFERTADA.SEMESTRE 
                        FROM CL_DISCIPLINA_OFERTADA JOIN CL_DISCIPLINA ON CL_DISCIPLINA.ID = CL_DISCIPLINA_OFERTADA.DIS_ID 
                        GROUP BY CL_DISCIPLINA_OFERTADA.ID');

    $data = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="PageIndex.css" rel="stylesheet">
    <link href="CL_U.css" rel="stylesheet">
    <script src="#"></script>
    <style>

      .form-label {
        margin-bottom: .5rem;
        display: inline-block;
      }

      .col-sm-6 {
        flex: 0 0 auto;
        width: 40%;
        flex-wrap: wrap;
      }

      .input-field {
        font-family: inherit;
        font-size: 1rem;
        font-weight: 400;
        line-height: inherit;
        width: 100%;
        height: auto;
        padding: 0.55rem 1.25rem;
        border: none;
        outline: none;
        border-radius: 2rem;
        color: #121212;
        background: #e6eef9;
        text-transform: unset;
        text-rendering: optimizeLegibility;
        font-family: "DM Sans", sans-serif;
      }
      
      .input-submit1 {
        font-family: inherit;
        font-size: 1rem;
        font-weight: 500;
        line-height: inherit;
        cursor: pointer;
        min-width: 40%;
        height: auto;
        padding: 0.65rem 1.25rem;
        border: none;
        outline: none;
        border-radius: 2rem;
        color: #ffffff;
        background: #1f1c24;
        text-transform: capitalize;
        text-rendering: optimizeLegibility;
        margin-top: 52px;
        margin-left: 550px;
      }

      .col-sm-1{
          flex:0 0 auto;
          width:8.33333333%
        }
        
        .col-sm-2{
            flex:0 0 auto;
            width:16.66666667%
        }

        .col-sm-3{
            flex:0 0 auto;
            width:19.3%
        }
        
        .col-sm-4{
            flex:0 0 auto;
            width:33.33333333%
        }
        
        .col-sm-5{
            flex:0 0 auto;
            width:41.66666667%
        }

        .row1 {
            display:flex;
            flex-wrap:wrap;
            margin-top: 0.5rem;
        }

        .esp{
            margin-right: 18px;
        }

        .d{
            margin-bottom: 10px;
        }

    </style>

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


          <div class="messages-section1">

            <div class="task-tools">
                <div>
                </div>
                <div>
                  <button class="task-filter" data-param="completed" data-value="false"></button>
                </div>
              </div>

            <div class="projects-section-header">
                <p>Marcar Chamada</p>
            </div>

            <form role="form" action="" method="POST" novalidate>

            <div class="project-boxe"> 
                    <div class="message-content2">
                        <div>

                            <div class="message-header col-sm-6 d">
                                <div class="form-label"> Nome </div>
                                <input type="text" class="input-field" name="fName" placeholder="Nome" required>  
                            </div>

                            <div class="message-header col-sm-3 d row1">
                                <div class="form-label"> Data </div>
                                <input type="date" class="input-field" name="fName" placeholder="Nome" required>  
                            </div>

                            <div class="row1">
                                <div class="col-sm-3 esp">  
                                    <div class="form-label">Horário de Início</div>
                                    <input type="time" name="Date_Ini" class="input-field" required> 
                                </div>

                                <div class="col-sm-3">  
                                    <div class="form-label">Horário de Fim</div>
                                    <input type="time" name="Date_Ini" class="input-field" required>  
                                </div>

                            </div>

                            <div class="message-header col-sm-6 d row1">
                                
                                <label class="form-label">Selecionar Disciplina a Ofertar</label>
                                <select class="form-select" name="select_disciplina" required>
                                  <option selected disabled value="">Escolher...</option>

                                    <?php foreach ($data as $row ): ?>
                                    
                                      <option value=" <?= $row['ID'] ?>" > <?= $row['NOME'] ?>  -  <?= $row['ANO'] ?>  -  <?= $row['SEMESTRE'] ?> 
                                      </option>

                                    <?php endforeach ?>

                                </select>
                            </div>
        
                            <div class="position-absolute bottom-0 end-0">
                              <div>
                                <button class="task-filter1" data-param="completed" data-value="false">Confirmar</button>
                              </div>
                            </div>
                      </div>
                  </div>
            </div>

          </FORM>

          </div>

        </div>


      </div>
      </div>
      </div>
</body>
</html>