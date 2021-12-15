<form method="post" action="">Formulario edicion


    <p>
        <label>ID</label>
        <input type="number" name="ID">
    </p>
    <p>
        <label>nombre</label>
        <input type="text" name="nombre">
    </p>
    <p>
        <label>apellido1</label>
        <input type="text" name="apellido1">
    </p>
    <p>
        <label>apellido2</label>
        <input type="text" name="apellido2">
    </p>
    <p>
        <label>contraseña</label>
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
        <label>email</label>
        <input type="text" name="email">
    </p>
    <p>
        <label>telefono</label>
        <input type="number" name="telefono">
    </p>
    <p>
        <label>empresa</label>
        <input type="text" name="empresa">
    </p>
    <p>
        <label>tutor</label>
        <input type="text" name="tutor">
    </p>
    <p>
        <label>nºhoras dual</label>
        <input type="number" name="horas_dual">
    </p>
    <p>
        <label>horas fct</label>
        <input type="number" name="horas_fct">
    </p>
    <p>
        <label>Observaciones</label>
        <textarea name="comentarios" rows="5" cols="20">
            Escribe aquí tus comentarios
        </textarea>
    </p>




    <p>
        <input type="submit" value="Guardar">
    </p>
    <!-- <a href="">volver</a>-->
</form>

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