<?php
    session_start();
    require 'lib/consultas.php';
    $BaseDatos=new consultas();
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">

    <title>Iniciar Sesi&oacute;n</title>

</head>

<body class="text-center">


    <?php

$encontrado = false;
    
    $resultado=$BaseDatos->login($_POST["email"]);
    switch ($resultado[0]["rol"]) {

        case '0':

        case '1':

            foreach($resultado as $registro){
                    $encontrado = true;
                    $nombre = $registro["Nombre"];
                    $email = $registro["Email"];
                    $rol = $registro["rol"];
                    $contra = $registro["Contraseña"];
                    $id = $registro["ID"];
            }

            if ($encontrado) {

                $md5 = md5($_POST['con']);

                if ($md5 == $contra) {
                    echo "Contraseña correcta";
                    $_SESSION["Nombre"]=$nombre;
                    $_SESSION["Email"]=$email;
                    $_SESSION["Rol"]=$rol;
                    $_SESSION["ID"]=$id;
                    header('location: index.php');
                }
                else {
                    echo "<h1>La contraseña introducida es incorrecta</h1>";
                }

            }
            else {
                echo "<h1>Este usuario no existe</h1>";
            }

            break;

        case '2':

            foreach($resultado as $registro){
                    $encontrado = true;
                    $nombre = $registro["Nombre"];
                    $email = $registro["Email"];
                    $rol = $registro["rol"];
                    $contra = $registro["Contraseña"];
                    $id = $registro["ID"];
            }

            if ($encontrado) {
                
                $md5 = md5($_POST['con']);

                if ($md5 == $contra) {
                    echo "Contraseña correcta<br>";
                    $_SESSION["Email"]=$email;
                    $_SESSION["Nombre"]=$nombre;
                    $_SESSION["Rol"]=$rol;
                    $_SESSION["ID"]=$id;
                    header('location: index.php');
                }
                else {
                    echo "<h1>La contraseña introducida es incorrecta</h1>";
                }

            }
            else {
                echo "<h1>Este usuario no existe</h1>";
            }

            break;
        
        default:
            echo "error";
            break;
    }


    
?>

    <a href="index.php"><input type="button" class="btn btn-danger btn-lg" value="Volver"></a>

</body>

</html>