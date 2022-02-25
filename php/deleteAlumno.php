<?php
    session_start();

if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
    header('location: ../index.html');
}else{
    include "lib/consultas.php";
        
    $BaseDatos=new consultas();

    $BaseDatos->eliminarAlumnoActividad($_GET["id"]);

    $BaseDatos->eliminarAlumnoProfesor($_GET["id"]);
        
    $BaseDatos->eliminarAlumno($_GET["id"]);

    header("Location:mostrar_alumno.php");
}
?>