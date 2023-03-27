<?php session_start();?>
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
include "../sys/php/global.php"; include "php/conexion.php";

$opcion = isset($_GET['opcion'] ) ? $_GET['opcion']: '';
//$opcion = strip_tags(htmlentities(htmlspecialchars(trim($_GET['opcion']))));
$opcion2 = isset($_POST["opcion"] ) ? $_POST["opcion"]: '';
//$opcion2 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['opcion']))));
//$maestro =  strip_tags(htmlentities(htmlspecialchars(trim($_POST['maestro']))));
$maestro = isset($_POST["maestro"] ) ? $_POST["maestro"]: '';
//$periodos = strip_tags(htmlentities(htmlspecialchars(trim($_POST['periodos']))));
$periodos = isset($_POST["periodos"] ) ? $_POST["periodos"]: '';
//$maestro2 =  strip_tags(htmlentities(htmlspecialchars(trim($_GET['maestro']))));
$maestro2 = isset($_POST["maestro"] ) ? $_POST["maestro"]: '';
//$periodos2 = strip_tags(htmlentities(htmlspecialchars(trim($_GET['periodos']))));
$periodos2 = isset($_POST["periodos"] ) ? $_POST["periodos"]: '';

if ($opcion =='view' or $opcion2 =='view'){
$resultados = $mysqli->query("select  grado, grupo, nombre  from maestros Where nombre like '%$maestro%'  and admin is null order by orden ");
echo '<table width="100%" >
<tr ><td bgcolor="#333333">
        <form name="forma"  action = "view2.php" method="POST">
            <table >
                   	<tr><td><input type=hidden name=opcion value="teacher"></td></tr>
                   	<tr><td><input type=hidden name=admin value="'.$admin.'"></td></tr>
                   	<tr><td><input type=hidden name=username value="'.$username.'"></td></tr>
                   	<tr><td><input type=hidden name=password value="'.$password.'"></td></tr>
             		<tr >
                        <td width="112" align=center valign=middle bgcolor="#333333">
                            <img src="img/ATS_2018.png" style="margin-left:10px; margin-right:10px; width: 100px;">
                        </td>
                    <td> <font color="#FFFFFF">Grados </font>
                            <select name="maestro" id="maestro">
                    		<option value="--" '.$nada.'>--</option>';
                    while($s2  = $resultados->fetch_array(MYSQLI_ASSOC))
                    { echo'<option value='.$grado = $s2 ['grado'].''.$grupo = $s2 ['grupo'].'-'.$maestro1 = $s2 ['nombre'].'>'.$grado = $s2 ['grado'].''.$grupo = $s2 ['grupo'].' '.$maestro1 = $s2 ['nombre'].'</option> '; }
echo '
                        </select>
                        </td>
                        <td><font color="#FFFFFF">
                         Periodos  </FONT>
                            <select name="periodos" id="periodos">
                                <option value="1">1   </option>
                                <option value="1">2   </option>
                                <option value="1">3   </option>
                                <option value="1">4   </option>
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

if ($opcion =='teacher' or $opcion2=='teacher' ){
  if (!isset($periodos) or ($periodos == "--")){  $periodos = "4";  }
    echo '<table width="90%" border="0" ><tr><td width="50%">Teacher: '. $maestro.$maestro2. ' </td> <td width="50%"> Periodo: '.$periodos.$periodos2 . '</td></tr></table>';
    $select = "select matricula, nombre,activo, grado, grupo  from alumnos where '".$maestro.$maestro2."' like concat(grado,concat(grupo,'%') )  and  activo=1 order by Nombre";
    $resultados = $mysqli->query($select);
    echo ' <br><font  face="Times" size =2 >
    <table align= "center" border="1" cellspacing="1" cellpadding="1" style="font-family:arial; color:#FFFF33 ;font-size:12px; width=40%">
           <tr>
                    <td bgcolor = "#0000CC"> Alumnos </td>
           </tr>
                  ';
echo '<center>';
    $i=1;
      while($row = ($resultados->fetch_array(MYSQLI_NUM))){
         echo 	' <tr>
                <form  id="frmenvia'.$i.'" name="frmenvia'.$i.'"  action = "printKinderviewMaestros2.php" method="POST">
                <input type= hidden  name=passlog value='.$password.'>
                <input type= hidden  name=userlog value='.$username.'>
                <input type= hidden  name=username value='.$row[0].'>
                <input type= hidden  name=opcion value='.$opcion.'>
                <input type= hidden  name=opcion2 value='.$opcion2.'>
                <input type= hidden  name=maestro value = "'.$maestro.$maestro2.'">
                <input type= hidden  name=grado value = "'.$row[3].'">
                <input type= hidden  name=grupo value = "'.$row[4].'">
                <input type= hidden  name=periodos value="'.$periodos.$periodos2.'">
                <td colspan = 5 ><a href="#" onclick="document.getElementById(\'frmenvia'.$i.'\').submit();"> '.$row[1].'  </td>
              </form>
           </tr> ';
        $i++;
    }

echo' </table> ';
echo '<center>
        <form name="forma"  action = "view2.php" method="post">
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
