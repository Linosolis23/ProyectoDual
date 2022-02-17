<?php

    session_start();

    include "lib/consultas.php";
        
    $BaseDatos=new consultas();

    $BaseDatos->eliminarAlumnoActividad($_GET["id"]);

    $BaseDatos->eliminarAlumnoProfesor($_GET["id"]);
        
    $BaseDatos->eliminarAlumno($_GET["id"]);

    header("Location:mostrar_alumno.php");

?>