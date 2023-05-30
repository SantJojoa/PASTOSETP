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
    <title>Editar Bus | PASTOSETP</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">

    <script>
    function toggleInput() {
      var input = document.getElementById("input");
      input.disabled = !input.disabled;
    }
  </script>

    <script>
        $( ".lock" ).click(function() {
        $(this).toggleClass('unlocked')
         });
     </script>

</head>
<body>

    <div class="container"> <!-- Creamos un grupo clase container-->
        <header>Visualizar</header> 
        <form action="http://localhost/PASTOSETP/back/bus/update_bus.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Informacion Bus</span>
                    <div class="fields">

                        <div class="input-field">
                            <label>ID Bus:</label>
                            <input type="text" name="id" placeholder="Ingrese el ID del Bus" value="<?php echo $id_bus; ?> " id="input" required> 
                        </div>

                        <div class="input-field">
                            <label>Placa:</label>
                            <input type="text" name="placa" placeholder="Ingrese la Placa del Bus" value="<?php echo $placa_bus; ?>"  id="input" required> 
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
                    <button class="subbmit" href="http://localhost/PASTOSETP/back/admin/edit_bus.php">
                        <span class="btn_text">Guardar Cambios</span>
                        <i class="uil uil-navigator"></i>
                        </button>


                </div>
            </div>
        </form>
        <button class="subbmit" onclick="toggleInput()">
                        <span class="btn_text">Editar Bus</span>
                        <i class="uil uil-navigator"></i>
                    </button>


        <a class="go_back" href="http://localhost/PASTOSETP/back/bus/list_bus.php">Ir al la Pagina Principal</a>
    </div>

</body>
</html>