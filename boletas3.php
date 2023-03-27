<?session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?$titulo="ReportCard Early Childhood";$error="";?>
<title><? echo $titulo; ?></title>
<link href="boletas.css" rel="stylesheet" type="text/css" />
</head>
<body><?
  include ('funciones.php');
  if  (empty($_SESSION['nombre'])) {echo '<script>location.href="login.php";</script>'; }
  //mete a la session el grado y el grupo que asigno el admin
  if (!empty($_POST['grado']) && !empty($_POST['grupo'])) {$_SESSION['grado'] = $_POST['grado'];$_SESSION['grupo'] = $_POST['grupo']; }
  $cicloactivo = $_SESSION['cicloactivo'];$grado = $_SESSION['grado'];$grupo = $_SESSION['grupo'];
  if ($_SESSION['admin'] == 1) {?>
      <table id="tblBorder" width="80%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
            <td height="20px;">Bienvenido(a)&nbsp;<? echo $_SESSION['nombre']; ?></td>
            <td valign="baseline"><? poner_admin(); ?></td>
            <td><a href = "logout.php">Log Out</a></td>
            <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
        </tr>
        <tr>
            <td><div id="cor_lb"></div></td>
            <td colspan="3"></td>
            <td align="right"><div id="cor_rb"></div></td>
            </tr></table><br /><?
    }else{?>
      <table id="tblBorder" width="80%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
        <td height="20px;">Bienvenido(a)&nbsp;<? echo $_SESSION['nombre']; ?> Grado :&nbsp;<? echo $grado; ?>&nbsp;&nbsp;Grupo :&nbsp;<? echo $grupo; ?></td>
        <td valign="baseline">&nbsp;</td>
        <td><a href = "logout.php">Log Out</a></td>
        <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
      </tr>
      <tr>
        <td><div id="cor_lb"></div></td>
        <td colspan="3"></td>
        <td align="right"><div id="cor_rb"></div></td>
        </tr></table><br /><?
    }
    require_once ('conn_db.php');
    $resultado = mysql_query("SELECT * FROM alumnos WHERE ciclo_id = '$cicloactivo' and grado = '$grado' and grupo = '$grupo' and activo = 1 ORDER BY orden ", $connection);
    if (mysql_num_rows($resultado) <= 0) {
      echo '<center><h1 >No hay alumnos! o si eres Admin Selecciona un grupo</h1></center>';
    }else { ?>
      <table id="tblBorder" width="80%" align="center" cellpadding="0" cellspacing="0">
        <tr><td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
          <td>
          <table width="100%" align="center" align="center" id="tblUser" cellpadding="5" cellspacing="0">
            <thead>
                <tr id="trenc" height="10px"><td colspan="2">&nbsp;&nbsp;&nbsp;<? echo mysql_num_rows($resultado).' Alumnos.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?></td></tr>
            </thead>
            <tbody><?
                for ($i = 0; $i < mysql_num_rows($resultado); $i++){$aux = $i + 1;?>
                <tr height="10"><td width="5%"><img src="images/boletas/trian.png" height="8" /></td ><td width="95%"><?
                echo '<a href = "alumno.php?matricula='.mysql_result($resultado,$i,'matricula').'">'.mysql_result($resultado,$i,'nombre').'</a>';?></td></tr><?
                }
    }?>
            </tbody>
          </table></td>
          <td valign="top" align="right" width="5"><div id="cor_rt"></div></td></tr>
          <tr><td><div id="cor_lb"></div></td><td></td><td align="right"><div id="cor_rb"></div></td></tr></table>
</body>
</html>
