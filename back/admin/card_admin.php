<?php
    include("../config/cnx_db.php");
    $id_admin=$_GET['id'];

    $sql="SELECT * from admin WHERE id='$id_admin'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $n_id=$row['n_id'];
            $name=$row['name'];
            $last_name=$row['last_name'];
            $email=$row['email'];
            $pass=$row['password'];
            $phone=$row['phone'];
        } 
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar Admin | PASTOSETP</title> 
    <link rel="stylesheet" href="../../assets/css/style1.css">
    <link rel="PASTOSEPT" href="../../assets/img/sept - icono.png">
    <link rel="PASTOSEPT icon" type="image/x-icon" href="../../assets/img/sept - icono.png">

    <script>
    function toggleInput() {
      var input = document.getElementById("input");
      var input2 = document.getElementById("input2");
      var input3 = document.getElementById("input3");
      var input4 = document.getElementById("input4");
      var input5 = document.getElementById("input5");
      var input6 = document.getElementById("input6");

      input.disabled = !input.disabled;
      input2.disabled = !input2.disabled;
      input3.disabled = !input3.disabled;
      input4.disabled = !input4.disabled;
      input5.disabled = !input5.disabled;
      input6.disabled = !input6.disabled;

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
        <form action="http://localhost/PASTOSETP/back/admin/update_admin.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Informacion Administrador</span>
                    <div class="fields">

                        <div class="input-field">
                            <label>Numero de Identificacion:</label>
                            <input id="input" type="text" name="n_id" placeholder="Ingrese su Cedula" value="<?php echo $n_id; ?>" required disabled> 
                        </div>

                        <div class="input-field">
                            <label>Nombre(s):</label>
                            <input id="input2" type="text" name="name" placeholder="Ingrese su Nombre" value="<?php echo $name; ?>" required disabled> 
                        </div>

                        <div class="input-field">
                            <label>Apellidos:</label>
                            <input id="input3" type="text" name="last_name" placeholder="Ingrese sus Apellidos" value="<?php echo $last_name; ?>" required disabled> 
                        </div>

                        <div class="input-field">
                            <label>Correo Electronico:</label>
                            <input id="input4" type="email" name="email" placeholder="Ingrese su Email" value="<?php echo $email; ?>" required disabled> 
                        </div>

                        <div class="input-field">
                            <label>Contraseña:</label>
                            <input id="input5" type="password" name="pass" placeholder="********" value="<?php echo $pass; ?>" required  disabled> 
                        </div>

                        <div class="input-field">
                            <label>Numero de Telefono::</label>
                            <input id="input6" type="text" name="phone" placeholder="Ingresa su Telefono" value="<?php echo $phone; ?>"  required disabled> 
                        </div>
                        

                    <button class="subbmit" href="http://localhost/PASTOSETP/back/admin/edit_admin.php">
                        <span class="btn_text">Guardar Cambios</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    </form>

                    </div>

                </div>
            </div>
            <button class="subbmit" onclick="toggleInput()">
                        <span class="btn_text">Editar Administrador</span> 
                        <i class="uil uil-navigator"></i>
                    </button>
                | |
        
        <a class="go_back" href="http://localhost/PASTOSETP/back/admin/list_admin.php">Ir al la Pagina Principal</a>
    </div>
</body>
</html>