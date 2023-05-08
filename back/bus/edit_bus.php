<?php
    include("../config/cnx_db.php");
    $id_bus=$_GET['id'];

    $sql="SELECT * from bus WHERE id='$id_bus'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $id_bus=$row['id'];
            $placa_bus=$row['placa'];
            $ruta_bus=$row['ruta'];
            $fab_bus=$row['fabricante'];
            $mod_bus=$row['modelo'];
            // echo $placa_bus;
        } 
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Bus | PASTOSETP</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">
</head>
<body>

    <div class="container"> <!-- Creamos un grupo clase container-->
        <header>Actualizar</header> 
        <form action="http://localhost/PASTOSETP/back/bus/update_bus.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Actualizar Bus</span>
                    <div class="fields">

                        <div class="input-field">
                            <label>ID Bus:</label>
                            <input type="text" name="id" placeholder="Ingrese el ID del Bus" value="<?php echo $id_bus; ?> " required> 
                        </div>

                        <div class="input-field">
                            <label>Placa:</label>
                            <input type="text" name="placa" placeholder="Ingrese la Placa del Bus" value="<?php echo $placa_bus; ?>" required> 
                        </div>

                        <div class="input-field">
                            <label>Rutas:</label>
                            <input type="text" name="rutas" placeholder="C2,E4,C12" value="<?php echo $ruta_bus; ?>" required> 
                        </div>

                        <div class="input-field">
                            <label>Fabricante:</label>
                            <input type="text" name="fabricante" placeholder="Ingrese el Fabricante del Bus" value="<?php echo $fab_bus; ?>" required> 
                        </div>

                        <div class="input-field">
                            <label>Modelo:</label>
                            <input type="text" name="modelo" placeholder="Ingrese el Modelo del Bus" value="<?php echo $mod_bus; ?>" required> 
                        </div>

                    
                    </div>

                    <button class="subbmit">
                        <span class="btn_text">Actualizar Bus</span>
                        <i class="uil uil-navigator"></i>
                    </button>

                </div>
            </div>
        </form>
        <a class="go_back" href="http://localhost/PASTOSETP/front/back/edit_bus.php">Ir al la Pagina Principal</a>
    </div>
<!--
<center><h1>Registrar Bus</h1></center> <br>
    <form name="NewBusForm" action="http://localhost/PASTOSETP/back/bus/create_bus.php" method="post">
    <center>
        <label for="">Id</label> <br> <input type="text" name="id" placeholder="0000" required> <br>
        <label for="">Placa</label> <br> <input type="text" name="placa" id="" placeholder="AUW328"> <br>
        <label for="">Ruta(s)</label><br><input type="text" name="rutas" placeholder="C2,E4,C12"><br>
        <label for="">Fabricante</label> <br> <input type="text" name="fabricante" id="" placeholder="Chevrolet"> <br>
        <label for="">Modelo</label><br><input type="text" name="modelo" id="" placeholder="2023"> <br><br>
        <button>Registrar Bus</button>
    </center>
    </form>
-->

    
</body>
</html>