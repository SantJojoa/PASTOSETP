<?php
  include("../back/config/cnx_db.php"); 
  session_start(); //Crear Sesion

  if(isset($_SESSION["id_usuario"])){
      header("Location: http://localhost/pastosetp/indexadmin.php");
  }

  if(!empty($_POST)){
    $rows = 0;

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $error = '';

    $sql = "SELECT * from admin WHERE email = '$email' and password = '$pass'";

    $result = $conn->query($sql);
    $rows = $result->num_rows;

    if($rows > 0){
      $row=$result->fetch_assoc();
      $_SESSION['id_usuario']=$row['id'];
      header("Location: http://localhost/pastosetp/indexadmin.php");
    } else{

    }
  }
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="PASTOSEPT" href="../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../assets/img/sept - icono.png">
    <title>Login | PASTOSEPT</title>
    <meta charset="UTF-8">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    
    <div class="screen-1">
        <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="300" height="300" viewbox="0 0 640 480" xml:space="preserve">
          <g transform="matrix(3.31 0 0 3.31 320.4 240.4)">
            <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ff7b00; fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
          </g>
          <g transform="matrix(0.98 0 0 0.98 268.7 213.7)">
            <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255);; fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
          </g>
          <g transform="matrix(1.01 0 0 1.01 362.9 210.9)">
            <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255);; fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
          </g>
          <g transform="matrix(0.92 0 0 0.92 318.5 286.5)">
            <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255);; fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
          </g>
          <g transform="matrix(0.16 -0.12 0.49 0.66 290.57 243.57)">
            <polygon style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255);; fill-rule: nonzero; opacity: 1;" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
          </g>
          <g transform="matrix(0.16 0.1 -0.44 0.69 342.03 248.34)">
            <polygon style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:rgb(255, 255, 255); ; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
          </g>
        </svg>
        <p>Bienvenido Administrador</p>
        <form name="" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="email">
          <label for="email">Email</label>
          <div class="sec-2">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="email" placeholder="example@admin.com"/>
          </div>
        </div>
        <div class="password">
          <label for="password">Contraseña</label>
          <div class="sec-2">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input class="pas" type="password" name="pass" placeholder="············"/>
            <ion-icon class="show-hide" name="eye-outline"></ion-icon>
          </div>
        </div>
          <br>
          <center><button class="login" >Ingresar</button></center>
          <div class="footer"><s>
        </form>
        <center><a href="http://localhost/pastosetp/index.html">Volver</a></center>

</body>
</html>
