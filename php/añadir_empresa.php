<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Link estilos boostrap-->
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

    <!--Formulario añadir empresa-->

    <form method="POST" action="nuevaEmpresa.php" class="was-validated">
        <div>
            <label>Nombre</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="nom" required>
        </div>
        <div>
            <label>Teléfono</label>
            <input type="number" class="form-control form-control-lg posicionFormulario" name="tel"  required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" class="form-control form-control-lg posicionFormulario" name="ema" required>
        </div>
        <div>
            <label>Responsable</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="res" required>
        </div>
        <div>
            <label>Observaciones</label><br>
            <textarea class="form-control form-control-lg posicionFormulario" name="obs" rows="5" cols="20"></textarea>
        </div>
        <input type="submit" class="btn btn-primary btn-lg" value="Insertar">
        <input type="reset" class="btn btn-danger btn-lg" value="Borrar">
    </form>
</body>
</html>