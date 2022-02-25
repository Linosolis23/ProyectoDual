<?php
    session_start();
    if (!$_SESSION["Email"] || !$_SESSION["Rol"] == "0"){
        header('location: index.php');
    }else{

    require 'lib/consultas.php';
    $BaseDatos=new consultas();

    $BaseDatos->modificarProfesor($_POST["id"], $_POST["nom"], $_POST["ape1"], $_POST["ape2"], $_POST["ema"]);

    header('location: mostrar_profesor.php');
    }
?>