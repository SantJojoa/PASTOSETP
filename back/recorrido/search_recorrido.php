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
    <title>Buscar recorrido | PASTOSETP</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">

    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">
</head>
<body> 
    
    <form action="search_recorrido.php" method="POST">
    <div class="container"> 
        <input type="text" name="cod" placeholder="Ingrese el Codigo:" required> 
        <button>Buscar</button><br><br>
        </form>
        
        
    <table class="table">    
        <tr >
            <th>Codigo</th>
            <th></th>
        </tr>
        <?php
            if(!empty($_POST)){
            $cod=$_POST['cod'];

            $sql="SELECT * from recorrido WHERE cod='$cod'";
         

            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['cod']."</td>
    
                            <td><a href='edit_recorrido.php?id=".$row['id']."'><img src='../../assets/icons/search.png'  width=30px></a> &nbsp;
                                <a href='delete_recorrido.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a></td>
                        </tr>";

                } 
            }else {
                echo "<script>alert('El recorrido no existe')</script>";
            }
            }
        ?>
    </table>
    <br> 
            <a href="http://localhost/pastosetp/back/recorrido/list_recorrido.php">Volver al Listado</a>
            
    </div>
    
</body>
</html>