<?php

session_start();


    include "lib/consultas.php";
      
    $BaseDatos=new Consultas();
    
    $BaseDatos->nuevoProfesor($_POST["nombre"], $_POST["ape1"], $_POST["ape2"], md5($_POST["contra"]), $_POST["correo"]);
        
    header("Location:formularioProfesor.php");
    
?>