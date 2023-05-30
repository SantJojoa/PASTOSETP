<!DOCTYPE html>
<html lang="en">

<head>
    <title>Busqueda | PASTOSEPT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="PASTOSEPT" href="../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../assets/img/sept - icono.png">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/templatemo.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/style2.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">SETPASTO@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="../index.html" >
                <img src="../assets/img/logo.png" alt="SEPTPASTO" width="100%">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../front/create/create_pqr.html">PQR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../front/login.php">Administrador</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->
        <!-- Start Map 
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>PASTOSEPT</b> buscara tu mejor ruta para llegar a tu destino<br />.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
     Ena Map -->
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Ingresa tu destino">
                    <button type="submit" class="input-group-text bg-success text-light">
                            <a class="nav-icon d-none d-lg-inline text-white" href="front/serch_user.html">
                                Buscar
                            </a>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>BUSQUEDA DE RUTAS</h1> 
                    <h1>--------------------</h1>
                    <table>
        <tr >
            <th>Codigo Ruta</th>
            <th>Paradero 1</th>
            <th>Paradero 2</th>
            <th>Paradero 3</th>
            <th>Paradero 4</th>
            <th>Paradero 5</th>
            <th>Paradero 6</th>



        </tr>
        <?php
            include("../back/config/cnx_db.php"); 
            $search=$_POST['search'];
            $sql = "SELECT 
                        * 
                    FROM 
                        recorrido 
                    WHERE 
                        p1 LIKE '$search' or 
                        p2 LIKE '$search' or 
                        p3 LIKE '$search' or 
                        p4 LIKE '$search' or 
                        p5 LIKE '$search' or 
                        p6 LIKE '$search' 
            ";

            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            
                            <td>".$row['cod']."</td>
                            <td>".$row['p1']."</td>
                            <td>".$row['p2']."</td>
                            <td>".$row['p3']."</td>
                            <td>".$row['p4']."</td>
                            <td>".$row['p4']."</td>
                            <td>".$row['p6']."</td>
                        </tr>";

                } 
                
            }
        ?>
    </table>
        

                </div>
                <div class="col-md-4">
                    <img src="../assets/img/Mi_proyecto_1.png" alt="SEPTPASTO" width="120%">
                </div>
            </div>
        </div>
    </section>


    <!-- Start Contact 
    <section class="bg-success py-5">
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname"></label>UBICACION</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Ubicacion">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">DESTINO</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Destino">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>-->
    </section>
    
    <!-- End Contact -->


    <!-- Start Footer -->
    <footer class=".bg-dark" id="tempaltemo_footer">
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
                        <li><a class="text-decoration-none" href="#">PQR</a></li>
                        <li><a class="text-decoration-none" href="#">Administrador</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Company Name 
                            | Designed by <a rel="sponsored" href="file:///C:/xampp/htdocs/PASTOSEPT/index.html" target="_blank">SEPTPASTO</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>