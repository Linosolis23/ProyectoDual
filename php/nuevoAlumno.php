<?php

session_start();

    include "lib/consultas.php";
        
    $BaseDatos=new Consultas();
 
    // Dependiendo de si se rellena el textarea de observaciones
    if (empty($_POST["obs"])){
        $BaseDatos->nuevoAlumnoSin($_POST["nom"], $_POST["ape1"], $_POST["ape2"], md5($_POST["con"]), $_POST["dni"], $_POST["fecha"], $_POST["ema"], $_POST["tel"], $_POST["emp"], $_POST["tut"], $_POST["hdual"], $_POST["hfct"]);
    }
    else {
        $BaseDatos->nuevoAlumnoCon($_POST["nom"], $_POST["ape1"], $_POST["ape2"], md5($_POST["con"]), $_POST["dni"], $_POST["fecha"], $_POST["ema"], $_POST["tel"], $_POST["emp"], $_POST["tut"], $_POST["hdual"], $_POST["hfct"], $_POST["obs"]);
    }
    
    header("Location:mostrar_alumno.php");
    
?>