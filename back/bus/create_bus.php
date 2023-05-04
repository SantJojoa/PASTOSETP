<?php
    include("../config/cnx_db.php");
    $id=$_POST['id'];
    $placa=$_POST['placa'];
    $fabricante=$_POST['fabricante'];
    $modelo=$_POST['modelo'];
    $sql="insert into bus(Id,Placa,Fabricante,Modelo) 
        VALUES('$id','$placa','$fabricante','$modelo')";
    if($conn->query($sql)===TRUE){
        echo"<scrip>alert('El bus se registro correctamente')</script>";
    }else{
        echo"<script>alert('El bus no se pudo registrar de manera correcta')</script>";
    }
?>