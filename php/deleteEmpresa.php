<?php

    session_start();

    
if (!$_SESSION["Email"] || $_SESSION["Rol"] == "2"){
    header('location: ../index.html');
    }else{

    include "lib/consultas.php";
        
    $BaseDatos=new consultas();
        
    $BaseDatos->eliminarEmpresa($_GET["id"]);

    header("Location:mostrar_empresa.php");
    }

?>