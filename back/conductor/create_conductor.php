<?php
    include("../config/cnx_db.php");
    $id=$_POST['n_id'];
    $name=$_POST['name'];
    $l_name=$_POST['l_name'];
    $age=$_POST['age'];
    $sql="insert into conductor(n_id,name,last_name,age) 
        VALUES('$id','$name','$l_name','$age')";
    if($conn->query($sql)===TRUE){
     echo"<script>alert('El conductor se registro correctamente')</script>";
     header("refresh:0;url=http://localhost/PASTOSETP/front/create/create_conductor.html");
    }else{
     echo"<script>alert('El bus no se pudo registrar de manera correcta')</script>";
    }
?>