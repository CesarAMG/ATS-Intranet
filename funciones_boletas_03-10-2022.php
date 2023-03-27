<?php //ini_set("display_errors","1");
function promediar($a,$b,$c,$d){
$cuantos = 0;
if ($a){ $cuantos++;}
if ($b){ $cuantos++;}
if ($c){ $cuantos++;}
if ($d){ $cuantos++;}
if ($cuantos > 0) {
  return round( ($a+$b+$c+$d)/$cuantos);}else{ return 0;}
}
function sumar3($a,$b,$c,$d){
  $x =0;$y =0;$z =0;$w =0;
  if (is_numeric($a)){$x = $a;
    if (is_numeric($b)){$y = $b;
      if (is_numeric($c)){$z = $c;
        if (is_numeric($d)){$w = $d;
        }
      }
    }
  }
  return $x+$y+$z+$w;
}

  $cadena = $maestro;
  $subcadena = "-";
  // localicamos en que posici?n se haya la $subcadena
  $posicionsubcadena = strpos ($cadena, $subcadena);
  // eliminamos los caracteres desde $subcadena hacia la izq, y le sumamos 1 para borrar tambien el - en este caso
  $tech = substr ($cadena, ($posicionsubcadena+1));
  $select="SELECT nombre FROM maestros WHERE nombre like '%$tech%' and grado = '$grado' and grupo = '$grupo' and admin is null order by orden";
  $s = $mysqli->query($select);
  $s2 = $s->fetch_array(MYSQLI_ASSOC);
  $maestro1 = $s2['nombre'];
 // echo 'Nombre: '.$maestro1;


  function encabezado($alumno,$pa,$nivel,$t1,$t2,$t3,$t4,$t5,$maestro,$maestro1){
echo '
<html>
<head>
<title>.:: Report Cards ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;}
-->
</style>
<link href="css/boletas.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="882" height="200" border="0" cellpadding="0" cellspacing="10">
<tr><td colspan="2"> <center><img src="img/firmalogo18.jpg" width="75%;" style=" margin:0 auto"></center> </td></tr>
<tr>
    <td width="50%" valign="top"><table width="100%" border=0 cellpadding=0 cellspacing=0>
        <tr>
          <td width="312" align=center valign=middle style=" font-weight: bold;"><font face="arial" size=3>'.$nivel.' Pupil Progress Report<br></td>
        </tr>
   </table>
      <table> <br>
          <td width="50%" valign="top"><p class="arial12bold">Student: '.$alumno.'<br><br>
            Teacher: Ms. ',$maestro1,'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp School Year: '.$pa.'</p>
      </table>
    </td>

   <td width="50%" height="85">
        <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tr class="arial12normal">
          <td width="50%">'.$t1.'</td>
          <td width="50%">'.$t2.'</td>
        </tr>
        <tr class="arial12normal">
          <td>'.$t3.'</td>
          <td>'.$t4.'</td>
        </tr>
        <tr class="arial12normal">
          <td colspan=2>'.$t5.'</td>
        </tr>
        </table>
  </tr>';
}

function parche($c1,$c2,$c3,$c4){
echo '
<table width="882" height="600" border="0" cellspacing="10">
  <tr>
    <td width="50%" height="600" valign="top"><p class="arial12bold">
        <strong>Observations / Observaciones</strong></p>
        <p class="arial12bold"><strong>1.-</strong>'.$c1.'&nbsp;</p>
        <p class="arial12bold">&nbsp;</p>
        <p class="arial12bold"><strong>2.-</strong>'.$c2.'&nbsp;</p>
        <p class="arial12bold">&nbsp;</p>
        <p class="arial12bold">Parents Signature: __________________________ </p>
    </td>
    <td width="50%" valign="top"><p>&nbsp;</p>
        <p class="arial12bold"><strong>3.-</strong>'.$c3.'&nbsp;</p>
        <p>&nbsp;</p>
        <p class="arial12bold"><strong>3.-</strong>'.$c4.'&nbsp;</p>
    </td>
  </tr>
</table>
</td></tr></table>
</body>
</html>';
}

