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
        
    <table class="table">
        <tr >
            <th>Id</th>
            <th>Cedula</th>
            <th>Cliente</th>
            <th>Bus</th>
            <th>Asunto</th>
            <th>Detalles</th>
            <th>Contacto</th>
            <th>--</th>
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
                            <td><a href='http://localhost/PASTOSETP/back/admin/edit_admin.php?id=".$row['id']."'><img src='../../assets/icons/update.png'  width=30px></a> &nbsp;
                                <a href='delete_admin.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a></td>
                        </tr>";

                } 
                
            }
        ?>
    </table>
            <br>
            <a href="http://localhost/pastosetp/front/create/create_admin.html">Añadir Administrador</a>
            <br> 
            <a href="http://localhost/pastosetp/indexadmin.html">Volver al Menu Anterior</a>

    </div>
    
</body>
</html>