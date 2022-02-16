<?php

include "profesor.php";


$profesor=new profesor();
$resultado=$profesor->mostrarprofesorapi();
foreach($count as $profesor){
    echo $profesor["ID_Profesor"],$profesor["Nombre"],$profesor["Apellido1"],$profesor["Apellido2"],
    $profesor["Email"],$profesor["rol"];
     
 }

?>