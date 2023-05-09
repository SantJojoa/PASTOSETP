<?php include("../config/cnx_db.php"); ?>

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
    <table class="table">
        <tr >
            <th>Identificacion</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Paswoord</th>
            <th>Telefono</th>
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
                            <td>".$row['email']."</td>
                            <td>".$row['password']."</td>
                            <td>".$row['phone']."</td>
                            <td><a href='http://localhost/PASTOSETP/back/admin/edit_admin.php?id=".$row['id']."'><img src='../../assets/icons/update.png'  width=30px></a> &nbsp;
                                <a href='delete_admin.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a></td>
                        </tr>";

                } 
                
            }
        ?>
    </table>
            <br><br> <a href="http://localhost/pastosetp/front/config.html">Volver al Menu Anterior</a>

    </div>
    
</body>
</html>