<script language="JavaScript">
function doPrint(){
document.all.item("noprint").style.visibility='hidden'
window.print()
document.all.item("noprint").style.visibility='visible'
}
</script>
<?php include "../sys/php/global.php"; include "php/conexion.php";
include "funciones_boletas.php";
$query ="SELECT * From configuracion where Id='3' limit 1";
$rs = $mysqli->query($query);
$rw = $rs->fetch_array(MYSQLI_ASSOC);
$per=$rw['periodocaptura'];
$ces=$rw['cicloescolar'];
$bol=$rw['boletavisible'];
/*if($bol>0){    */
  $password = strip_tags(htmlentities(htmlspecialchars(trim($_POST["password"]))));
  $imprimir = strip_tags(htmlentities(htmlspecialchars(trim($_POST["imprimir"]))));
  $valido = "";
  $passlog = strip_tags(htmlentities(htmlspecialchars(trim($_POST["passlog"]))));
  $userlog = strip_tags(htmlentities(htmlspecialchars(trim($_POST["userlog"]))));
  $username = strip_tags(htmlentities(htmlspecialchars(trim($_POST["username"]))));
  $opcion = strip_tags(htmlentities(htmlspecialchars(trim($_POST["opcion"]))));
  $opcion2 = strip_tags(htmlentities(htmlspecialchars(trim($_POST["opcion2"]))));
  $maestro = strip_tags(htmlentities(htmlspecialchars(trim($_POST["maestro"]))));
  $grado = strip_tags(htmlentities(htmlspecialchars(trim($_POST["grado"]))));
  $grupo = strip_tags(htmlentities(htmlspecialchars(trim($_POST["grupo"]))));
  $periodos = strip_tags(htmlentities(htmlspecialchars(trim($_POST["periodos"]))));
  $pa=$rw['cicloescolar'];

  $cadena = $maestro;
  $subcadena = "-";
  // localicamos en que posici?n se haya la $subcadena
  $posicionsubcadena = strpos ($cadena, $subcadena);
  // eliminamos los caracteres desde $subcadena hacia la izq, y le sumamos 1 para borrar tambien el - en este caso
  $tech = substr ($cadena, ($posicionsubcadena+1));

  $s = $mysqli->query("SELECT nombre FROM maestros WHERE nombre like '%$tech%' and grado = '$grado' and grupo = '$grupo' and admin is null order by orden");
  $s2 = $s->fetch_array(MYSQLI_ASSOC);
  $maestro1 = $s2['nombre'];

  $sql= "select * from alumnos where matricula like '%".$username."%' and activo = 1";
  $resultado = $mysqli->query($sql);
  if (($resultado->num_rows) > 0){
     //$grado = mysql_result($resultado,0,'grado');
     $grado = $resultado->fetch_assoc()['grado'];
     switch ($grado){
     case 'TDD':poner_TDD($username, $edad,$pa,$maestro,$maestro1); BREAK;
     case 'PK1':poner_PK1($username, $edad,$pa,$maestro,$maestro1); BREAK;
     case 'PK2':poner_PK2($username, $edad,$pa,$maestro,$maestro1); BREAK;
     case 'K'  :poner_K($username, $edad,$pa,$maestro,$maestro1); BREAK;
     case 'PF' :poner_PF($username, $edad,$pa,$maestro,$maestro1); BREAK;
     }
  }
  echo '<html><center>';
  $boton = strip_tags(htmlentities(htmlspecialchars(trim($_POST['boton']))));
  if ($boton != "no"){
  echo '
    <table border=0 bgcolor=black cellspacing=1 cellpadding=5 width=500 id="noprint">
          <tr>
              <br>     <br>
                  <td bgcolor=white align=center>
                          <form action="$PHP_SELF" method=POST name="Forma_boton">

                          <input type=hidden name="opcion" value="'.$opcion.'">
                          <input type=hidden name="username" value="$username">
                          <input type=hidden name="password" value="$password">
                          <input type=hidden name="boton" value="no">
                          <input type=hidden name="imprimir" value="si">
                          <input type=button value="Print / Imprimir" onclick="doPrint()">
                          </form>
                          <font face=arial size=2 color=black><a href="https://www.ats.edu.mx">Home web page </a>&nbsp;| </font>
  ';

      if($opcion == 'teacher' or $opcion2 == 'teacher') {
echo'                   <form action="$PHP_SELF" method=POST name="Forma_boton">
                          <input type=hidden name="opcion" value="'.$opcion.'">
                          <input type=hidden name="opcion2" value="'.$opcion2.'">
                          <input type=hidden name="username" value="$username">
                          <input type=hidden name="password" value="$password">
                          <input type=hidden name="boton" value="no">
                          <input type=hidden name="imprimir" value="si">';
         echo ' <font face=arial size=2 color=black> <a href="view2.php?password='.$passlog.'&username='.$userlog.'&opcion='.$opcion.$opcion2.'&maestro='.$maestro.'&periodos='.$periodos.$periodos2.'">Check List of Report Card</a> ';
      }

  echo '     </td>
          </tr>
    </table><br><br>';
  }
  if ($imprimir == "si"){
      echo '<script>window.print();</script>';
  }
/*}else{
  echo "Boletas fuera de linea";
}*/
?>
