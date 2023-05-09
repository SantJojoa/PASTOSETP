<?php include("../config/cnx_db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Recorrido</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
</head>
<body> 

    <div class="container">
    <table>
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
            $sql="SELECT * from recorrido";
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
                            <td><a href='edit_recorrido.php?id=".$row['id']."'><img src='../../assets/icons/update.png'  width=30px></a> &nbsp;
                                <a href='delete_recorrido.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a></td>
                        </tr>";

                } 
                
            }
        ?>
    </table>

    </div>
    
</body>
</html>