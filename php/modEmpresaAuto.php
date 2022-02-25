<?php
    session_start();
    if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
        header('location: index.php');
    }else{

    require 'lib/consultas.php';
    $BaseDatos=new consultas();

    $BaseDatos->modificarEmpresa($_POST["id"], $_POST["nom"], $_POST["tel"], $_POST["ema"], $_POST["res"]);

    header('location: mostrar_empresa.php');
    }
?>