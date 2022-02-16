<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
    <body>
           
<div class="encabezado">
       <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>

    </body>
<?php

session_start();

    require 'lib/consultas.php';

echo "<table class='table' border=1 align='center'> <tr><th> ID_Empresa </th> <th> Nombre de la empresa </th><th> Telefono </th><th> Email </th><th> Responsable </th><th> Observaciones </th></tr>";

$BaseDatos=new consultas();
$resultado=$BaseDatos->mostrarempresa();

foreach($resultado as $empresa){
    echo "<tr><td>" . $empresa["ID_Empresa"] ."</td> <td>". $empresa["Nombre_Empresa"]."</td> <td>". $empresa["Telefono"]."</td><td>". $empresa["Email"]."</td><td>". $empresa["Responsable"]."</td><td>".$empresa["Observaciones"]."</td>";
    echo "</tr>";   
}
?>
