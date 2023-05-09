<?php include("../config/cnx_db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Conductor</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body> 
    <table align="center"  border="3">
        <tr >
            <th>id</th>
            <th>Name</th>
            <th>Last name</th>
            <th>age</th>
            <th>..</th>
        </tr>
        <?php
            $sql="SELECT * from conductor";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['n_id']."</td>
                            <td>".$row['names']."</td>
                            <td>".$row['last_name']."</td>
                            <td>".$row['age']."</td>
                            <td><a href='edit_conductor.php?id=".$row['id']."'><img src='../../assets/icons/update.png'  width=30px></a> &nbsp;
                                <a href='delete_conductor.php?id_b=".$row['id']."'><img src='../../assets/icons/delete.png' width=30px></a></td>
                        </tr>";

                } 
                
            }
        ?>
    </table>
</body>
</html>