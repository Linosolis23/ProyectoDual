<?php

    session_start();

    include "lib/consultas.php";
        
    $BaseDatos=new consultas();
        
    $BaseDatos->eliminarAlumno($_GET["id"]);

    header("Location:mostrar_alumno.php");

?>