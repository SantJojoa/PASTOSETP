<?php
    include("../config/cnx_db.php");
    $id_recorrido=$_GET['id_b'];

    $sql="DELETE FROM recorrido WHERE id='$id_recorrido'";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('El Recorrido se elimino correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/recorrido/list_recorrido.php");
    
    } else{
        echo"<script>alert('El recorrido no se pudo eliminar de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    
    }