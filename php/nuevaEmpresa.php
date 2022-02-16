<?php

session_start();

    {
        include "lib/consultas.php";
        
        $BaseDatos=new Consultas();
     
        // Dependiendo de si se rellena el textarea de observaciones
        if (empty($_POST["obs"])){
            $BaseDatos->nuevaEmpresaSin($_POST["nom"], $_POST["tel"], $_POST["ema"], $_POST["res"]);
        }
        else {
            $BaseDatos->nuevaEmpresaCon($_POST["nom"], $_POST["tel"], $_POST["ema"], $_POST["res"], $_POST["obs"]);
        }
        
        header("Location:mostrar_empresa.php");
    }
?>