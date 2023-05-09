<?php
    include("../config/cnx_db.php");
  //  include("list_admin.php");
    $n_id=$_POST['n_id'];
    $name=$_POST['name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $phone=$_POST['phone'];

    $sql=
        "UPDATE 
            admin
        SET 
            n_id='$n_id',
            name='$name',
            last_name='$last_name',
            email='$email',
            password='$password',
            phone='$phone'
        WHERE
            n_id='$n_id'";

    if($conn->query($sql)===TRUE){
        echo"<script>alert('El administrador se Actualizo correctamente')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    } else {
        echo"<script>alert('El administrador no se pudo Actualizar de manera correcta')</script>";
        header("refresh:0;url=http://localhost/PASTOSETP/back/admin/list_admin.php");
    }

?>
