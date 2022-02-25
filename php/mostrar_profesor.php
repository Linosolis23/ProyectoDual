<?php
    session_start();
    if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
        header('location: ../index.html');
    }else{
    require 'lib/consultas.php';
    $BaseDatos=new consultas();
    $resultado=$BaseDatos->mostrarprofesor();
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
                <th> ID profesor </th>
                <th> Nombre </th>
                <th> Primer Apellido </th>
                <th> Segundo Apellido </th>
                <th> Email </th>
                <th> </th>
                <th> </th>
            </tr>
        </thead>
        <tbody>

<?php
    foreach($resultado as $profesor){
    echo "<tr>";
        echo "<td>".$profesor["ID_Profesor"]."</td>";
        echo "<td>".$profesor["Nombre"]."</td>";
        echo "<td>".$profesor["Apellido1"]."</td>";
        echo "<td>".$profesor["Apellido2"]."</td>";
        echo "<td>".$profesor["Email"]."</td>";
        if ($_SESSION["Rol"] == 0) {
            echo "<td><a href='modProfesor.php?id=".$profesor["ID_Profesor"]."'><input type='button' class='btn btn-info' value='Modificar'></a></td>";
            echo "<td><a href='deleteProfesor.php?id=".$profesor["ID_Profesor"]."'><input type='button' class='btn btn-danger' value='Eliminar'></a></td>";
        }
        else {
            echo "<td></td><td></td>";
        }
    echo "</tr>";   
    }
?>
        </tbody>
        <tfoot>
            <tr>
                <th> ID profesor </th>
                <th> Nombre </th>
                <th> Primer Apellido </th>
                <th> Segundo Apellido </th>
                <th> Email </th>
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