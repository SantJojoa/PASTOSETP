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
    <title>List Conductor</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">
</head>
<body> 
    <div class="container">
        <table>
            <tr >
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido </th>
                <th>Edad</th>
                <th>..</th>
            </tr>
    <?php
        $sql="SELECT * from conductor";
        $result=$conn->query($sql);
        if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                            echo"<tr>
                            <td>".$row['n_id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['last_name']."</td>
                            <td>".$row['age']."</td>
                            <td><a href='card_conductor.php?id=".$row['id']."'><img src='../../assets/icons/search.png'  width=30px></a> &nbsp;
                                <a href='delete_conductor.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a></td>
                        </tr>";
                }                 
            }
    ?>
        </table>
        <a href="http://localhost/pastosetp/indexadmin.php">Volver</a> |
            <a href="http://localhost/pastosetp/front/create/create_conductor.html">Añadir</a> | 
            <a href="http://localhost/pastosetp/back/conductor/search_conductor.php">Buscar</a>
    </div>
    
</body>
</html>