function titulo1($titulo,$nivel){
echo '<table width="882">
  <tr>';
  if($nivel=='Kinder'){
    echo '<td valign="top" width="40%">';
  }else{
    echo '<td valign="top" width="50%">';
  }
  echo '<table width="100%"  border="1" cellpadding="0" cellspacing="0" class="tabla">
      <tr class="arial12bold2 negro">
        <td height="25">'.$titulo.'<br></td>
        <td width="30" align="center" valign="middle">I</td>
        <td width="30" align="center" valign="middle">II</td>
        <td width="30" align="center" valign="middle">III</td>
        <td width="30" align="center" valign="middle">IV</td>
      </tr>';
}

function titulo2($titulo){
echo '
      <tr class="arial12bold2 negro">
        <td height="24" >'.$titulo.'</td>
        <td width="30" align="center" valign="middle" class="arial12bold">I</td>
        <td width="30" align="center" valign="middle" class="arial12bold">II</td>
        <td width="30" align="center" valign="middle" class="arial12bold">III</td>
        <td width="30" align="center" valign="middle" class="arial12bold">IV</td>
      </tr>';
}
function linea($t,$c1,$c2,$c3,$c4){
echo'
      <tr class="arial12normal">
        <td><p>'.$t.'<br></p></td>
        <td width="30" align="center" valign="middle">'.$c1.'&nbsp;</td>
        <td width="30" align="center" valign="middle">'.$c2.'&nbsp;</td>
        <td width="30" align="center" valign="middle">'.$c3.'&nbsp;</td>
        <td width="30" align="center" valign="middle">'.$c4.'&nbsp;</td>
      </tr>';
}
function titulo3($t){
echo'</table>
    <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="arial12normal">
      <tr class="arial12bold2 negro">
        <td height="24"><strong>'.$t.'</strong></td>
        <td width="35" align="center" valign="middle" class="arial12bold">I</td>
        <td width="35" align="center" valign="middle" class="arial12bold">II</td>
        <td width="35" align="center" valign="middle" class="arial12bold">III</td>
        <td width="35" align="center" valign="middle" class="arial12bold">IV</td>
        <td width="35" align="center" valign="middle" class="arial12bold">FINAL</td>
      </tr>';
}
function titulo4($t){
echo'
      <tr class="arial12bold2 negro">
        <td height="24"><strong>'.$t.'</strong></td>
        <td width="35" align="center" valign="middle" class="arial12bold">I</td>
        <td width="35" align="center" valign="middle" class="arial12bold">II</td>
        <td width="35" align="center" valign="middle" class="arial12bold">III</td>
        <td width="35" align="center" valign="middle" class="arial12bold">IV</td>
        <td width="35" align="center" valign="middle" class="arial12bold">FINAL</td>
      </tr>';
}
function linea2($t,$c1,$c2,$c3,$c4,$ct){
echo '
      <tr class="arial12normal">
        <td><p>'.$t.'<br></p></td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$c1.'&nbsp;</td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$c2.'&nbsp;</td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$c3.'&nbsp;</td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$c4.'&nbsp;</td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$ct.'</td>
      </tr>';
}
function comentarios($c1,$c2,$c3,$c4){
echo'
    </table></td>
  </tr>
</table>
<table width="882" height="600" border="0" cellspacing="10">
  <tr>
    <td width="50%" height="600" valign="top">
        <p class="arial12bold_"><strong>Observations / Observaciones</strong></p>
        <p class="arial12bold_"><strong>1.-</strong>'.$c1.'&nbsp;</p>
        <p>&nbsp;</p>
        <p class="arial12bold_"><strong>2.-</strong>'.$c2.'&nbsp;</p>
        <p>&nbsp;</p>
        <p class="arial12bold_">Parents Signature: __________________________ </p>
    </td>
    <td width="50%" valign="top">
        <p>&nbsp;</p>
        <p class="arial12bold_"><strong>3.-</strong>'.$c3.'&nbsp;</p>
        <p>&nbsp;</p>
        <p class="arial12bold_"><strong>4.-</strong>'.$c4.'&nbsp;</p>
    </td>
  </tr>
</table>
</body>
</html>';
};

