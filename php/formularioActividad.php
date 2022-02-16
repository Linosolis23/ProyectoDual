<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir actividad prácticas</title>
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


    <h1 class="text-center">Añadir actividad prácticas</h1>
    <form action="nuevaActividad.php" method="post" class="was-validated">
        <div class="form-group">
            <label for="fecha">Fecha de realización</label>
            <input type="date" class="form-control form-control-lg posicionFormulario" name="fecha" id="fecha" required>
            
        </div>
        <div class="form-group">
            <label for="tipo">Tipo prácticas</label>
            <select class="form-select form-select-lg mb-3 posicionFormulario" name="tipo" id="tipo" required>
                <option value="" disabled selected>&darr; Selecciona un tipo &darr;</option>
                <option value="Dual">Dual</option>
                <option value="FCT">FCT</option>
            </select>
        </div>
        <div class="form-group">
            <label for="horas">Total horas realizados</label>
            <input type="number" class="form-control form-control-lg posicionFormulario" name="horas" id="horas" min="0" required>
            
        </div>
        <div class="form-group">
            <label for="act">Actividad realizada</label>
            <textarea class="form-control form-control-lg posicionFormulario" rows="5" name="act" id="act" required></textarea>
            
        </div>
        <div class="form-group">
            <label for="obs">Observaciones</label>
            <textarea class="form-control form-control-lg posicionFormulario" rows="5" name="obs" id="obs"></textarea>
        </div>
        <div>
            <input type="hidden" value="<?php echo $_SESSION['Nombre'] ?>">
        </div>
        <br>
        <input type="submit" class="btn btn-primary btn-lg" value="Insertar">
        <input type="reset" class="btn btn-danger btn-lg" value="Borrar">
    </form>
</body>

</html>