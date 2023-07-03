<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registros de usuarios</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div>
    <form  method="post">
       <i><h1>¡Suscribete!</h1></i>
        <input type="text" name="name" placeholder="Nombre Completo">
        <input type="email" name="email" placeholder="Email">
        <input type="texto" name="password" placeholder="Contraseña">
        <!-- <input type="date" name="fecha_reg" placeholder="Fecha de Registro"> -->
        <input type="submit" name="register" >
    </form>
    </div>

    <?php 
    include ('registrar.php');
    ?> 

</body>
</html>