<?php
    include("../config/cnx_db.php");
    $id_admin=$_GET['id'];

    $sql="DELETE FROM admin WHERE id='$id_admin'";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('El administrador se elimino correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    } else{
        echo"<script>alert('El administrador no se pudo elimino de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    
    }