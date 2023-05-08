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
        echo "Bus Actualizado";
    } else {
        echo "error";
    }

?>