#####################################################################################################################
//**************PLANTILLA PARA LA REPORT CARD DE TDD   --------------------------------- ****************************
#####################################################################################################################
function poner_TDD($username, $edad, $periodoactual,$maestro,$maestro1){
    include "../sys/php/global.php"; include "php/conexion.php"; include "funcion_mysqli.php";
    $alumno = $mysqli->query("select * from alumnos where matricula = '".$username."'");
    //Calificaciones
    $calif1 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 1 order by materia");
    $calif2 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 2 order by materia");
    $calif3 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 3 order by materia");
    $calif4 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 4 order by materia");
    //Asistencias
    $asist1 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo = 1");
    $asist2 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo = 2");
    $asist3 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo = 3");
    $asist4 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo = 4");
    //Comentarios
    $comen1 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 1");
    $comen2 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 2");
    $comen3 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 3");
    $comen4 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 4");

    if (($comen1->num_rows) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysqli_result ($comen1,0,'comentario');}
    if (($comen2->num_rows) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysqli_result ($comen2,0,'comentario');}
    if (($comen3->num_rows) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysqli_result ($comen3,0,'comentario');}
    if (($comen4->num_rows) == 0) {$comenta4 = '&nbsp;';}else{$comenta4 = mysqli_result ($comen4,0,'comentario');}

    if (($asist1->num_rows) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysqli_result ($asist1,0,'presente');}
    if (($asist2->num_rows) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysqli_result ($asist2,0,'presente');}
    if (($asist3->num_rows) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysqli_result ($asist3,0,'presente');}
    if (($asist4->num_rows) == 0) {$presente4 = '&nbsp;';}else{$presente4 = mysqli_result ($asist4,0,'presente');}

    if (($asist1->num_rows) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysqli_result ($asist1,0,'ausente');}
    if (($asist2->num_rows) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysqli_result ($asist2,0,'ausente');}
    if (($asist3->num_rows) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysqli_result ($asist3,0,'ausente');}
    if (($asist4->num_rows) == 0) {$ausente4 = '&nbsp;';}else{$ausente4 = mysqli_result ($asist4,0,'ausente');}

    if (($asist1->num_rows) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysqli_result ($asist1,0,'retardo');}
    if (($asist2->num_rows) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysqli_result ($asist2,0,'retardo');}
    if (($asist3->num_rows) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysqli_result ($asist3,0,'retardo');}
    if (($asist4->num_rows) == 0) {$retardo4 = '&nbsp;';}else{$retardo4 = mysqli_result ($asist4,0,'retardo');}

    include "_tdd.php";
    encabezado(mysqli_result ($alumno,0,'nombre'),$periodoactual,'Toddlers',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5],$maestro,$maestro1);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3,$comenta4);}else{
        titulo1($t0[1],'Toddlers');
        $a=1;
        for($i=0;$i<=5;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=6;$i<=9;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[3]);
        for($i=10;$i<=11;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        titulo2($t0[4]);
        for($i=12;$i<=17;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[8]);
        for($i=18;$i<=24;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo3('<em> ASISTENCIA </em>');
        linea2('<em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,$presente4,sumar3($presente1,$presente2,$presente3,$presente4));
        linea2('<em>Ausencias</em>',$ausente1,$ausente2,$ausente3,$ausente4,sumar3($ausente1,$ausente2,$ausente3,$ausente4));
        //linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,sumar3($retardo1,$retardo2,$retardo3));
        comentarios($comenta1,$comenta2,$comenta3,$comenta4);
    }
}
#####################################################################################################################
//**************PLANTILLA PARA LA REPORT CARD DE PK1   --------------------------------- ****************************
#####################################################################################################################
function poner_pk1($username, $edad, $periodoactual,$maestro,$maestro1){
    include "../sys/php/global.php"; include "php/conexion.php"; include "funcion_mysqli.php";
    $alumno = $mysqli->query("select * from alumnos where matricula = '".$username."'");
    //Calificaciones
    $calif1 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 1 order by materia");
    $calif2 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 2 order by materia");
    $calif3 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 3 order by materia");
    $calif4 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 4 order by materia");
    //Asistencias
    $asist1 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo = 1");
    $asist2 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo = 2");
    $asist3 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo = 3");
    $asist4 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo = 4");
    //Comentarios
    $comen1 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 1");
    $comen2 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 2");
    $comen3 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 3");
    $comen4 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 4");

    if (($comen1->num_rows) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysqli_result ($comen1,0,'comentario');}
    if (($comen2->num_rows) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysqli_result ($comen2,0,'comentario');}
    if (($comen3->num_rows) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysqli_result ($comen3,0,'comentario');}
    if (($comen4->num_rows) == 0) {$comenta4 = '&nbsp;';}else{$comenta4 = mysqli_result ($comen4,0,'comentario');}

    if (($asist1->num_rows) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysqli_result ($asist1,0,'presente');}
    if (($asist2->num_rows) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysqli_result ($asist2,0,'presente');}
    if (($asist3->num_rows) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysqli_result ($asist3,0,'presente');}
    if (($asist4->num_rows) == 0) {$presente4 = '&nbsp;';}else{$presente4 = mysqli_result ($asist4,0,'presente');}

    if (($asist1->num_rows) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysqli_result ($asist1,0,'ausente');}
    if (($asist2->num_rows) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysqli_result ($asist2,0,'ausente');}
    if (($asist3->num_rows) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysqli_result ($asist3,0,'ausente');}
    if (($asist4->num_rows) == 0) {$ausente4 = '&nbsp;';}else{$ausente4 = mysqli_result ($asist4,0,'ausente');}

    if (($asist1->num_rows) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysqli_result ($asist1,0,'retardo');}
    if (($asist2->num_rows) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysqli_result ($asist2,0,'retardo');}
    if (($asist3->num_rows) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysqli_result ($asist3,0,'retardo');}
    if (($asist4->num_rows) == 0) {$retardo4 = '&nbsp;';}else{$retardo4 = mysqli_result ($asist4,0,'retardo');}

    include "_pk1.php";
    encabezado(mysqli_result ($alumno,0,'nombre'),$periodoactual,'Pre-Kinder 1',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5],$maestro,$maestro1);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3,$comenta4);}else{
        titulo1($t0[0],'Pre-Kinder 1');
        $a=1;
        for($i=0;$i<=6;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[1]);
        for($i=7;$i<=13;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=14;$i<=15;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        titulo2($t0[3]);
        for($i=16;$i<=22;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[4]);
        for($i=23;$i<=28;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo3('ATTENDANCE / <em> ASISTENCIA </em>');
        linea2('Days present / <em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,$presente4,sumar3($presente1,$presente2,$presente3,$presente4));
        linea2('Days absent / <em>Ausencias</em>',$ausente1,$ausente2,$ausente3,$ausente4,sumar3($ausente1,$ausente2,$ausente3,$ausente4));
        linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,$retardo4,sumar3($retardo1,$retardo2,$retardo3,$retardo4));
        comentarios($comenta1,$comenta2,$comenta3,$comenta4);
    }
}
######################################################################################################################
### ----------------       PLANTILLA PARA LA REPORT CARD DE PK-2            ------------------------------------#####
#####################################################################################################################
function poner_pk2($username, $edad, $periodoactual,$maestro,$maestro1){
    include "../sys/php/global.php"; include "php/conexion.php"; include "funcion_mysqli.php";

    $alumno = $mysqli->query("select * from alumnos where matricula = '".$username."'");

    $calif1 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo=1 order by materia");
    $calif2 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo=2 order by materia");
    $calif3 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo=3 order by materia");
    $calif4 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo=4 order by materia");

    $asist1 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo=1 ");
    $asist2 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo=2 ");
    $asist3 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo=3 ");
    $asist4 = $mysqli->query("select * from asistencia where matricula = '".$username."' and periodo=4 ");

    $comen1 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 1");
    $comen2 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 2");
    $comen3 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 3");
    $comen4 = $mysqli->query("select * from comentarios where matricula = '".$username."' and periodo = 4");

    if (($comen1->num_rows) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysqli_result ($comen1,0,'comentario');}
    if (($comen2->num_rows) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysqli_result ($comen2,0,'comentario');}
    if (($comen3->num_rows) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysqli_result ($comen3,0,'comentario');}
    if (($comen4->num_rows) == 0) {$comenta4 = '&nbsp;';}else{$comenta4 = mysqli_result ($comen4,0,'comentario');}

    if (($asist1->num_rows) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysqli_result ($asist1,0,'presente');}
    if (($asist2->num_rows) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysqli_result ($asist2,0,'presente');}
    if (($asist3->num_rows) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysqli_result ($asist3,0,'presente');}
    if (($asist4->num_rows) == 0) {$presente4 = '&nbsp;';}else{$presente4 = mysqli_result ($asist4,0,'presente');}

    if (($asist1->num_rows) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysqli_result ($asist1,0,'ausente');}
    if (($asist2->num_rows) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysqli_result ($asist2,0,'ausente');}
    if (($asist3->num_rows) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysqli_result ($asist3,0,'ausente');}
    if (($asist4->num_rows) == 0) {$ausente4 = '&nbsp;';}else{$ausente4 = mysqli_result ($asist4,0,'ausente');}

    if (($asist1->num_rows) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysqli_result ($asist1,0,'retardo');}
    if (($asist2->num_rows) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysqli_result ($asist2,0,'retardo');}
    if (($asist3->num_rows) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysqli_result ($asist3,0,'retardo');}
    if (($asist4->num_rows) == 0) {$retardo4 = '&nbsp;';}else{$retardo4 = mysqli_result ($asist4,0,'retardo');}

    include "_pk2.php";
    encabezado(mysqli_result ($alumno,0,'nombre'),$periodoactual,'Pre-Kinder 2',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5],$maestro,$maestro1);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3,$comenta4);}else{
        titulo1($t0[1],'Pre-Kinder 2');
        $a=1;
        for($i=0;$i<=7;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=8;$i<=15;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[3]);
        for($i=16;$i<=19;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo3('ATTENDANCE / <em> ASISTENCIA </em>');
        linea2('Days present / <em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,$presente4,sumar3($presente1,$presente2,$presente3,$presente4));
        linea2('Days absent / <em>Ausencias</em>',$ausente1,$ausente2,$ausente3,$ausente4,sumar3($ausente1,$ausente2,$ausente3,$ausente4));
        linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,$retardo4,sumar3($retardo1,$retardo2,$retardo3,$retardo4));
        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        titulo2($t0[4]);
        for($i=20;$i<=26;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[5]);
        for($i=27;$i<=32;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[6]);
        for($i=33;$i<=36;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        comentarios($comenta1,$comenta2,$comenta3,$comenta4);
    }
}
######################################################################################################################
### ----------------       PLANTILLA PARA LA REPORT CARD DE KINDER K        ------------------------------------#####
#####################################################################################################################

function poner_k($username, $edad, $periodoactual,$maestro,$maestro1){
    include "../sys/php/global.php"; include "php/conexion.php"; include "funcion_mysqli.php";

    $alumno = $mysqli->query("select * from alumnos where matricula = '".$username."'");
    $calif1 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 1 order by materia");
    $calif2 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 2 order by materia");
    $calif3 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 3 order by materia");
    $calif4 = $mysqli->query("select * from calificaciones where matricula = '".$username."' and periodo = 4 order by materia");

    $asist1 = $mysqli->query("select * from asistencia where matricula = '".$username."'and periodo = 1");
    $asist2 = $mysqli->query("select * from asistencia where matricula = '".$username."'and periodo = 2");
    $asist3 = $mysqli->query("select * from asistencia where matricula = '".$username."'and periodo = 3");
    $asist4 = $mysqli->query("select * from asistencia where matricula = '".$username."'and periodo = 4");

    $comen1 = $mysqli->query("select * from comentarios where matricula = '".$username."'and periodo = 1");
    $comen2 = $mysqli->query("select * from comentarios where matricula = '".$username."'and periodo = 2");
    $comen3 = $mysqli->query("select * from comentarios where matricula = '".$username."'and periodo = 3");
    $comen4 = $mysqli->query("select * from comentarios where matricula = '".$username."'and periodo = 4");

    if (($comen1->num_rows) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysqli_result ($comen1,0,'comentario');}
    if (($comen2->num_rows) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysqli_result ($comen2,0,'comentario');}
    if (($comen3->num_rows) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysqli_result ($comen3,0,'comentario');}
    if (($comen4->num_rows) == 0) {$comenta4 = '&nbsp;';}else{$comenta4 = mysqli_result ($comen4,0,'comentario');}

    if (($asist1->num_rows) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysqli_result ($asist1,0,'presente');}
    if (($asist2->num_rows) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysqli_result ($asist2,0,'presente');}
    if (($asist3->num_rows) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysqli_result ($asist3,0,'presente');}
    if (($asist4->num_rows) == 0) {$presente4 = '&nbsp;';}else{$presente4 = mysqli_result ($asist4,0,'presente');}

    if (($asist1->num_rows) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysqli_result ($asist1,0,'ausente');}
    if (($asist2->num_rows) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysqli_result ($asist2,0,'ausente');}
    if (($asist3->num_rows) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysqli_result ($asist3,0,'ausente');}
    if (($asist4->num_rows) == 0) {$ausente4 = '&nbsp;';}else{$ausente4 = mysqli_result ($asist4,0,'ausente');}

    if (($asist1->num_rows) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysqli_result ($asist1,0,'retardo');}
    if (($asist2->num_rows) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysqli_result ($asist2,0,'retardo');}
    if (($asist3->num_rows) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysqli_result ($asist3,0,'retardo');}
    if (($asist4->num_rows) == 0) {$retardo4 = '&nbsp;';}else{$retardo4 = mysqli_result ($asist4,0,'retardo');}
    include "_k.php";
    encabezado(mysqli_result ($alumno,0,'nombre'),$periodoactual,'Kinder',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5],$maestro,$maestro1);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3,$comenta4);}else{
        titulo1($t0[1],'Kinder');
        $a=1;
        for($i=0;$i<=6;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=7;$i<=10;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}

        titulo3('ATTENDANCE /<em> ASISTENCIA </em>');
        linea2('Days present /<em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,$presente4,sumar3($presente1,$presente2,$presente3,$presente4));
        linea2('Days absent / <em>Ausencias</em>',$ausente1,$ausente2,$ausente3,$ausente4,sumar3($ausente1,$ausente2,$ausente3,$ausente4));
        linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,$retardo4,sumar3($retardo1,$retardo2,$retardo3,$retardo4));

        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        titulo2($t0[3]);
        for($i=11;$i<=19;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}

        titulo2($t0[4]);
        for($i=20;$i<=24;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'),mysqli_result ($calif4,$i,'valor'));$a++;}
        //titulo2($t0[5]);
        //for($i=25;$i<=27;$i++){;linea($t1[$a],mysqli_result ($calif1,$i,'valor'),mysqli_result ($calif2,$i,'valor'),mysqli_result ($calif3,$i,'valor'));$a++;}

        /*titulo3('ATTENDANCE /<em> ASISTENCIA </em>');
        linea2('Days present /<em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,sumar3($presente1,$presente2,$presente3));
        linea2('Days absent / <em>Ausencias</em>',$ausente1,$ausente2,$ausente3,sumar3($ausente1,$ausente2,$ausente3));
        linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,sumar3($retardo1,$retardo2,$retardo3));*/
        comentarios($comenta1,$comenta2,$comenta3,$comenta4);

    }
}
?>
