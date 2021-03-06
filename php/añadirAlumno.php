<?php
session_start();
if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
    header('location: index.php');
}else{

require 'lib/consultas.php';

$BaseDatos = new consultas();

$empresa = $BaseDatos->mostrarempresa_select();

$resultado = $BaseDatos->mostrarprofesor_select($_SESSION['Nombre']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilos-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
    <title>Añadir Alumnos</title>

</head>

<body>
    <div class="encabezado">
        <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

    <h1 class="text-center">A&ntilde;adir nuevo alumno</h1>

    <div class="text-center">
        <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>
    </div>

    <form method="post" action="nuevoAlumno.php" class="was-validated" >

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="nom" required>
        </div>
        <div class="form-group">
            <label>Primer Apellido</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="ape1" required>

        </div>
        <div class="form-group">
            <label>Segundo Apellido</label>
            <input type="text" class="form-control form-control-lg posicionFormulario" name="ape2" required>

        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control form-control-lg posicionFormulario" name="con" required>

        </div>
        <div class="form-group">
            <label>DNI</label>
            <input type="text" id="dni" name="dni" class="form-control form-control-lg posicionFormulario" minlength="9" maxlength="9" onchange="nif()" required>

        </div>

        <div class="form-group">
            <label>Fecha nacimiento</label>
            <input type="date" class="form-control form-control-lg posicionFormulario" name="fecha" required>

        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control form-control-lg posicionFormulario" name="ema" required>

        </div>
        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control form-control-lg posicionFormulario" name="tel" minlength="9" maxlength="9" required></input>
        </div>
        <div class="form-group">
            <label>Empresa</label>

            <select class="form-control form-control-lg posicionFormulario" name="emp" required>

            <option value="" disabled selected>&darr; Selecciona una empresa &darr;</option>

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
            <label>Nº horas Dual</label>
            <input type="number" class="form-control form-control-lg posicionFormulario" name="hdual" required>

        </div>
        <div class="form-group">
            <label>Nº horas FCT</label>
            <input type="number" class="form-control form-control-lg posicionFormulario" name="hfct" required>

        </div>
        <div class="form-group">
            <label>Observaciones</label>
            <textarea name="obs" class="form-control form-control-lg posicionFormulario" rows="5" cols="20"></textarea>
        </div>

        <div class="m-3 text-center">
            <input type="submit" class="btn btn-primary btn-lg" value="Insertar">
            <input type="reset" class="btn btn-danger btn-lg" value="Borrar">
        </div>

    </form>

    <?php
}
?>
</body>

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
     alert('Dni erroneo, formato no válido');
     document.getElementById("dni").value="";

   }
}
</script>

</html>