
<?php
    include("../config/cnx_db.php");
    $id_recorrido=$_GET['id'];

    $sql="SELECT * from recorrido WHERE id='$id_recorrido'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $id=$row['id'];
            $cod=$row['cod'];
            $p1=$row['p1'];
            $p2=$row['p2'];
            $p3=$row['p3'];
            $p4=$row['p4'];
            $p5=$row['p5'];
            $p6=$row['p6'];
        } 
        
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar recorrido | PASTOSETP</title> 
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
            <form action="http://localhost/PASTOSETP/back/recorrido/update_recorrido.php" method="post">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Informacion Recorrido</span>
                        <div class="fields">
    
                                <input type="hidden" name="id" value="<?php echo $id; ?>" required> 
                            
                            <div class="input-field">
                                <label>Codigo de Recorrido:</label>
                                <input type="text" name="cod" placeholder="Ingrese el Codigo del Recorrido" value="<?php echo $cod; ?>" required> 
                            </div>
    
                            <div class="input-field">
                                <label>Paradero 1:</label>
                                <input type="text" name="p1" placeholder="Ingrese el Primer Paradero" value="<?php echo $p1; ?>" required> 
                            </div>
    
                            <div class="input-field">
                                <label>Paradero 2:</label>
                                <input type="text" name="p2" placeholder="Ingrese el Segundo Paradero" value="<?php echo $p2; ?>" required> 
                            </div>
    
                            <div class="input-field">
                                <label>Paradero 3:</label>
                                <input type="text" name="p3" placeholder="Ingrese el Tercer Paradero" value="<?php echo $p3; ?>" required> 
                            </div>
    
                            <div class="input-field">
                                <label>Paradero 4:</label>
                                <input type="text" name="p4" placeholder="Ingrese el Cuarto Paradero" value="<?php echo $p4; ?>" required> 
                            </div>
    
                            <div class="input-field">
                                <label>Paradero 5:</label>
                                <input type="text" name="p5" placeholder="Ingrese el Quinto Paradero" value="<?php echo $p5; ?>" required> 
                            </div>
    
                            <div class="input-field">
                                <label>Paradero 6:</label>
                                <input type="text" name="p6" placeholder="Ingrese el Sexto Paradero" value="<?php echo $p6; ?>" required> 
                            </div>
    
                            
                        
                        </div>
    
                        <button class="subbmit" href="http://localhost/PASTOSETP/back/admin/edit_admin.php">
                        <span class="btn_text">Guardar Cambios</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    </div>
                </div>
            </form>
            <button class="subbmit" onclick="toggleInput()">
                        <span class="btn_text">Actualizar recorrido</span>
                        <i class="uil uil-navigator"></i>
                    </button>

        
            <a class="go_back" href="http://localhost/PASTOSETP/back/recorrido/list_recorrido.php">Ir al la Pagina Principal</a>
        </div>   
    </body>
    </html>