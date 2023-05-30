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
    <title>Buscar bus | PASTOSETP</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">

    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">
</head>
<body> 
    
    <form action="search_bus.php" method="POST">
    <div class="container"> 
        <input type="text" name="id" placeholder="Ingrese Id bus:" required> 
        <button>Buscar</button><br><br>
        </form>
        
    <table class="table">    
        <tr >
            <th>Placa</th>
            <th>Ruta</th>
            <th>Fabticante</th>
            <th>Modelo</th>
        </tr>
        <?php
             if(!empty($_POST)){
                $placa=$_POST['placa'];
                $sql="SELECT * from bus WHERE placa=$placa";
             

            
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['placa']."</td>
                            <td>".$row['ruta']."</td>
                            <td>".$row['fabricante']."</td>
                            <td>".$row['modelo']."</td>
                            <td><a href='http://localhost/PASTOSETP/back/bus/edit_bus.php?id=".$row['id']."'><img src='../../assets/icons/search.png'  width=30px></a> &nbsp;
                                <a href='delete_bus.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a></td>
                        </tr>";

                } 
                
            } else {
                echo "<script>alert('El bus no existe')</script>";
            }
            }
        ?>
    </table>
            <br>
            
            <br> 
            <a href="http://localhost/pastosetp/back/bus/list_bus.php">Volver al Listado</a>
            
    </div>
    
</body>
</html>