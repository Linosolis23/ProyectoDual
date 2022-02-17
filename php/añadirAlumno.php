<?php
session_start();

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
    <!-- <script type="text/javascript">
    function checkDni() {

        while (!(/^\d{8}[a-zA-Z]$/.test(dni))) {
            var dni = document.getElementById('validarDNI').value;
        }
        //Letra y numeros por separado
        var letra = dni.substring(8, 9).toUpperCase();
        var numero = parseInt(dni.substring(0, 8));

        //Se calcula la letra segun el numero introducido
        var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H',
            'L', 'C', 'K', 'E', 'T'
        ];
        var letraCorrecta = letras[numero % 23];

        if (letra != letraCorrecta) {
            alert("Has introducido la letra equivocada,deberia ser esta: " + letraCorrecta);
        } else {
            alert("Enhorabuena hemos podido validar tu DNI");

        }
    }
    </script> -->

</head>

<body>
    <div class="encabezado">
        <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

    <h1 class="text-center">A&ntilde;adir nuevo alumno</h1>

    <div class="text-center">
        <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>
    </div>

    <form method="post" action="nuevoAlumno.php" class="was-validated">

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
        <div class="form-group" name="formdni">
            <label>DNI</label>
            <!-- <input type="text" id="validarDNI" name="dni" class="form-control form-control-lg posicionFormulario" minlength="9" maxlength="9" required onchange="checkDni()"> -->
            <input type="text" id="validarDNI" name="dni" class="form-control form-control-lg posicionFormulario" minlength="9" maxlength="9" required">

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
            <input type="number" class="form-control form-control-lg posicionFormulario" name="tel" required>

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

</body>

</html>