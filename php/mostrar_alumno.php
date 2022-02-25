<?php
session_start();
if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
    header('location: ../index.html');
}else{
require 'lib/consultas.php';
$BaseDatos=new consultas();

if ($_SESSION["Rol"] == 0) {
    $resultado=$BaseDatos->mostrarAlumnoAdmin();
}
else {
    $resultado=$BaseDatos->mostraralumno();
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
    <title>Tabla Alumno</title>

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
                <th> ID Alumno </th>
                <th> Nombre </th>
                <th> Primer Apellido </th>
                <th> Segundo Apellido </th>
                <th> DNI </th>
                <th> Fecha Nacimiento </th>
                <th> Email </th>
                <th> Telefono </th>
                <th> Empresa </th>
                <th> Tutor </th>
                <th> NºHoras Dual </th>
                <th> NºHoras FCT </th>
                <th> Observaciones </th>
                <th> </th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
<?php
foreach($resultado as $alumno){
    echo "<tr>";
        echo "<td>". $alumno["ID_Alumno"] ."</td>";
        echo "<td>". $alumno["Nombre"]."</td>";
        echo "<td>". $alumno["Apellido1"]."</td>";
        echo "<td>". $alumno["Apellido2"]."</td>";
        echo "<td>". $alumno["DNI"]."</td>";
        echo "<td>". $alumno["Fecha_Nacimiento"]."</td>";
        echo "<td>". $alumno["Email"]."</td>";
        echo "<td>". $alumno["Telefono"]."</td>";
        echo "<td>". $alumno["Empresa"]."</td>";
        echo "<td>". $alumno["Tutor"]."</td>";
        echo "<td>". $alumno["NºHoras_Dual"]."</td>";
        echo "<td>". $alumno["NºHoras_FCT"]."</td>";
        echo "<td>". $alumno["Observaciones"]."</td>";
        echo "<td><a href='modAlumno.php?id=".$alumno["ID_Alumno"]."'><input type='button' class='btn btn-info' value='Modificar'></a></td>";
        echo "<td><a href='deleteAlumno.php?id=".$alumno["ID_Alumno"]."'><input type='button' class='btn btn-danger' value='Eliminar'></a></td>";
    echo "</tr>";   
}
?>
        </tbody>
        <tfoot>
            <tr>
                <th> ID Alumno </th>
                <th> Nombre </th>
                <th> Primer Apellido </th>
                <th> Segundo Apellido </th>
                <th> DNI </th>
                <th> Fecha Nacimiento </th>
                <th> Email </th>
                <th> Telefono </th>
                <th> Empresa </th>
                <th> Tutor </th>
                <th> NºHoras Dual </th>
                <th> NºHoras FCT </th>
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