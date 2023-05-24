<?php
    session_start();
    session_destroy();
    header('Location:http://localhost/pastosetp/front/login.php');
?>