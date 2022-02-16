<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A&ntilde;adir nuevo profesor</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
</head>

<body>
    <!--INICIO MENU-->
    <div class="encabezado">
        <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>

    <!--FIN MENU-->
    <h1 class="text-center">A&ntilde;adir nuevo profesor</h1>
    <form action="nuevoProfesor.php" method="post" class="was-validated">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="nombre" required>
            
        </div>
        <div class="form-group">
            <label for="ape1">Primer Apellido</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="ape1" required>
            
        </div>
        <div class="form-group">
            <label for="ape2">Segundo Apellido</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="ape2" required>
            
        </div>
        <div class="form-group">
            <label for="contra">Contraseña</label>
            <input type="password" class="form-control form-control-lg posicionFormulario" name="contra" required>
            
        </div>
        <div class="form-group">
            <label for="correo">Correo Electr&oacute;nico</label>
            <input type="email" class="form-control form-control-lg posicionFormulario" name="correo" required>
            
        </div>
        <br>
        <input type="submit" class="btn btn-primary btn-lg" value="Insertar">
        <input type="reset" class="btn btn-danger btn-lg" value="Borrar">
    </form>
</body>

</html>