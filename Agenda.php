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
    <link href="./Assets/Css/PageIndex.css" rel="stylesheet">
    <script src="#"></script>
    <title>Agenda</title>
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

            <a href="Home.php" class="app-sidebar-link">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
          <polyline points="9 22 9 12 15 12 15 22" /></svg>
      </a>
      <a href="Agenda.php" class="app-sidebar-link active">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
          <line x1="16" y1="2" x2="16" y2="6" />
          <line x1="8" y1="2" x2="8" y2="6" />
          <line x1="3" y1="10" x2="21" y2="10" /></svg>
      </a>
      <a href="Listar_Curso.php" class="app-sidebar-link">
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
      <a href="./Auth/Login/Logout.php" class="btn-logout">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"></path>
        </svg>
      </a>

          </div>


        <div class="projects-section">
          <div class="linha">
            <h1 class="pp">Outubro</h1>
            <h2 class="pp">2021</h2>
          </div>

            <div class="calendar">
              <div class="days">Monday</div>
              <div class="days">Tuesday</div>
              <div class="days">Wednesday</div>
              <div class="days">Thursday</div>
              <div class="days">Friday</div>
              <div class="days">Saturday</div>
              <div class="days">Sunday</div>
              <div class="day not-work">31</div>
              <div class="day project-market">1
              <div class="hover-title">POO</div>
              <div class="project-detail">Aula 3</div>
              <div class="popup-check">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                </svg>
              </div>
              </div>
              <div class="day">2</div>
              <div class="day">3</div>
              <div class="day">4</div>
              <div class="day">5</div>
              <div class="day">6</div>
              <div class="day">7</div>
              <div class="day">8</div>
              <div class="day">9</div>
              <div class="day">10</div>
              <div class="day">11</div>
              <div class="day">12</div>
              <div class="day">13</div>
              <div class="day">14</div>
              <div class="day project-market">15
              <div class="hover-title">WEB 1</div>
              <div class="project-detail">Introdução a PHP</div>
              <div class="popup-check">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                </svg>
              </div>
              </div>
              <div class="day">16</div>
              <div class="day project-market">17
              <div class="hover-title">PEP 1</div>
              <div class="project-detail">Aula síncrona número 5</div>
              <div class="popup-check">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                </svg>
              </div>
              </div>
              <div class="day">18</div>
              <div class="day">19</div>
              <div class="day">20</div>
              <div class="day">21</div>
              <div class="day">22</div>
              <div class="day project-finance">23
                <div class="hover-title">BD</div>
              <div class="project-detail finance">Aula síncrona</div>
              <div class="popup-check">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                </svg>
              </div>
              </div>
              <div class="day">24</div>
              <div class="day">25</div>
              <div class="day">26</div>
              <div class="day">27</div>
              <div class="day">28</div>
              <div class="day">29</div>
              <div class="day">30</div>
              <div class="day not-work">1</div>
              <div class="day not-work">2</div>
              <div class="day not-work">3</div>
              <div class="day not-work">4</div>
            </div>

        </div>

      </div>
      </div>
      </div>
</body>
</html>