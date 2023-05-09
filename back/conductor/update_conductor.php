<?php  //ERROR
    include("../config/cnx_db.php");
    
    $id=$_POST['id'];
    $n_id=$_POST['n_id'];  //Cedula
    $name=$_POST['name'];
    $last_name=$_POST['l_name'];
    $age=$_POST['age'];

    $sql=
        "UPDATE 
            conductor
        SET 
            id='$id',
            name='$name',
            last_name='$last_name',
            age='$age'
        WHERE
            id='$id'";

    if($conn->query($sql) === TRUE){
        echo "<script>alert('El conductor se Actualizo correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/conductor/list_conductor.php");
    
    } else { 
        echo "<script>alert('El conductor no se pudo Actualizar de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/conductor/list_conductor.php");
    }
?>