<?php
    include("../config/cnx_db.php");
    $ced=$_POST['ced'];
    $name=$_POST['name'];
    $placa=$_POST['placa'];
    $issue=$_POST['issue'];
    $pqr=$_POST['pqr'];
    $phone=$_POST['phone'];
    $sql="insert into pqr(cedula,nombre_cliente,placa_bus,asunto,pqr,telefono_user) 
        VALUES('$ced','$name','$placa','$issue','$pqr','$phone')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Señor. $nombre_cliente S. su PQR fue registrada')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/");
    }else{
        echo"<script>alert('La PQR no se registro de manera correcta')</script>";
    }
?>