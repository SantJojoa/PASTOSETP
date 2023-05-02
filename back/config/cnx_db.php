<?php
    //Developler: Soluciones SKMA
    //Database conection
    $host="localhost"; //127.0.0.1
    $port="3306";
    $username="root";
    $password="";
    $dbname="pastosetp";
    //Mysql Conecction
    $conn=new Mysqli($host,$username,$password,$dbname,$port);
    //Check Connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    exit();
} else{
    echo"Connection succesfully";
}
?>  