<?php /*ini_set("display_errors","1");*/ session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php $titulo="ReportCard Early Childhood";$error="";?>
<title><?php echo $titulo; ?></title>
<link href="css/boletas.css" rel="stylesheet" type="text/css" />
<link href="css/principal.css" rel="stylesheet" type="text/css" />
</head>
<body><?php
  include 'funciones.php';
  //if  (empty($_SESSION['nombre'])) {echo '<script>location.href="index.php";</script>'; }
  //mete a la session el grado y el grupo que asigno el admin
  if (!empty($_POST['grado']) && !empty($_POST['grupo'])) {$_SESSION['grado'] = $_POST['grado'];$_SESSION['grupo'] = $_POST['grupo']; }
  $cicloactivo = $_SESSION['cicloactivo'];$grado = $_SESSION['grado'];$grupo = $_SESSION['grupo'];
  ?>
<h1>THE AMERICAN SCHOOL OF TAMPICO</h1>
<h2>Report Cards Early Childhood</h2>
<hr size="6" color="#0A7ABD" /><?php
  if ($_SESSION['admin'] == 1) {?>
      <table id="tblBorder" width="80%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
            <td height="20px;" valign="middle">Bienvenido(a)&nbsp;<?php  echo $_SESSION['nombre']; ?></td>
            <td valign="baseline"><?php  poner_admin(); ?></td>
            <td><a href = "logout.php">Log Out</a></td>
            <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
        </tr>
        <tr>
            <td><div id="cor_lb"></div></td>
            <td colspan="3"></td>
            <td align="right"><div id="cor_rb"></div></td>
            </tr></table><br /><?php
    }else{?>
      <table id="tblBorder" width="80%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
        <td height="20px;">Bienvenido(a)&nbsp;<?php  echo $_SESSION['nombre']; ?> Grado :&nbsp;<?php  echo $_SESSION['grado']  ?>&nbsp;&nbsp;Grupo :&nbsp;<?php  echo $_SESSION['grupo']  ?></td>
        <td valign="baseline">&nbsp;</td>
        <td><a href = "logout.php">Log Out</a></td>
        <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
      </tr>
      <tr>
        <td><div id="cor_lb"></div></td>
        <td colspan="3"></td>
        <td align="right"><div id="cor_rb"></div></td>
        </tr></table><br /><?php
    }
    include "../sys/php/global.php";
    include "php/conexion.php";
    $mysqli->set_charset("utf8");
    //$grado = strip_tags(htmlentities(htmlspecialchars(trim($_POST['grado']))));
    //$grupo = strip_tags(htmlentities(htmlspecialchars(trim($_POST['grupo']))));
    $sql= "SELECT * FROM alumnos WHERE ciclo_id = '".$cicloactivo."' and grado = '".$grado."' and grupo = '".$grupo."' and activo = 1 ORDER BY orden ";
   // echo $sql;
    $resultado = $mysqli->query($sql);
    if (($resultado->num_rows) <= 0) {
      echo '<center><h1 >No hay alumnos! o si eres Admin Selecciona un grupo</h1></center>';
    }else { ?>
      <table id="tblBorder" width="80%" align="center" cellpadding="0" cellspacing="0">
        <tr><td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
          <td>
          <table width="100%" align="center" align="center" id="tblUser" cellpadding="5" cellspacing="0">
            <thead>
                <tr id="trenc" height="10px"><td colspan="2">&nbsp;&nbsp;&nbsp;<?php echo $resultado->num_rows.' Alumnos.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?></td></tr>
            </thead>
            <tbody><?php
                for ($i = 0; $i < ($resultado->num_rows); $i++){$aux = $i + 1;?>
                <tr height="10"><td width="5%"><img src="img/boletas/trian.png" height="8" /></td ><td width="95%">
                <?php   $res = $resultado->fetch_array(MYSQLI_ASSOC);
                        $matricula=$res['matricula'];
                        $nombre=$res['nombre'];
                        echo '<a href="alumno.php?matricula='.$matricula.'">'.$nombre.'</a>
                        </td>';

                    }
                }//mysqli_result($resultado); ?>  </tr>
            </tbody>
          </table></td>
          <td valign="top" align="right" width="5"><div id="cor_rt"></div></td></tr>
          <tr><td><div id="cor_lb"></div></td><td></td><td align="right"><div id="cor_rb"></div></td></tr></table>
</body>
</html>
