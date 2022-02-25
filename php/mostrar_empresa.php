<?php

    session_start();
    if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
        header('location: ../index.html');
    }else{
    require 'lib/consultas.php';

    $BaseDatos=new consultas();
    $resultado=$BaseDatos->mostrarempresa();

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
    <title>Tabla Empresas</title>

</head>
<body>
           
<div class="encabezado">
    <img class="logo" alt="logo" src="../img/CESUR-web.png">
</div>

<div class="text-center">
    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>
</div>

<div class="tablon">
    <table id="tabla" class='display table'>
    <thead>
        <tr>
            <th> ID Empresa </th>
            <th> Nombre de la empresa </th>
            <th> Telefono </th>
            <th> Email </th>
            <th> Responsable </th>
            <th> Observaciones </th>
            <th> </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
<?php

foreach($resultado as $empresa){
    echo "<tr>";
        echo "<td>".$empresa["ID_Empresa"]."</td>";
        echo "<td>".$empresa["Nombre_Empresa"]."</td>";
        echo "<td>".$empresa["Telefono"]."</td>";
        echo "<td>".$empresa["Email"]."</td>";
        echo "<td>".$empresa["Responsable"]."</td>";
        echo "<td>".$empresa["Observaciones"]."</td>";
        echo "<td><a href='modEmpresa.php?id=".$empresa["ID_Empresa"]."'><input type='button' class='btn btn-info' value='Modificar'></a></td>";
        echo "<td><a href='deleteEmpresa.php?id=".$empresa["ID_Empresa"]."'><input type='button' class='btn btn-danger' value='Eliminar'></a></td>";
    echo "</tr>";   
}
?>
</tbody>
<tfoot>
    <tr>
        <th> ID Empresa </th>
        <th> Nombre de la empresa </th>
        <th> Telefono </th>
        <th> Email </th>
        <th> Responsable </th>
        <th> Observaciones </th>
        <th> </th>
        <th> </th>
    </tr>
</tfoot>
</table>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/tablasJquery.js"></script>
</body>
<?php
}
?>
</html>