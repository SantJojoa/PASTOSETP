<?php 
    include("../config/cnx_db.php"); 
    session_start();
    if(!isset($_SESSION["id_usuario"])){
    header("Location: http://localhost/pastosetp/front/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List PQR | PASTOSETP</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">

    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">
</head>
<body> 
    <div class="container">
    <header>PQR</header> <br>
    <table class="table">
        <tr >
            <th>Id</th>
            <th>Cedula Cliente</th>
            <th>Nombre Cliente</th>
            <th>Placa Bus</th>
            <th>Asunto</th>
            <th>Detalles</th>
            <th>Contacto Cliente</th>
            
        </tr>
        <?php
            $sql="SELECT * from pqr";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['cedula']."</td>
                            <td>".$row['nombre_cliente']."</td>
                            <td>".$row['placa_bus']."</td>
                            <td>".$row['asunto']."</td>
                            <td>".$row['pqr']."</td>
                            <td>".$row['telefono_user']."</td>
                        </tr>";

                } 
                
            }
        ?>
    </table>
            
            <br> 
            <a href="http://localhost/pastosetp/indexadmin.php">Volver al Menu Anterior</a>

    </div>
    
</body>
</html>