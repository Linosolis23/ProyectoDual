<?php
include "alumno.php";


$alumno=new alumno();
$resultado=$alumno->mostraralumnoapi();
foreach($count as $alumno){
    echo $alumno["ID_Alumno"], $alumno["Nombre"],$alumno["Apellido1"],$alumno["Apellido2"],$alumno["DNI"],$alumno["Fecha_Nacimiento"],$alumno["Email"]
    ,["Telefono"],$alumno["Empresa"],$alumno["Tutor"],$alumno["NºHoras_Dual"],$alumno["NºHoras_FCT"],$alumno["Observaciones"],$alumno["rol"];
      
}

?>