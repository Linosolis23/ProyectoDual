<?php

session_start();


include "lib/consultas.php";

$BaseDatos = new Consultas();

// Dependiendo de si se rellena el textarea de observaciones
if (empty($_POST["obs"])) {
    $BaseDatos->nuevaActividadSin($_POST["fecha"], $_POST["tipo"], $_POST["horas"], $_POST["act"]);
    
} else {
    $BaseDatos->nuevaActividadCon($_POST["fecha"], $_POST["tipo"], $_POST["horas"], $_POST["act"], $_POST["obs"]);
}

$ultima = $BaseDatos->ultimaActividad();

$BaseDatos->nuevaActividadAlumno($ultima[0]["ID_Actividad"], $_SESSION["ID"]);

header("Location:mostrar_actividad.php");
