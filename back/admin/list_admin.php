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
    <title>List Admin | PASTOSETP</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">

    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">
</head>
<body> 
    <div class="container">

    <header>Administradores</header> <br>
    <table class="table">
        <tr >
            <th>Cedula</th>
            <th>Nombre(s)</th>
            <th>Apellidos</th>
            <th></th>
        </tr>
        <?php
            $sql="SELECT * from admin";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['n_id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['last_name']."</td>
                            <td><a href='http://localhost/PASTOSETP/back/admin/card_admin.php?id=".$row['id']."'><img src='../../assets/icons/search.png'  width=30px></a> &nbsp;
                                <a href='delete_admin.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a>  
                                </td> 
                        </tr>";

                } 
                
            }
        ?>
    </table>
            <br>
            <a href="http://localhost/pastosetp/indexadmin.php">Volver</a> |
            <a href="http://localhost/pastosetp/front/create/create_admin.html">Añadir</a> | 

            <a href="http://localhost/pastosetp/back/admin/search_admin.php">Buscar</a>
            <br> 
            
            

    </div>
    
</body>
</html>