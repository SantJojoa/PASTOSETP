<?php
    include("../config/cnx_db.php");
    $id_conductor=$_GET['id_b'];

    $sql="DELETE FROM conductor WHERE id='$id_conductor'";
    if($conn->query($sql)===TRUE){
    
        echo"<script>alert('El Conductor se elimino correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/conductor/list_conductor.php");
    
    } else{
        echo $conn->error;
        echo"<script>alert('El Conductor no se pudo elimino de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    
    }
?>