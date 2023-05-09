<?php
    include("../config/cnx_db.php");
    $n_id=$_GET['id_b'];

    $sql="DELETE FROM admin WHERE id='$n_id'";
    if($conn->query($sql)===TRUE){
        
        echo"<script>alert('El administrador se elimino correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    } else{
        echo "error";
        echo"<script>alert('El administrador no se pudo elimino de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    
    }