<?php
    // Comprobar que sea al admin el que accede a esta página
    
    require 'lib/conexion_mysql.php';

    if ($conexion_mysql->connect_errno) {
        echo "Error: (".$conexion_mysql->connect_errno.")".$conexion_mysql->connect_error;
    }
    else {

        $codigo_sql = "INSERT INTO profesor (Nombre, Apellido1, Apellido2, Contraseña, Email) VALUES ('".$_POST["nombre"]."', '".$_POST["ape1"]."', '".$_POST["ape2"]."', '".$_POST["contra"]."', '".$_POST["correo"]."')";
        
        mysqli_query($conexion_mysql, $codigo_sql);
        
        header("Location:formularioProfesor.php");
    }
?>