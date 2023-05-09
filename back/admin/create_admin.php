<?php
    include("../config/cnx_db.php");
    $n_id=$_POST['n_id'];
    $name=$_POST['name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $phone=$_POST['phone'];
    $sql="insert into admin (n_id,name,last_name,email,password,phone) 
        VALUES('$n_id','$name','$last_name','$email','$password','$phone')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('El administrador se registro correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/front/create/create_admin.html");
    }else{
        echo"<script>alert('El administrador no se pudo registrar de manera correcta')</script>";
    }
?>