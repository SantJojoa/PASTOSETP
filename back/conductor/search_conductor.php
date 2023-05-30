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
    <title>Buscar conductor | PASTOSETP</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">

    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">
</head>
<body> 
    
    <form action="search_conductor.php" method="POST">
    <div class="container"> 
    <header>Buscar Conductor</header> <br>
        <input type="text" name="ced" placeholder="Ingrese la Cedula:" required> 
        <button>Buscar</button><br><br>
        </form>
        
        
    <table class="table">    
        <tr >
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th></th>
        </tr>
        <?php
             if(!empty($_POST)){
                $ced=$_POST['ced'];
                $sql="SELECT * from conductor WHERE n_id='$ced'";
             

            
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['n_id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['last_name']."</td>
                        
                            <td><a href='http://localhost/PASTOSETP/back/conductor/edit_conductor.php?id=".$row['id']."'><img src='../../assets/icons/search.png'  width=30px></a> &nbsp;
                                <a href='delete_conductor.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a></td>
                        </tr>";

                } 
                
            } else {
                echo "<script>alert('El conductor no existe')</script>";
            }
            }
        ?>
    </table>
            <br>
            
            <br> 
            <a href="http://localhost/pastosetp/back/conductor/list_conductor.php">Volver al Listado</a>
            
    </div>
    
</body>
</html>