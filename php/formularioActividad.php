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
    <h1 class="text-center">Añadir actividad prácticas</h1>
    <form action="" method="post">
        <div class="form-group">
          <label for="fecha">Fecha de realización</label>
          <!-- Sacar la fecha de hoy en el input date con PHP añadiendo este atributo:
            value="<?php echo date('Y-m-d'); ?>" -->
          <input type="date" class="form-control form-control-lg posicionFormulario" name="fecha" id="fecha" placeholder="" required>
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
          <input type="number" class="form-control form-control-lg posicionFormulario" name="horas" id="horas" placeholder="" min="0" required>
        </div>
        <div class="form-group">
          <label for="act">Actividad realizada</label>
          <textarea class="form-control form-control-lg posicionFormulario" rows="5" name="act" id="act" required></textarea>
        </div>
        <div class="form-group">
          <label for="obs">Observaciones</label>
          <textarea class="form-control form-control-lg posicionFormulario" rows="5" name="obs" id="obs"></textarea>
        </div>
        <br>
        <input type="submit" class="btn btn-primary btn-lg" value="Insertar">
        <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="Volver al menú"></a>
      </form>
</body>
</html>