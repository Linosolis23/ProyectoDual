<?php
    session_start();
    if (!$_SESSION["Email"]) {
        header('location: index.php');
    }

    require 'lib/consultas.php';
    $BaseDatos=new consultas();

    $BaseDatos->modificarAlumno($_POST["id"], $_POST["nom"], $_POST["ape1"], $_POST["ape2"], md5($_POST["con"]), $_POST["dni"], $_POST["fecha"], $_POST["ema"], $_POST["tel"], $_POST["emp"], $_POST["tut"], $_POST["hdual"], $_POST["hfct"]);

    header('location: mostrar_alumno.php');

?>