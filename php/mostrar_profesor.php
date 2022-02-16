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

    <div class="encabezado">
        <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>
    <div>
        <form action="consultas.php" method="post">

            Escribe id para elimiar: <input type="number" name="Id_EliminarPro" />

            <input type="submit" />

        </form>
    </div>

</body>

<?php

session_start();

    require 'lib/consultas.php';
    $BaseDatos=new consultas();
    $resultado=$BaseDatos->mostrarprofesor();

echo "<table class='table' border=1 align='center'> <tr><th> ID_profesor </th> <th> Nombre </th><th> Apellido1 </th><th> Segundo Apellido </th><th> Email </th></tr>";



foreach($resultado as $profesor){
   echo "<tr><td>" . $profesor["ID_Profesor"] ."</td> <td>". $profesor["Nombre"]."</td> <td>". $profesor["Apellido1"]."</td><td>". $profesor["Apellido2"]."</td><td>". $profesor["Email"]."</td>";
    echo "</tr>";   
}

echo "</table>";
?>