<?php
    // Comprobar que sea un alumno el que accede a esta página
    
    require 'lib/conexion_mysql.php';

    if ($conexion_mysql->connect_errno) {
        echo "Error: (".$conexion_mysql->connect_errno.")".$conexion_mysql->connect_error;
    }
    else {
        
        if (empty($_POST["obs"])){
            $codigo_sql = "INSERT INTO actividades (Fecha, Tipo_práctica, Total_Horas, Actividad_realizada) VALUES ('".$_POST["fecha"]."', '".$_POST["tipo"]."', ".$_POST["horas"].", '".$_POST["act"]."')";
        }
        else {
            $codigo_sql = "INSERT INTO actividades (Fecha, Tipo_práctica, Total_Horas, Actividad_realizada, Observaciones) VALUES ('".$_POST["fecha"]."', '".$_POST["tipo"]."', ".$_POST["horas"].", '".$_POST["act"]."', '".$_POST["obs"]."')";
        }
        
        //$codigo_sql2 = "INSERT INTO alumno_actividad VALUES (1,1)";
        
        mysqli_query($conexion_mysql, $codigo_sql);
        //mysqli_query($conexion_mysql, $codigo_sql2);
        
        header("Location:formularioActividad.php");
    }
?>