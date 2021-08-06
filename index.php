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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Grupo CL Board">
    <link rel="stylesheet" href="./Assets/Css/chartist.css">
    <link rel="stylesheet" href="./Assets/Css/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="./Assets/Css/graindashboard.css">
    <title>Agenda</title>
</head>
<body class="has-sidebar has-fixed-sidebar-and-header">

<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">

        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">

            <!-- <a class="navbar-brand navbar-brand-desktop" href="/">
                <img class="side-nav-show-on-closed" src="logo-mini.png" alt="Graindashboard" style="width: auto; height: 33px;">
                <img class="side-nav-hide-on-closed" src="logo.png" alt="Graindashboard" style="width: auto; height: 33px;">
            </a> -->

        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">

                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
                    <i class="gd-align-left"></i>
                </a>


                <div class="dropdown ml-auto">
                    <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#notifications" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        <span class="indicator indicator-bordered indicator-top-right indicator-primary rounded-circle"></span>
                        <i class="gd-bell"></i>
                    </a>

                    <div id="notifications" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem unfold-css-animation unfold-hidden" aria-labelledby="notificationsInvoker" style="animation-duration: 300ms;">
                        <div class="card">
                            <div class="card-header d-flex align-items-center border-bottom py-3">
                                <h5 class="mb-0">Notificações</h5>
                                <a class="link small ml-auto" href="#">Apagar tudo</a>
                            </div>

                            <div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center text-nowrap mb-2">
                                            <h6 class="font-weight-semi-bold mb-0">Nova Reunião Marcada</h6>
                                            <span class="list-group-item-date text-muted ml-auto">Agora mesmo</span>
                                        </div>
                                        <p class="mb-0">
                                            O
                                        </p>
                                        <a class="list-group-item-closer text-muted" href="#"><i class="gd-close"></i></a>
                                    </div>
                                    <div class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center text-nowrap mb-2">
                                            <h6 class="font-weight-semi-bold mb-0">Nova Reunião Marcada</h6>
                                            <span class="list-group-item-date text-muted ml-auto">Agora mesmo</span>
                                        </div>
                                        <p class="mb-0">
                                            O
                                        </p>
                                        <a class="list-group-item-closer text-muted" href="#"><i class="gd-close"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown mx-3 dropdown ml-2">
                    <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                        <span class="mr-md-2 avatar-placeholder">O</span>
                        <span class="d-none d-md-block"></span>
                        <i class="gd-angle-down d-none d-md-block ml-2"></i>
                    </a>

                    <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                        <li class="unfold-item">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                    <span class="unfold-item-icon mr-3">
                      <i class="gd-user"></i>
                    </span>
                                Informações da conta
                            </a>
                        </li>
                        <li class="unfold-item">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                    <span class="unfold-item-icon mr-3">
                        <i class="gd-settings"></i>
                    </span>
                                Configurações
                            </a>
                        </li>
                        <li class="unfold-item">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="./Auth/Login/Logout.php">
                    <span class="unfold-item-icon mr-3">
                      <i class="gd-power-off"></i>
                    </span>
                                Sair
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>


<main class="main">

    <aside id="sidebar" class="js-custom-scroll side-nav bg-body">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">

            <li class="sidebar-heading h6"></li>

            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subPages">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-plus"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Novo</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>


                <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="CL_curso.php">Curso</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="ListaD.php">Disciplina</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="ListaO.php">Disciplina Ofertada</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="CL_reuniao_marcada.php">Marcar Reunião</a>
                    </li>
                </ul>

            </li>

            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="Home.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-home"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Home</span>
                </a>
            </li>

            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="index.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-calendar"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Agenda</span>
                </a>
            </li>


        </ul>
    </aside>


    <div class="content bg-body">
        <div class="py-4 px-3 px-md-4">
            <div class="row">
                <div class="col-12">

   
                    <div class="body">
                    <link rel="stylesheet" href="./Assets/Css/calendar.css">
                    <div class="calendar-container">

                        <div class="calendar-header">
                            <h1>
                            <button>◂</button>
                            Agosto
                            <button>▸</button>
                            </h1>
                            <p>2021</p>
                        </div>
                        <div class="calendar"><span class="day-name">Dom</span><span class="day-name">Seg</span><span class="day-name">Ter</span><span class="day-name">Qua</span><span class="day-name">Qui</span><span class="day-name">Sex</span><span class="day-name">Sab</span>
                            <div class="day">1</div>
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
                            <div class="day">15</div>
                            <div class="day">16</div>
                            <div class="day">17</div>
                            <div class="day">18</div>
                            <div class="day">19</div>
                            <div class="day">20</div>
                            <div class="day">21</div>
                            <div class="day">22</div>
                            <div class="day">23</div>
                            <div class="day">24</div>
                            <div class="day">25</div>
                            <div class="day">26</div>
                            <div class="day">27</div>
                            <div class="day">28</div>
                            <div class="day">29</div>
                            <div class="day">30</div>
                            <div class="day">31</div>
                            <div class="day day--disabled">1</div>
                            <div class="day day--disabled">2</div>
                            <div class="day day--disabled">3</div>
                            <div class="day day--disabled">4</div>
                            <section class="task task--primary">Reunião Marcada</section>
                        </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>


        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                    <!--<ul class="list-dot list-inline mb-0">
                        <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark" href="#">FAQ</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Support</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Contact us</a></li>
                    </ul>-->
                </div>

                <div class="col-lg text-center text-lg-right mb-1">
                    &copy; 2021 CL Board
                </div>
            </div>
        </footer>

    </div>
</main>


<script src="./Assets/Js/graindashboard.js"></script>
<script src="./Assets/Js/graindashboard.vendor.js"></script>
</body>
</html>