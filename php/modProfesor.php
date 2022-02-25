<?php
    session_start();
    if (!$_SESSION["Email"] || !$_SESSION["Rol"] == "0"){
        header('location: index.php');
    }else{
    require 'lib/consultas.php';
    $BaseDatos=new consultas();
    $resultado=$BaseDatos->profesorAeditar($_GET["id"]);
    
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
    <title>Modificar Profeser</title>
</head>

<body>

    <div class="encabezado">
        <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>
<div class="text-center">
    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>
</div>

<h1 class="text-center">Modificando datos del profesor &rarr; <?php echo $resultado[0]["Nombre"]." ".$resultado[0]["Apellido1"]." ".$resultado[0]["Apellido2"] ?></h1>
    <form action="modProfesorAuto.php" method="post" class="was-validated">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="nom" value="<?php echo $resultado[0]["Nombre"] ?>" required>

        </div>
        <div class="form-group">
            <label>Primer Apellido</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="ape1" value="<?php echo $resultado[0]["Apellido1"] ?>" required>

        </div>
        <div class="form-group">
            <label>Segundo Apellido</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="ape2" value="<?php echo $resultado[0]["Apellido2"] ?>" required>

        </div>
        <div class="form-group">
            <label>Correo Electr&oacute;nico</label>
            <input type="email" class="form-control form-control-lg posicionFormulario" name="ema" value="<?php echo $resultado[0]["Email"] ?>" required>

        </div>
        
        <div class="m-3 text-center">
            <input type="hidden" value="<?php echo $_GET["id"] ?>" name="id">
            <input type="submit" class="btn btn-primary btn-lg" value="Modificar">
            <input type="reset" class="btn btn-danger btn-lg" value="Borrar">
        </div>
    </form>
    <?php
    }
    ?>
</body>
</html>