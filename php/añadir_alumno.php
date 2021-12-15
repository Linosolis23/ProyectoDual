<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Estilos-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">


    <title>Añade Alumnos</title>
</head>

<body>


    <div class="form-alumno ">
        <form method="post" action="">Formulario edicion


            <p>
                <label>ID</label>
                <input type="number" name="ID">
            </p>
            <p>
                <label>Nombre</label>
                <input type="text" name="nombre">
            </p>

            <p>
                <label>Apellido1</label>
                <input type="text" name="apellido1">
            </p>
            <p>
                <label>Apellido2</label>
                <input type="text" name="apellido2">
            </p>
            <p>
                <label>Contraseña</label>
                <input type="text" name="contraseña">
            </p>
            <p>
                <label>DNI</label>
                <input type="text" name="DNI">
            </p>
            <p>
                <label>Fecha nacimineto</label>
                <input type="date" name="Fnacimineto">
            </p>
            <p>
                <label>Email</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Telefono</label>
                <input type="number" name="telefono">
            </p>
            <p>
                <label>Empresa</label>
                <input type="text" name="empresa">
            </p>
            <p>
                <label>Tutor</label>
                <input type="text" name="tutor">
            </p>
            <p>
                <label>Nºhoras Dual</label>
                <input type="number" name="horas_dual">
            </p>
            <p>
                <label>Nª horas FCT</label>
                <input type="number" name="horas_fct">
            </p>
            <p>
                <label>Observaciones</label>
                <br>
                <textarea name="comentarios" rows="5" cols="20">
            Escribe aquí tus comentarios
        </textarea>
            </p>




            <p>
                <input type="submit" value="Guardar">
            </p>
            <!-- <a href="">volver</a>-->
        </form>
    </div>

    <?php
error_reporting(0);
    /*CONEXION*/
    $servername = "localhost";
    $database = "proyectodual";
    $username = "root";
    $password = "";
    $port=3307;
    $conn = mysqli_connect($servername, $username, $password, $database,$port);

    /*campos a rellenar*/
    $ID=$_GET['ID'];
    $nombre=$_GET['nombre'];
    $apellido1=$_GET['apellido1'];
    $apellido2=$_GET['apellido2'];
    $contraseña=$_GET['contraseña'];
    $DNI=$_GET['DNI'];
    $fnacimineto=$_GET['Fnacimineto'];
    $email=$_GET['email'];
    $telefono=$_GET['telefono'];
    $empresa=$_GET['empresa'];
    $tutor=$_GET['tutor'];
    $horasdual=$_GET['horas_dual'];
    $horasfct=$_GET['horas_fct'];
    $observaciones=$_GET['observaciones'];

    if ($nombre && $ID !=null){
        $query="insert into alumnos(ID_Alumno,Nombre,Apellido1,Apellido2,Contraseña,DNI,Fecha_Nacimiento,Email,Telefono,Empresa,Tutor,NºHoras_Dual,NºHoras_FCT,Observaciones)values('".$ID."','".$nombre."','".$apellido1."','".$apellido2."','".$contraseña."','".$DNI."','".$fnacimineto."','".$email."','".$telefono."','".$empresa."','".$tutor."','".$horasdual."','".$horasfct."','".$observaciones."')";
        mysqli_query($conn,$query);
        header("location:index.php");

    }
    ?>

</body>

</html>