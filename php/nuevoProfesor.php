<?php

session_start();
if (!$_SESSION["Email"] || !$_SESSION["Rol"] == "0"){
    header('location: ../index.html');
}else{

    include "lib/consultas.php";
      
    $BaseDatos=new Consultas();

    $md5 = md5($_POST["contra"]);
    $md5_repite = md5($_POST["contra2"]);

    if ($md5 == $md5_repite) {
        $BaseDatos->nuevoProfesor($_POST["nombre"], $_POST["ape1"], $_POST["ape2"], $md5, $_POST["correo"]);
        
        header("Location:formularioProfesor.php");
    }
    else {
        echo "La contraseñas no coinciden";

        echo '<br><a href="formularioProfesor.php"><input type="button" value="Volver"></a>';
    }
}
?>