<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Alumnos</title>
</head>
<?php
  $mysqli = new mysqli("localhost","root","","proyectodual",3307);

echo "<table border=1 align='center'> <tr><th> ID_Alumno </th> <th> Nombre </th><th> Apellido1 </th><th> Apellido2 </th><th> DNI </th><th> Fecha_Nacimiento </th><th> Email </th>
<th> Telefono </th><th> Empresa </th><th> Tutor </th><th> NºHoras_Dual </th><th> NºHoras_FCT </th><th> Observaciones </th></tr>";


$query = $mysqli->query ("SELECT * FROM alumno");
$nl = $query->num_rows;

for($x=0;$x<$nl;$x++){
    $actores=$query->fetch_assoc();
    echo "<tr><td>" . $actores["ID_Alumno"] ."</td> <td>". $actores["Nombre"]."</td> <td>". $actores["Apellido1"]."</td><td>". $actores["Apellido2"]."</td><td>". $actores["DNI"]."</td><td>"
    . $actores["Fecha_Nacimiento"]."</td><td>". $actores["Email"]."</td><td>". $actores["Telefono"]."</td><td>". $actores["Empresa"]."</td><td>". $actores["Tutor"]."</td>
    <td>". $actores["NºHoras_Dual"]."</td><td>". $actores["NºHoras_FCT"]."</td><td>". $actores["Observaciones"]."</td>";
    echo "</tr>";
    
}

?>