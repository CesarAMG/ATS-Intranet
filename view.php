<? session_start();?>
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
<?php
include("php/global.php");
include("php/conexion.php");
$conexion = conecta("atsedu_boletaskinder");
if ($opcion =='view'){
$resultados = mysql_query("select  grado, grupo, nombre  from maestros Where nombre like '%$maestro%'  and admin is null order by orden ",$conexion);
echo '<table width="100%" >
<tr ><td bgcolor="#333333">
        <form name="forma"  action = "view.php" method="POST">
			<table >
                   	<tr> <td><input type=hidden name=opcion value="teacher"></td></tr>
                   	<tr><td><input type=hidden name=admin value="'.$admin.'"></td></tr>
                   	<tr><td><input type=hidden name=username value="'.$username.'"></td></tr>
                   	<tr><td><input type=hidden name=password value="'.$password.'"></td></tr>
             		<tr >
						<td width="112" align=center valign=middle bgcolor="#333333">
							<img src="img/logo_boletas.gif" style="margin-left:10px; margin-right:10px">
						</td>
					<td> <font color="#FFFFFF">Grados </font>
							<select name="maestro" id="maestro">
                    		<option value="--" '.$nada.'>--</option>';
					while($row = mysql_fetch_array($resultados))
					{ echo'<option value='.$row[0].''.$row[1].'-'.$row[2].'>'.$row[0].''.$row[1].' '.$row[2].'</option> '; }

echo '
						</select>
						</td>
						<td><font color="#FFFFFF">
						 Periodos  </FONT>
							<select name="periodos" id="periodos">
								<option value="1">1   </option>
								<option value="1">2   </option>
								<option value="1">3   </option>
							</select>

						</td>
						<td><center><input type="submit" value="Submit"></center></td>
						</tr>
			</table>
			</form>
    		<hr>
</td>
</tr>
</table>
';
return;
}
if ($opcion =='teacher' ){
  if (!isset($periodos) or ($periodos == "--")){    $periodos = "3";  }
    echo '<table width="90%" border="0" ><tr><td width="50%">Teacher: '. $maestro. ' </td> <td width="50%"> Periodo: '.$periodos . '</td></tr></table>';
    $select = " select matricula, nombre,activo  from alumnos where '$maestro' like concat(grado,concat(grupo,'%') )  and  activo=1 order by Nombre";
    $resultados = mysql_query($select, $conexion);
    echo ' <br><font  face="Times" size =2 >
    <table align= "center" border="1" cellspacing="1" cellpadding="1" style="font-family:arial; color:#FFFF33 ;font-size:12px; width=40%">
           <tr>
                    <td bgcolor = "#0000CC"> Alumnos </td>
           </tr>
                  ';
echo '<center>';
    $i=1;
      while($row = mysql_fetch_array($resultados)){
         echo 	' <tr>
                <form  id="frmenvia'.$i.'" name="frmenvia'.$i.'"  action = "printKinderviewMaestros.php" method="POST">
                <input type= hidden  name=passlog value='.$password.'>
                <input type= hidden  name=userlog value='.$username.'>
                <input type= hidden  name=username value='.$row[0].'>
                <input type= hidden  name=opcion value='.$opcion.'>
                <input type= hidden  name=maestro value='.$maestro.'>
                <input type= hidden  name=periodos value='.$periodos.'>
                <td colspan = 5 ><a href="#" onclick="document.getElementById(\'frmenvia'.$i.'\').submit();"> '.$row[1].'  </td>
              </form>
           </tr> ';
        $i++;
    }

echo' </table> ';
echo '<center>
        <form name="forma"  action = "view.php" method="post">
              <input type= hidden  name=opcion value="view">
              <input type=hidden name=username value="'.$username.'">
              <input type= hidden name=password value="'.$password.'">
              <input type=submit value="    Regresar    ">
        </form>
        </center>
    ';

}
?>
</body>
</html>
