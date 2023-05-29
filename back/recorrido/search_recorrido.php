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
        <input type="text" name="id" placeholder="Ingrese la id:" required> 
        <button>Buscar</button><br><br>
        </form>
        
        
    <table class="table">    
        <tr >
            <th>Id</th>
            <th>cod</th>
            <th>P1</th>
            <th>P2</th>
            <th>P3</th>
            <th>P4</th>
            <th>P5</th>
            <th>P6</th>
        </tr>
        <?php
            if(!empty($_POST)){
            $id_recorrido=$_POST['id'];

            $sql="SELECT * from recorrido WHERE id=$id_recorrido";
         

            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['cod']."</td>
                            <td>".$row['p1']."</td>
                            <td>".$row['p2']."</td>
                            <td>".$row['p3']."</td>
                            <td>".$row['p4']."</td>
                            <td>".$row['p5']."</td>
                            <td>".$row['p6']."</td>
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