<?php

session_start();

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
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>




<!-- JPDF-->
<!-- <script src="../cosas necesarias/jsPDF/dist/jspdf.es.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>

</head>



<body class="text-center">
    

    <div class="encabezado">
       <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

    <h3><?php echo $mensaje_h1 ?></h3>

    <a href="index.php"><input type="button" class="btn btn-secondary btn-lg" value="HOME"></a>

<div class="tablon">
    <table id="tabla" class="display table">
        <thead>
            <tr>
                <th> ID_Actividad </th>
                <th> Alumno </th>
                <th> Tutor </th>
                <th> Fecha </th>
                <th> Tipo_práctica </th>
                <th> Total_Horas </th>
                <th> Actividad_realizada </th>
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
                <th> ID_Actividad </th>
                <th> Alumno </th>
                <th> Tutor </th>
                <th> Fecha </th>
                <th> Tipo_práctica </th>
                <th> Total_Horas </th>
                <th> Actividad_realizada </th>
                <th> Observaciones </th>
            </tr>
        </tfoot>
</table>
</div>

<div class="col-md-4">
<button id="GenerarMysql" class="btn btn-dark">Crear PDF</button>
<br>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    jQuery(document).ready(function () {
        $('#tabla').DataTable({
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
            }
        });
    });

    $("#GenerarMysql").click(function(){
  var pdf = new jsPDF();
  pdf.text(20,20,"Mostrando una Tabla con PHP y MySQL");

  var columns = ["Id_actividad", "Alumno","Tutor","Fecha,","Tipo_Práctica","Total_Horas","Actividad_realizada","Observaciones"];
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

  pdf.save('MiTabla.pdf');


});


</script>
</body>
</html>