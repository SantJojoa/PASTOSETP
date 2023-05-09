<?php
    include("../config/cnx_db.php");
    $id_bus=$_GET['id_b'];
    $sql="DELETE FROM bus WHERE id='$id_bus'";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('El Bus se elimino correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/bus/list_bus.php");
    
    } else{
        echo"<script>alert('El Bus no se pudo elimino de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/bus/list_bus.php");
    
    }
?>