 
<?php 
  
include("con_db.php");

if (isset($_POST['register'])){

  if ((strlen($_POST['name'])>=1) && (strlen($_POST['email'])>=1)&& (strlen($_POST['password'])>=1)){

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']); 
        $fecha_reg = date('y/m/d');
        $registrard = "INSERT INTO datos(nombre,email, fecha_reg,password) VALUES ('$name','$email','$fecha_reg','$password')";

        $resultado = mysqli_query($conex, $registrard);

      if ($resultado) {
            ?>
            <div><h3 class="ok">¡Te has registrado Correctamente! </h3></div>
            <?php

      } else {
          
          ?>
          <div><h3 class="bad">NO Te has registrado Correctamente</h3></div>
          <?php

        };
} else {    
          ?>
          <div><h3 class="bad">Por favor completa los campos Correctamente </h3></div>
          <?php
  };

};

?>