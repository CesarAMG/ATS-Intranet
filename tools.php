<?php //ini_set("display_errors","1");
session_start();
include "../sys/php/global.php"; include "php/conexion.php";
$nombre=$_SESSION['nombre']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Report Cards</title>
<link href="css/principal.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>THE AMERICAN SCHOOL OF TAMPICO</h1>
<h2>Report Cards Early Childhood</h2>
<hr size="6" color="#0A7ABD" />
<table cellpadding="10" cellspacing="0" class="services_menu" align="center">
<?php
//------------------------------
$limc = 6; //Maximo de Columnas
$xi = 1;
//------------------------------

function icono($id,$lm,$lnk,$img,$txt){
    if($id == 1) echo "<tr>";  ?>
    <td onclick="location.href='<?php echo $lnk; ?>'"; <?php
    echo "width=120 valign=center align=center><img src=img/".$img.".png border=0 width=48px height=48px>
            <br />".$txt."</td>";
    $id++;
    if($id >= $lm) {echo "</tr>"; $id = 1; }
    return $id;
}
    $xi=icono($xi,$limc,'boletas.php','check','Capture Report Cards');
    $xi=icono($xi,$limc,'view2.php?opcion=view','view','View Report Cards');
    if(($nombre=="Mariano Hernandez") || ($nombre=="Monica Aviña") || ($nombre=="Monica Perez") || ($nombre=="Gina Herrera") || ($nombre=="Augusto Morales") || ($nombre=="Omar Hernandez") || ($nombre=="Brenda Rodríguez") || ($nombre=="Rocio Acevedo De La Garza")){
    $xi=icono($xi,$limc,'cat_alumnos.php','student','Edit Students');
    $xi=icono($xi,$limc,'settings.php','settings','Settings');
    }
?>
</table>
</body>
</html>
