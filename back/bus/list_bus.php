<?php include("../config/cnx_db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body> 
    <table align="center"  border="3">
        <tr >
            <th>Placa</th>
            <th>Ruta</th>
            <th>Fabricante</th>
            <th>Modelo</th>
            <th>..</th>
        </tr>
        <?php
            $sql="SELECT * from bus";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['placa']."</td>
                            <td>".$row['ruta']."</td>
                            <td>".$row['fabricante']."</td>
                            <td>".$row['modelo']."</td>
                            <td><a href='edit_bus.php?id=".$row['id']."'><img src='../../front/icons/update.png.png'  width=30px></a> &nbsp;
                                <a href='delete_bus.php?id_b=".$row['id']."'><img src='../../front/icons/delate.png.png' width=30px></a></td>
                        </tr>";

                } 
                
            }
        ?>
    </table>
</body>
</html>