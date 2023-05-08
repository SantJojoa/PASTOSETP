<?php
    include("../config/cnx_db.php");
    $id_bus=$_GET['id'];

    $sql="DELETE FROM bus WHERE id='$id_bus'";
    if($conn->query($sql)===TRUE){
        echo "Deleted";
    } else{
        echo "error";
    }