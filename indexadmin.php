<?php
session_start();
if(!isset($_SESSION["id_usuario"])){
    header("Location: http://localhost/pastosetp/front/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrador | PASTOSETP</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/templatemo.css">
    <link rel="stylesheet" href="./assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">

    <link rel="PASTOSEPT" href="./assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="./assets/img/sept - icono.png">
<!--

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="pastosetp">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    
                    <a class="navbar-sm-brand text-light text-decoration-none">Bienvenido, Administrador</a>
                    
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="http://localhost/PASTOSETP/indexadmin.html" >
                <img src="./assets/img/logo.png" alt="SEPTPASTO" width="100%">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <!--    <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PASTOSETP/index.html">Home</a>
                        </li>  -->
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PASTOSETP/back/admin/list_admin.php">Administradores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PASTOSETP/back/bus/list_bus.php">Buses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PASTOSETP/back/recorrido/list_recorrido.php">Recorridos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PASTOSETP/back/conductor/list_conductor.php">Conductores</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PASTOSETP/back/pqr/list_pqr.php">PQR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PASTOSETP/back/config/sign_out.php">Salir</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>SETP ADMIN</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, fugit perspiciatis 
                        voluptatibus delectus inventore natus commodi hic, eligendi laboriosam enim, dolores doloribus
                             optio ducimus quasi magnam? Veniam harum minima libero.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="./assets/img/Mi_proyecto_1.png" alt="SEPTPASTO" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">PASTOSETP</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">PASTOSETP@gmail.com</a>
                        </li>
                    </ul>
                </div>

               <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">Login</a></li>
                        <li><a class="text-decoration-none" href="#">Serch</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Avante SETP 
                            | Designed by Soluciones SKMA 
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="./assets/js/jquery-1.11.0.min.js"></script>
    <script src="./assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/templatemo.js"></script>
    <script src="./assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>