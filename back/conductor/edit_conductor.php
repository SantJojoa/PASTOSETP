<?php
    include("../config/cnx_db.php");
    $id_conductor=$_GET['id'];

    $sql="SELECT * from conductor WHERE id='$id_conductor'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $id=$row['id'];
            $n_id=$row['n_id'];
            $name=$row['name'];
            $last_name=$row['last_name'];
            $age=$row['age'];

        } 
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Conductor | PASTOSETP</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">
</head>
<body>

    <div class="container"> <!-- Creamos un grupo clase container-->
        <header>Actualizar</header> 
        <form action="http://localhost/PASTOSETP/back/conductor/update_conductor.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Actualizar Conductor</span>
                    <div class="fields">

                        
                        
                            
                            <input type="hidden" name="id" placeholder="Ingrese su Cedula" value="<?php echo $id; ?>" required> 
                       

                        <div class="input-field">
                            <label>Documento de Identificacion:</label>
                            <input type="text" name="n_id" placeholder="Ingrese su Cedula" value="<?php echo $n_id; ?>" required> 
                       </div>

                        <div class="input-field">
                            <label>Nombre(s):</label>
                            <input type="text" name="name" placeholder="Ingrese su Nombre" value="<?php echo $name; ?>" required> 
                        </div>

                        <div class="input-field">
                            <label>Apellidos:</label>
                            <input type="text" name="l_name" placeholder="Ingrese sus Apellidos" value="<?php echo $last_name; ?>" required> 
                        </div>

                        <div class="input-field">
                            <label>Edad:</label>
                            <input type="number" name="age" placeholder="Ingrese su Edad" value="<?php echo $age; ?>" required> 
                        </div>

                        
                    
                    </div>

                    <button class="subbmit">
                        <span class="btn_text">Actualizar Bus</span>
                        <i class="uil uil-navigator"></i>
                    </button>

                </div>
            </div>
        </form>
        <a class="go_back" href="http://localhost/PASTOSETP/back/conductor/list_conductor.php"">Ir al la Pagina Principal</a>
    </div>
</html>