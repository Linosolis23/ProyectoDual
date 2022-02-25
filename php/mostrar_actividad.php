<?php

session_start();
if (!$_SESSION["Email"]){
    header('location: index.php');
}
   require 'lib/consultas.php';
   $BaseDatos=new consultas();

   switch ($_SESSION["Rol"]) {
        case '0':
            // Administrador
            $mensaje_h1 = "Mostrando toda actividad para la administraci&oacute;n.";
            $resultado=$BaseDatos->mostraractividad();
            break;

        case '1':
            // Profesor

            $mensaje_h1 = "Actividad de los alumnos a cargo de ".$_SESSION["Nombre"];

            $resultado=$BaseDatos->mostrarActividadProfe($_SESSION["ID"]);
            
            break;

        case '2':
            // Alumno
            $mensaje_h1 = "Mi actividad (".$_SESSION["Nombre"].")";

            $resultado=$BaseDatos->mostrarActividadAlu2($_SESSION["ID"]);

            break;
       
        default:
            // No tiene rol?
            header('location: index.php');
            break;
   }

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
    <title>Tabla actividades</title>

</head>



<body>
    

    <div class="encabezado">
       <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

<div class="text-center">
    <h3><?php echo $mensaje_h1 ?></h3>
    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>
</div>
    
<div class="tablon">
    <table id="tabla" class="display table">
        <thead>
            <tr>
                <th> ID Actividad </th>
                <th> Alumno </th>
                <th> Tutor </th>
                <th> Fecha </th>
                <th> Tipo práctica </th>
                <th> Total Horas </th>
                <th> Actividad realizada </th>
                <th> Observaciones </th>
            </tr>
        </thead>
        <tbody>
<?php
        foreach($resultado as $actividad){
            echo "<tr>";
                echo "<td>".$actividad["ID_Actividad"]."</td>";
                echo "<td>".$actividad["nAlumno"]." ".$actividad["alApe1"]." ".$actividad["alApe2"]."</td>";
                echo "<td>".$actividad["nProfe"]." ".$actividad["pApe1"]." ".$actividad["pApe2"]."</td>";
                echo "<td>".$actividad["Fecha"]."</td>";
                echo "<td>".$actividad["Tipo_práctica"]."</td>";
                echo "<td>".$actividad["Total_Horas"]."</td>";
                echo "<td>".$actividad["Actividad_realizada"]."</td>";
                echo "<td>".$actividad["Observaciones"]."</td>";
            echo "</tr>";
        }
        
?>

        </tbody>
        <tfoot>
            <tr>
                <th> ID Actividad </th>
                <th> Alumno </th>
                <th> Tutor </th>
                <th> Fecha </th>
                <th> Tipo práctica </th>
                <th> Total Horas </th>
                <th> Actividad realizada </th>
                <th> Observaciones </th>
            </tr>
        </tfoot>
</table>
</div>

<div class="text-center">
    <input type="button" id="GenerarMysql" class="btn btn-outline-danger" value="Generar PDF">
</div>

<!-- JPDF-->

<script src="../js/jspdf.min.js"></script>
<script src="../js/jspdf.plugin.autotable.min.js"></script>

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/tablasJquery.js"></script>

<script>

    $("#GenerarMysql").click(function(){
  var pdf = new jsPDF();
  pdf.text(20,20,"Diario de Actividades de <?php echo $_SESSION["Nombre"]; ?>");

  var columns = ["Id Actividad", "Alumno","Tutor","Fecha","Tipo Práctica","Total Horas","Actividad realizada","Observaciones"];
  var data = [
<?php foreach($resultado as $actividad){?>
[<?php echo $actividad["ID_Actividad"]; ?>,
 "<?php echo $actividad["nAlumno"]?>",
 "<?php echo $actividad["nProfe"]?>",
 "<?php echo $actividad["Fecha"]?>",
 "<?php echo $actividad["Tipo_práctica"]?>", 
 "<?php echo $actividad["Total_Horas"]?>", 
 "<?php echo $actividad["Actividad_realizada"]?>", 
 "<?php echo $actividad["Observaciones"]?>" 


],
<?php } ?>  
];
  
pdf.autoTable(columns,data,
    { margin:{ top: 25  },  
    styles: {fontSize: 8},
  
    });

  pdf.save('Diario-<?php echo $_SESSION["Nombre"]; ?>.pdf');


});


</script>
</body>
</html>