<?php
    include("../config/cnx_db.php");
    $n_id=$_POST['n_id'];
    $name=$_POST['name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $phone=$_POST['phone'];
    $sql="insert into admin (N_Identificacion,Nombre,Apellidos,Email,Contrasena,Telefono) 
        VALUES('$n_id','$name','$last_name','$email','$password','$phone')";
    if($conn->query($sql)===TRUE){
        echo"<scrip>alert('El administrador se registro correctamente')</script>";
    }else{
        echo"<script>alert('El administrador no se pudo registrar de manera correcta')</script>";
    }
?>