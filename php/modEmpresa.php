<?php
    session_start();
    if (!$_SESSION["Email"]){
        header('location: ../index.html');
    }
    require 'lib/consultas.php';
    $BaseDatos=new consultas();
    $resultado=$BaseDatos->empresaAeditar($_GET["id"]);
    
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
    <title>Modificar Empresa</title>
</head>

<body>

    <div class="encabezado">
        <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>
<div class="text-center">
    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>
</div>

<h1 class="text-center">Modificando datos de la Empresa &rarr; <?php echo $resultado[0]["Nombre_Empresa"] ?></h1>
    <form action="modEmpresaAuto.php" method="post" class="was-validated">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="nom" value="<?php echo $resultado[0]["Nombre_Empresa"] ?>" required>

        </div>
        <div class="form-group">
            <label>Tel&eacute;fono</label>
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control form-control-lg posicionFormulario" name="tel" minlength="9" maxlength="9" value="<?php echo $resultado[0]["Telefono"] ?>" required></input>

        </div>
        <div class="form-group">
            <label>Correo Electr&oacute;nico</label>
            <input type="email" class="form-control form-control-lg posicionFormulario" name="ema" value="<?php echo $resultado[0]["Email"] ?>" required>
            
        </div>
        <div class="form-group">
            <label>Responsable</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="res" value="<?php echo $resultado[0]["Responsable"] ?>" required>

        </div>
        
        <div class="m-3 text-center">
            <input type="hidden" value="<?php echo $_GET["id"] ?>" name="id">
            <input type="submit" class="btn btn-primary btn-lg" value="Modificar">
            <input type="reset" class="btn btn-danger btn-lg" value="Borrar">
        </div>
    </form>

</body>
</html>