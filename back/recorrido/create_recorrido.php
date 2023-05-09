<?php
    include("../config/cnx_db.php");
    $cod=$_POST['cod'];
    $p1=$_POST['p1'];
    $p2=$_POST['p2'];
    $p3=$_POST['p3'];
    $p4=$_POST['p4'];
    $p5=$_POST['p5'];
    $p6=$_POST['p6'];
    $sql="insert into recorrido(cod,p1,p2,p3,p4,p5,p6) 
        VALUES('$cod','$p1','$p2','$p3','$p4','$p5','$p6')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('El recorrido se registro correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/front/create/create_recorrido.html");
    }else{
        echo"<script>alert('El bus no se pudo registrar de manera correcta')</script>";
    }
?>