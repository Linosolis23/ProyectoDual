<?php
    session_start();
    if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
        header('location: index.php');
    }else{

    require 'lib/consultas.php';
    $BaseDatos=new consultas();

    $BaseDatos->modificarAlumno($_POST["id"], $_POST["nom"], $_POST["ape1"], $_POST["ape2"], $_POST["dni"], $_POST["fecha"], $_POST["ema"], $_POST["tel"], $_POST["emp"], $_POST["tut"], $_POST["hdual"], $_POST["hfct"]);

    header('location: mostrar_alumno.php');
}
?>