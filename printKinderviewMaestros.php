<script language="JavaScript">
function doPrint(){
document.all.item("noprint").style.visibility='hidden'
window.print()
document.all.item("noprint").style.visibility='visible'
}
</script>

<?php session_start(); include "../sys/php/global.php"; include"php/conexion.php"; include "funciones_boletas.php"; //ini_set("display_errors","1");      //  include "funcion_mysqli.php";
$query ="SELECT * From configuracion where Id='3' limit 1";
$rs = $mysqli->query($query);
$rw = $rs->fetch_array(MYSQLI_ASSOC);
$per='1';
$ces=$rw['cicloescolar'];
$bol=$rw['boletavisible'];
//$bol=1;
if($bol>0){
    if (isset($_POST['password'])){ $password = strip_tags(htmlentities(htmlspecialchars(trim($_POST["password"])))); }else{ $password=''; }
    if (isset($_POST['imprimir'])){ $imprimir = strip_tags(htmlentities(htmlspecialchars(trim($_POST["imprimir"])))); }else{ $imprimir=''; }
  $valido = "";
  if (isset($_POST['passlog'])){ $passlog = strip_tags(htmlentities(htmlspecialchars(trim($_POST["passlog"])))); }else{ $passlog=''; }
  if (isset($_POST['userlog'])){ $userlog = strip_tags(htmlentities(htmlspecialchars(trim($_POST["userlog"])))); }else{ $userlog=''; }
  $username =  $_SESSION['cuenta'];

  if (isset($_POST['opcion'])){ $opcion = strip_tags(htmlentities(htmlspecialchars(trim($_POST["opcion"])))); }else{ $opcion=''; }
  if (isset($_POST['maestro'])){ $maestro = strip_tags(htmlentities(htmlspecialchars(trim($_POST["maestro"]))));  }else{ $maestro=''; }
  if (isset($_POST['periodos'])){ $periodos = strip_tags(htmlentities(htmlspecialchars(trim($_POST["periodos"]))));  }else{ $periodos=''; }
  $pa=$rw['cicloescolar'];
  if ($username == "visitor"){ $username = 79586; }

  $sql= "select * from alumnos where matricula like '%".$username."%' and activo = 1";
  $resultado = $mysqli->query($sql);
  $rw2 = $resultado->fetch_array(MYSQLI_ASSOC);

  if (($resultado->num_rows) > 0){
     //$grado = mysqli_result($resultado,0,'grado');
     $grado = $rw2['grado'];
     $grupo = $rw2['grupo'];
     $boleta = $rw2['boleta'];
     //$grupo = mysqli_result($resultado,0,'grupo');
     //$boleta = mysqli_result($resultado,0,'boleta');
     if ($boleta == 1){
        if($maestro==''){
            $sql2= "select * from maestros where grado='".$grado."' and grupo = '".$grupo."'";
                $resultado2 = $mysqli->query($sql2);
                //$maestro=mysqli_result($resultado2,0,'nombre');
                $maestro = $resultado2->fetch_assoc()['nombre'];
            }
        $cadena = $maestro;
  $subcadena = "-";
  // localicamos en que posici?n se haya la $subcadena
  $posicionsubcadena = strpos ($cadena, $subcadena);
  // eliminamos los caracteres desde $subcadena hacia la izq, y le sumamos 1 para borrar tambien el - en este caso
  $tech = substr ($cadena, ($posicionsubcadena+1));
  $grado;
  $s = $mysqli->query("SELECT nombre FROM maestros WHERE nombre like '%$tech%' and grado = '$grado' and grupo = '$grupo' and admin is null order by orden");
  $s2 = $s->fetch_array(MYSQLI_ASSOC);
  $maestro1 = $s2['nombre'];
  $edad='';
        switch ($grado){
            case 'TDD':poner_TDD($username, $edad,$pa,$maestro,$maestro1); BREAK;
            case 'PK1':poner_PK1($username, $edad,$pa,$maestro,$maestro1); BREAK;
            case 'PK2':poner_PK2($username, $edad,$pa,$maestro,$maestro1); BREAK;
            case 'K':  poner_K($username, $edad,$pa,$maestro,$maestro1); BREAK;
            case 'PF': poner_PF($username, $edad,$pa,$maestro,$maestro1); BREAK;
        }
     }else{
        echo "<center><br /><br /><br /><br /><br />
                        Favor de ponerse en contacto con el Departamento de Cobranza, Gracias!
                <br /><br /><br /><br /><br /><br /></center>";
     }
  }
  echo '<html><center>';
  if (isset($_POST['boton'])){ $boton = strip_tags(htmlentities(htmlspecialchars(trim($_POST['boton'])))); }else{ $boton=''; }
  if ($boton != "no"){
  echo '
    <table border=0 bgcolor=black cellspacing=1 cellpadding=5 width=500 id="noprint">
          <tr>
              <br>     <br>
                  <td bgcolor=white align=center>
                          <form action="$PHP_SELF" method=POST name="Forma_boton">

                          <input type=hidden name="opcion" value="$opcion">
                          <input type=hidden name="username" value="$username">
                          <input type=hidden name="password" value="$password">
                          <input type=hidden name="boton" value="no">
                          <input type=hidden name="imprimir" value="si">
                          <input type=button value="Print / Imprimir" onclick="doPrint()">
                          </form>
                          <font face=arial size=2 color=black><a href="http://www.ats.edu.mx">Home web page </a>&nbsp;| </font>
  ';

      if( $opcion == 'teacher' ) {
echo'                          <form action="$PHP_SELF" method=POST name="Forma_boton">

                          <input type=hidden name="opcion" value="$opcion">
                          <input type=hidden name="username" value="$username">
                          <input type=hidden name="password" value="$password">
                          <input type=hidden name="boton" value="no">
                          <input type=hidden name="imprimir" value="si">';
         echo ' <font face=arial size=2 color=black> <a href="view.php?password='.$passlog.'&username='.$userlog.'&opcion='.$opcion.'&maestro='.$maestro.'&periodos='.$periodos.'">Check List of Report Card</a> ';
      }

  echo '     </td>
          </tr>
    </table><br><br>';
  }
  if ($imprimir == "si"){
      echo '<script>window.print();</script>';
  }
}else{
  echo "Boletas fuera de linea";
}
?>