<?php
    session_start();

    if ($_SESSION["Email"]){
        header('location: php/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/local.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.css"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<style>
  /*imports para la fuente de las letras*/
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500);

.formulario{
    font: 62.5% Open Sans, Freesans, sans-serif;
    background: #2c3338;
}
.login-wrapper{
    margin:80px auto;
    width:325px;
}
form h1{
    color:#dedede;
    font-size:2.8em;
    font-weight: normal;
    letter-spacing: -1px;
    font-family: Roboto;
}
form h1 span{
    font-weight: 500;
    letter-spacing: -1px;
    
}
form input{
    border:none;
    margin:0;
}
form .input-row{
    margin:2em 0;
    overflow:hidden;
}
form .icon{
    font-size:1.4em;
    background:#FFFFFF;
    padding:0.8em;
    border-left:4px solid #ea4c88;
    color:#9f9f9f;
    float:left;
}
form input[type="email"],form input[type="password"] {
    padding:0.8em 0.8em 0.8em 0;
    font-size:1.4em;
    color:#000000;
    width:275px;
}
form input[type="email"]:focus,form input[type="password"]:focus {
    outline:0;
}
form input[type="submit"]{
    border:none;
    background:#ea4c88;
    color:#FFFFFF;
    font-size:1.6em;
    padding:0.7em 1.2em;
    opacity: 1;
    transition: opacity .5s ease-in-out;
    -moz-transition: opacity .5s ease-in-out;
    -webkit-transition: opacity .5s ease-in-out;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
}
form input[type="submit"]:hover {
    background:#c62a65;
    opacity: 0.8;
}
/*FIN del LOGIN*/
</style>
<body class="formulario">
    
<!-- formulario login-->

    <form action="php/login.php" class="login-wrapper" method="post">
        <h1><span>Pr&aacute;cticas</span> Login.</h1>

        <div class="input-row">
            <span class="icon"><i class="fa fa-at"></i></span>
            <input type="email" name="email" placeholder="Email" required/>
        </div>

        <div class="input-row">
            <span class="icon"><i class="fa fa-lock"></i></span>
            <input type="password" name="con" placeholder="Contrase&ntilde;a" required/>
        </div>

        <!-- <div class="input-row">
            <input type="radio" name="rol" value="p" required>Profesor<br>
            <input type="radio" name="rol" value="a" required>Alumno
        </div> -->

        <div class="submit-row">
            <input type="submit" value="Iniciar Sesi&oacute;n &raquo;"/>
        </div>
        

    </form>


</body>
</html>
