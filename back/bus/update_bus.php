<?php
    include("../config/cnx_db.php");
    
    $id=$_POST['id'];
    $placa=$_POST['placa'];
    $rutas=$_POST['rutas'];
    $fabricante=$_POST['fabricante'];
    $modelo=$_POST['modelo'];

    $sql=
        "UPDATE 
            bus 
        SET 
            id='$id',
            placa='$placa',
            ruta='$rutas',
            fabricante='$fabricante',
            modelo='$modelo'
        WHERE
            id='$id'";

    if($conn->query($sql)===TRUE){
        echo"<script>alert('El Bus se Actualizo correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/bus/list_bus.php");
    
    } else {
        echo"<script>alert('El Bus no se pudo Actualizar de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/bus/list_bus.php");
    
    }

?>
