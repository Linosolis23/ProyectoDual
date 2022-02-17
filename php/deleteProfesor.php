<?php

    session_start();

    include "lib/consultas.php";
        
    $BaseDatos=new consultas();

    $profesor = $BaseDatos->profesorAleatorio();

    $BaseDatos->asignarNuevoProfesor($_GET["id"], $profesor[0]["ID_Profesor"]);
        
    $BaseDatos->eliminarProfesor($_GET["id"]);

    header("Location:mostrar_profesor.php");

?>