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

   
    <!--PNG logo Cesur-->
    <div> <img class="logocesur"  src="https://2019.talent-woman.es/wp-content/uploads/2019/11/CESUR-web.png" alt="Cesur Logo"></div>


    <!--Formulario añadir empresa-->

    <form method="POST" action=""> 

    <p>
        <label>Nombre</label>
        <imput type="text" name="nombreEmp">
    </p>

    <p>
        <label>Telefono</label>
        <input type="number" name="telefonoEmp">
    </p>

    <p>
        <label>Email</label>
        <input type="text" name="emailEmp">
    </p>

    <p>
        <label>Responsable</label>
        <imput type="text" name="responsableEmp">
    </p>

    <p>
        <label>Observaciones e Incidentes</label>
        <textarea name="comentarios" rows="5" cols="20">
            Escribe aquí tus comentarios
        </textarea>
    </p>

    <p>
        <input type="submit" value="Guardar">
    </p>

    </form>
    
</body>    

</html>


<?php
error_reporting(0);
/*CONEXION*/
 $servername = "localhost";
 $database = "proyectodual";
 $username = "root";
 $password = "";
 $port=3307;
 $conn = mysqli_connect($servername, $username, $password, $database,$port);

/*Campos a rellenar*/
$nombre=$_GET['nombreEmp'];
$telefonoEmp=$_GET['telefonoEmp'];
$emailEmp=$_GET['emailEmp'];
$responsableEmp=$_GET['responsableEmp'];
$comentarios=$_GET['comentarios'];

if ($nombre !=null) {
    $query="insert into empresa(Nombre_Empresa,Telefono,Email,Responsable,Observaciones)
    values('".$nombre."','".$telefonoEmp."','".$emailEmp."','".$responsableEmp."','".$comentarios."',)";
    mysqli_query($conn,$query);
    header("location:index.php");
}


?>

