<?php
    session_start();
    if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
        header('location: index.php');
    }

    else{

    require 'lib/consultas.php';

    $BaseDatos=new consultas();

    $empresa = $BaseDatos->mostrarempresa_select();

    $resultado = $BaseDatos->mostrarprofesor_select($_SESSION['Nombre']);

    $alumno=$BaseDatos->alumnoAeditar($_GET["id"]);

    }
    
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
    <title>Modificar Alumno</title>
</head>

<body>

    <div class="encabezado">
        <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>
<div class="text-center">
    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>
</div>

<h1 class="text-center">Modificando datos del alumno &rarr; <?php echo $alumno[0]["Nombre"]." ".$alumno[0]["Apellido1"]." ".$alumno[0]["Apellido2"] ?></h1>
    <form action="modAlumnoAuto.php" method="post" class="was-validated">

    <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="nom" value="<?php echo $alumno[0]["Nombre"] ?>" required>
        </div>
        <div class="form-group">
            <label>Primer Apellido</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="ape1" value="<?php echo $alumno[0]["Apellido1"] ?>" required>

        </div>
        <div class="form-group">
            <label>Segundo Apellido</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="ape2" value="<?php echo $alumno[0]["Apellido2"] ?>" required>

        </div>
        
        <div class="form-group">
            <label>DNI</label>
            <input type="text" id="dni" name="dni" class="form-control form-control-lg posicionFormulario" minlength="9" maxlength="9" onchange="nif()" value="<?php echo $alumno[0]["DNI"] ?>" required>

        </div>

        <div class="form-group">
            <label>Fecha nacimiento</label>
            <input type="date" class="form-control form-control-lg posicionFormulario" name="fecha" value="<?php echo $alumno[0]["Fecha_Nacimiento"] ?>" required>

        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control form-control-lg posicionFormulario" name="ema" value="<?php echo $alumno[0]["Email"] ?>" required>

        </div>
        <div class="form-group">
            <label>Tel??fono</label>
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control form-control-lg posicionFormulario" name="tel" minlength="9" maxlength="9" value="<?php echo $alumno[0]["Telefono"] ?>" required>
        </div>
        <div class="form-group">
            <label>Empresa</label>

            <select class="form-control form-control-lg posicionFormulario" name="emp" required>

            <option value="<?php echo $alumno[0]['Empresa'] ?>" selected><?php echo $alumno[0]['Empresa'] ?></option>

                <?php foreach ($empresa as $opciones) { ?>

                <option value="<?php echo $opciones['Nombre_Empresa'] ?>"><?php echo $opciones['Nombre_Empresa'] ?></option>

                <?php } ?>

            </select>
        </div>


        <div class="form-group">
            <label>Profesor</label>
            <select class="form-control form-control-lg posicionFormulario" name="tut">
                
                <?php foreach ($resultado as $opciones) { ?>
                <option value="<?php echo $opciones['Nombre'] ?>"><?php echo $opciones['Nombre'] ?></option>
                <?php } ?>
                <option value="<?php echo $_SESSION['Nombre'] ?>" selected><?php echo $_SESSION['Nombre'] ?></option>

            </select>

        </div>
        <div class="form-group">
            <label>N?? horas Dual</label>
            <input type="number" class="form-control form-control-lg posicionFormulario" name="hdual" value="<?php echo $alumno[0]["N??Horas_Dual"] ?>" required>

        </div>
        <div class="form-group">
            <label>N?? horas FCT</label>
            <input type="number" class="form-control form-control-lg posicionFormulario" name="hfct" value="<?php echo $alumno[0]["N??Horas_FCT"] ?>" required>

        </div>
        
        
        <div class="m-3 text-center">
            <input type="hidden" value="<?php echo $_GET["id"] ?>" name="id">
            <input type="submit" class="btn btn-primary btn-lg" value="Modificar">
        </div>
    </form>
    
<script>
    function nif() {
    const dni = document.getElementById("dni").value;
  var numero;
  var letr;
  var letra;
  var expresion_regular_dni;
  expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
    console.log(dni);
  if(expresion_regular_dni.test (dni) == true){
     numero = dni.substr(0,dni.length-1);
     letr = dni.substr(dni.length-1,1);
     numero = numero % 23;
     letra='TRWAGMYFPDXBNJZSQVHLCKET';
     letra=letra.substring(numero,numero+1);
    if (letra!=letr.toUpperCase()) {
       alert('Dni erroneo, la letra del NIF no se corresponde');
       document.getElementById("dni").value="";

     }
    }else{
     alert('Dni erroneo, formato no v??lido');
     document.getElementById("dni").value="";

   }
}
</script>
</body>
</html>