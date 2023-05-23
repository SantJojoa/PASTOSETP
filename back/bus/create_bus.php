<?php
    include("../config/cnx_db.php");
    $id=$_POST['id'];
    $placa=$_POST['placa'];
    $rutas=$_POST['rutas'];
    $fabricante=$_POST['fabricante'];
    $modelo=$_POST['modelo'];
    $sql="insert into bus(id,placa,ruta,fabricante,modelo) 
        VALUES('$id','$placa','$rutas','$fabricante','$modelo')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('El bus se registro correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/front/create/create_bus.html");
    }else{
        echo"<script>alert('El bus no se pudo registrar de manera correcta')</script>";
    }
?>