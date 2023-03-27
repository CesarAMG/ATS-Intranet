<?php include "../sys/php/global.php"; include "php/conexion.php";
$periodo = strip_tags(htmlentities(htmlspecialchars(trim($_POST['periodo']))));
$ciclo = strip_tags(htmlentities(htmlspecialchars(trim($_POST['ciclo']))));
$activo = strip_tags(htmlentities(htmlspecialchars(trim($_POST['activo']))));
  $mysqli->query ("update configuracion set periodocaptura='".$periodo."',cicloescolar='".$ciclo."', boletavisible='".$activo."' where Id ='3'");
echo '<script language=javascript>location.href="tools.php"</script>';
?>
