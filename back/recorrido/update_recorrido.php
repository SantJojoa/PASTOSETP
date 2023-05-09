<?php
    include("../config/cnx_db.php");

    //NO FUNCIONA
    $id=$_POST['id']; 
    $cod=$_POST['cod'];
    $p1=$_POST['p1'];
    $p2=$_POST['p2'];
    $p3=$_POST['p3'];
    $p4=$_POST['p4'];
    $p5=$_POST['p5'];
    $p6=$_POST['p6'];

    $sql=
        "UPDATE 
            recorrido
        SET 
            
            cod='$cod',
            p1='$p1',
            p2='$p2',
            p3='$p3',
            p4='$p4',
            p5='$p5',
            p6='$p6'
        WHERE
            id='$id'";

    if($conn->query($sql)===TRUE){
        echo"<script>alert('El Recorrido se Actualizo correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/recorrido/list_recorrido.php");
    
    } else {
        echo"<script>alert('El Recorrido no se pudo Actualizar de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    
    }

?>
