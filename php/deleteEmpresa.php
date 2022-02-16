<?php

    session_start();

    include "lib/consultas.php";
        
    $BaseDatos=new consultas();
        
    $BaseDatos->eliminarEmpresa($_GET["id"]);

    header("Location:mostrar_empresa.php");

?>