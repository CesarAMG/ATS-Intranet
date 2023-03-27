<?
function promediar($a,$b,$c){
$cuantos = 0;
if ($a){ $cuantos++;}
if ($b){ $cuantos++;}
if ($c){ $cuantos++; }
if ($cuantos > 0) {
  return round( ($a+$b+$c)/$cuantos);}else{ return 0;}
}
function sumar3($a,$b,$c){
  $x =0;$y =0;$z =0;
  if (is_numeric($a)){$x = $a;
    if (is_numeric($b)){$y = $b;
      if (is_numeric($c)){$z = $c;
      }
    }
  }
  return $x+$y+$z;
}
function encabezado($alumno,$pa,$nivel,$t1,$t2,$t3,$t4,$t5){
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
<table width="882" height="698" border="0" cellpadding="0" cellspacing="10">
<tr>
    <td width="50%" height="85" valign="top"><p class="arial12bold">Name: '.$alumno.'<br>&nbsp;</p>
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
    </td>
    <td width="50%" valign="top"><table width="100%" border=0 cellpadding=0 cellspacing=0>
        <tr>
          <td width="112" align=center valign=middle> <img src="img/logo_boletas.gif" style="margin-left:10px; margin-right:10px"> </td>
          <td width="312" align=center valign=middle> <font face="arial" size=4><B>American School of Tampico</B></font><br>
              <font face="arial" size=3>'.$nivel.' Pupil Progress Report<br>
            '.$pa.'</font></td>
        </tr>
   </table></td>
  </tr>';
}

function parche($c1,$c2,$c3){
echo '
<table width="882" height="600" border="0" cellspacing="10">
  <tr>
    <td width="50%" height="600" valign="top"><p class="arial12bold">
        <strong>Observations / Observaciones</strong></p>
        <p class="arial12bold"><strong>1.-</strong>'.$c1.'&nbsp;</p>
        <p class="arial12bold">&nbsp;</p>
        <p class="arial12bold"><strong>2.-</strong>'.$c2.'&nbsp;</p>
    </td>
    <td width="50%" valign="top"><p>&nbsp;</p>
       <p class="arial12bold"><strong>3.-</strong>'.$c3.'&nbsp;</p>
        <p>&nbsp;</p>
        <p class="arial12bold">Parents Signature: __________________________ </p>
    </td>
  </tr>
</table>
</td></tr></table>
</body>
</html>';
}
function titulo1($titulo){
echo '
  <tr>
    <td valign="top">
    <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="tabla">
      <tr class="arial12bold">
        <td height="25">'.$titulo.'<br></td>
        <td width="30" align="center" valign="middle">1</td>
        <td width="30" align="center" valign="middle">2</td>
        <td width="30" align="center" valign="middle">3</td>
      </tr>';
}
function titulo2($titulo){
echo '
      <tr class="arial12bold">
        <td height="24" colspan="4">'.$titulo.'</td>
      </tr>';
}
function linea($t,$c1,$c2,$c3){
echo'
      <tr class="arial12normal">
        <td><p>'.$t.'<br></p></td>
        <td width="30" align="center" valign="middle">'.$c1.'&nbsp;</td>
        <td width="30" align="center" valign="middle">'.$c2.'&nbsp;</td>
        <td width="30" align="center" valign="middle">'.$c3.'&nbsp;</td>
      </tr>';
}
function titulo3($t){
echo'</table>
    <br>
    <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="arial12normal">
      <tr class="arial12bold">
        <td height="24"><strong>'.$t.'</strong></td>
        <td width="35" align="center" valign="middle" class="arial12bold">1</td>
        <td width="35" align="center" valign="middle" class="arial12bold">2</td>
        <td width="35" align="center" valign="middle" class="arial12bold">3</td>
        <td width="35" align="center" valign="middle" class="arial12bold">FINAL</td>
      </tr>';
}
function titulo4($t){
echo'
      <tr class="arial12bold">
        <td height="24"><strong>'.$t.'</strong></td>
        <td width="35" align="center" valign="middle" class="arial12bold">1</td>
        <td width="35" align="center" valign="middle" class="arial12bold">2</td>
        <td width="35" align="center" valign="middle" class="arial12bold">3</td>
        <td width="35" align="center" valign="middle" class="arial12bold">FINAL</td>
      </tr>';
}
function linea2($t,$c1,$c2,$c3,$ct){
echo '
      <tr class="arial12normal">
        <td><p>'.$t.'<br></p></td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$c1.'&nbsp;</td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$c2.'&nbsp;</td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$c3.'&nbsp;</td>
        <td width="35" align="center" valign="middle" class="arial12normal">'.$ct.'</td>
      </tr>';
}
function comentarios($c1,$c2,$c3){
echo'
    </table></td>
  </tr>
</table>
<table width="882" height="600" border="0" cellspacing="10">
  <tr>
    <td width="50%" height="600" valign="top">
        <p class="arial12bold"><strong>Observations / Observaciones</strong></p>
        <p class="arial12bold"><strong>1.-</strong>'.$c1.'&nbsp;</p>
        <p>&nbsp;</p>
        <p class="arial12bold"><strong>2.-</strong>'.$c2.'&nbsp;</p>
    </td>
    <td width="50%" valign="top">
        <p>&nbsp;</p>
        <p class="arial12bold"><strong>3.-</strong>'.$c3.'&nbsp;</p>
        <p>&nbsp;</p>
        <p class="arial12bold">Parents Signature: __________________________ </p>
    </td>
  </tr>
</table>
</body>
</html>';
};
#####################################################################################################################
//**************PLANTILLA PARA LA REPORT CARD DE TDD   --------------------------------- ****************************
#####################################################################################################################
function poner_TDD($username, $edad, $periodoactual){
    $conexion = conecta("atsedu_boletaskinder");
    $alumno = mysql_query ("select * from alumnos where matricula = '".$username."'",$conexion);
    //Calificaciones
	$calif1 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 1 order by materia",$conexion);
    $calif2 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 2 order by materia",$conexion);
    $calif3 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 3 order by materia",$conexion);
    //Asistencias
	$asist1 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo = 1",$conexion);
    $asist2 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo = 2",$conexion);
    $asist3 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo = 3",$conexion);
    //Comentarios
    $comen1 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 1",$conexion);
    $comen2 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 2",$conexion);
    $comen3 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 3",$conexion);

    if (mysql_num_rows($comen1) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysql_result ($comen1,0,'comentario');}
    if (mysql_num_rows($comen2) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysql_result ($comen2,0,'comentario');}
    if (mysql_num_rows($comen3) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysql_result ($comen3,0,'comentario');}

    if (mysql_num_rows($asist1) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysql_result ($asist1,0,'presente');}
    if (mysql_num_rows($asist2) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysql_result ($asist2,0,'presente');}
    if (mysql_num_rows($asist3) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysql_result ($asist3,0,'presente');}

    if (mysql_num_rows($asist1) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysql_result ($asist1,0,'ausente');}
    if (mysql_num_rows($asist2) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysql_result ($asist2,0,'ausente');}
    if (mysql_num_rows($asist3) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysql_result ($asist3,0,'ausente');}

    if (mysql_num_rows($asist1) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysql_result ($asist1,0,'retardo');}
    if (mysql_num_rows($asist2) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysql_result ($asist2,0,'retardo');}
    if (mysql_num_rows($asist3) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysql_result ($asist3,0,'retardo');}

    include "_tdd.php";
    encabezado(mysql_result ($alumno,0,'nombre'),$periodoactual,'Toddlers',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5]);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3);}else{
        titulo1($t0[1]);
        $a=1;
        for($i=0;$i<=5;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=6;$i<=9;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[3]);
        for($i=10;$i<=11;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        titulo2($t0[4]);
        for($i=12;$i<=17;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[5]);
        for($i=18;$i<=24;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo3('<em> ASISTENCIA </em>');
        linea2('<em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,sumar3($presente1,$presente2,$presente3));
        linea2('<em>Ausencias</em>',$ausente1,$ausente2,$ausente3,sumar3($ausente1,$ausente2,$ausente3));
        //linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,sumar3($retardo1,$retardo2,$retardo3));
        comentarios($comenta1,$comenta2,$comenta3);
    }
}
#####################################################################################################################
//**************PLANTILLA PARA LA REPORT CARD DE PK1   --------------------------------- ****************************
#####################################################################################################################
function poner_pk1($username, $edad, $periodoactual){
    $conexion = conecta("atsedu_boletaskinder");
    $alumno = mysql_query ("select * from alumnos where matricula = '".$username."'",$conexion);
    //Calificaciones
	$calif1 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 1 order by materia",$conexion);
    $calif2 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 2 order by materia",$conexion);
    $calif3 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 3 order by materia",$conexion);
    //Asistencias
	$asist1 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo = 1",$conexion);
    $asist2 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo = 2",$conexion);
    $asist3 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo = 3",$conexion);
    //Comentarios
    $comen1 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 1",$conexion);
    $comen2 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 2",$conexion);
    $comen3 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 3",$conexion);

    if (mysql_num_rows($comen1) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysql_result ($comen1,0,'comentario');}
    if (mysql_num_rows($comen2) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysql_result ($comen2,0,'comentario');}
    if (mysql_num_rows($comen3) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysql_result ($comen3,0,'comentario');}

    if (mysql_num_rows($asist1) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysql_result ($asist1,0,'presente');}
    if (mysql_num_rows($asist2) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysql_result ($asist2,0,'presente');}
    if (mysql_num_rows($asist3) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysql_result ($asist3,0,'presente');}

    if (mysql_num_rows($asist1) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysql_result ($asist1,0,'ausente');}
    if (mysql_num_rows($asist2) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysql_result ($asist2,0,'ausente');}
    if (mysql_num_rows($asist3) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysql_result ($asist3,0,'ausente');}

    if (mysql_num_rows($asist1) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysql_result ($asist1,0,'retardo');}
    if (mysql_num_rows($asist2) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysql_result ($asist2,0,'retardo');}
    if (mysql_num_rows($asist3) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysql_result ($asist3,0,'retardo');}

    include "_pk1.php";
    encabezado(mysql_result ($alumno,0,'nombre'),$periodoactual,'Pre-Kinder 1',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5]);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3);}else{
        titulo1($t0[1]);
        $a=1;
        for($i=0;$i<=14;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=15;$i<=24;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        for($i=25;$i<=28;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[3]);
        for($i=29;$i<=39;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[4]);
        for($i=40;$i<=45;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo3('ATTENDANCE / <em> ASISTENCIA </em>');
        linea2('Days present / <em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,sumar3($presente1,$presente2,$presente3));
        linea2('Days absent / <em>Ausencias</em>',$ausente1,$ausente2,$ausente3,sumar3($ausente1,$ausente2,$ausente3));
        linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,sumar3($retardo1,$retardo2,$retardo3));
        comentarios($comenta1,$comenta2,$comenta3);
    }
}
######################################################################################################################
### ----------------       PLANTILLA PARA LA REPORT CARD DE PK-2            ------------------------------------#####
#####################################################################################################################
function poner_pk2($username, $edad, $periodoactual){
    $conexion = conecta("atsedu_boletaskinder");
    $alumno = mysql_query ("select * from alumnos where matricula = '".$username."'",$conexion);

    $calif1 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo=1 order by materia",$conexion);
    $calif2 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo=2 order by materia",$conexion);
    $calif3 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo=3 order by materia",$conexion);

    $asist1 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo=1 ",$conexion);
    $asist2 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo=2 ",$conexion);
    $asist3 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo=3 ",$conexion);

    $comen1 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 1",$conexion);
    $comen2 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 2",$conexion);
    $comen3 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo = 3",$conexion);

    if (mysql_num_rows($comen1) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysql_result ($comen1,0,'comentario');}
    if (mysql_num_rows($comen2) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysql_result ($comen2,0,'comentario');}
    if (mysql_num_rows($comen3) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysql_result ($comen3,0,'comentario');}

    if (mysql_num_rows($asist1) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysql_result ($asist1,0,'presente');}
    if (mysql_num_rows($asist2) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysql_result ($asist2,0,'presente');}
    if (mysql_num_rows($asist3) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysql_result ($asist3,0,'presente');}

    if (mysql_num_rows($asist1) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysql_result ($asist1,0,'ausente');}
    if (mysql_num_rows($asist2) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysql_result ($asist2,0,'ausente');}
    if (mysql_num_rows($asist3) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysql_result ($asist3,0,'ausente');}

    if (mysql_num_rows($asist1) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysql_result ($asist1,0,'retardo');}
    if (mysql_num_rows($asist2) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysql_result ($asist2,0,'retardo');}
    if (mysql_num_rows($asist3) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysql_result ($asist3,0,'retardo');}

    include "_pk2.php";
    encabezado(mysql_result ($alumno,0,'nombre'),$periodoactual,'Pre-Kinder 2',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5]);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3);}else{
        titulo1($t0[1]);
        $a=1;
        for($i=0;$i<=7;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=8;$i<=17;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[3]);
        for($i=18;$i<=22;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        titulo2($t0[4]);
        for($i=23;$i<=28;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[5]);
        for($i=29;$i<=32;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[6]);
        for($i=33;$i<=38;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo3('ATTENDANCE / <em> ASISTENCIA </em>');
        linea2('Days present / <em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,sumar3($presente1,$presente2,$presente3));
        linea2('Days absent / <em>Ausencias</em>',$ausente1,$ausente2,$ausente3,sumar3($ausente1,$ausente2,$ausente3));
        linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,sumar3($retardo1,$retardo2,$retardo3));
        comentarios($comenta1,$comenta2,$comenta3);
    }
}

######################################################################################################################
### ----------------       PLANTILLA PARA LA REPORT CARD DE KINDER K        ------------------------------------#####
#####################################################################################################################

function poner_k($username, $edad, $periodoactual){
     $conexion = conecta("atsedu_boletaskinder");
    $alumno = mysql_query ("select * from alumnos where matricula = '".$username."'",$conexion);
    $calif1 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 1 order by materia",$conexion);
    $calif2 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 2 order by materia",$conexion);
    $calif3 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo = 3 order by materia",$conexion);
    $asist1 = mysql_query ("select * from asistencia where matricula = '".$username."'and periodo = 1",$conexion);
    $asist2 = mysql_query ("select * from asistencia where matricula = '".$username."'and periodo = 2",$conexion);
    $asist3 = mysql_query ("select * from asistencia where matricula = '".$username."'and periodo = 3",$conexion);
    $comen1 = mysql_query ("select * from comentarios where matricula = '".$username."'and periodo = 1",$conexion);
    $comen2 = mysql_query ("select * from comentarios where matricula = '".$username."'and periodo = 2",$conexion);
    $comen3 = mysql_query ("select * from comentarios where matricula = '".$username."'and periodo = 3",$conexion);

    if (mysql_num_rows($comen1) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysql_result ($comen1,0,'comentario');}
    if (mysql_num_rows($comen2) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysql_result ($comen2,0,'comentario');}
    if (mysql_num_rows($comen3) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysql_result ($comen3,0,'comentario');}

    if (mysql_num_rows($asist1) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysql_result ($asist1,0,'presente');}
    if (mysql_num_rows($asist2) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysql_result ($asist2,0,'presente');}
    if (mysql_num_rows($asist3) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysql_result ($asist3,0,'presente');}

    if (mysql_num_rows($asist1) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysql_result ($asist1,0,'ausente');}
    if (mysql_num_rows($asist2) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysql_result ($asist2,0,'ausente');}
    if (mysql_num_rows($asist3) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysql_result ($asist3,0,'ausente');}

    if (mysql_num_rows($asist1) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysql_result ($asist1,0,'retardo');}
    if (mysql_num_rows($asist2) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysql_result ($asist2,0,'retardo');}
    if (mysql_num_rows($asist3) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysql_result ($asist3,0,'retardo');}
    include "_k.php";
    encabezado(mysql_result ($alumno,0,'nombre'),$periodoactual,'Kinder',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5]);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3);}else{
        titulo1($t0[1]);
        $a=1;
        for($i=0;$i<=10;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=11;$i<=14;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        titulo2($t0[3]);
        for($i=15;$i<=18;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}

        titulo2($t0[4]);
        for($i=19;$i<=24;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[5]);
        for($i=25;$i<=27;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}

        titulo3('ATTENDANCE / <em> ASISTENCIA </em>');
        linea2('Days present / <em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,sumar3($presente1,$presente2,$presente3));
        linea2('Days absent / <em>Ausencias</em>',$ausente1,$ausente2,$ausente3,sumar3($ausente1,$ausente2,$ausente3));
        linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,sumar3($retardo1,$retardo2,$retardo3));
        comentarios($comenta1,$comenta2,$comenta3);
    }
}

######################################################################################################################
### ----------------       PLANTILLA PARA LA REPORT CARD DE PRE FIRST        ------------------------------------#####
#####################################################################################################################
function poner_pf($username, $edad, $periodoactual){
    $conexion = conecta("atsedu_boletaskinder");
    $alumno = mysql_query ("select * from alumnos where matricula = '".$username."'",$conexion);
    $calif1 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo=1 order by materia",$conexion);
    $calif2 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo=2 order by materia",$conexion);
    $calif3 = mysql_query ("select * from calificaciones where matricula = '".$username."' and periodo=3 order by materia",$conexion);
    $asist1 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo=1 ",$conexion);
    $asist2 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo=2 ",$conexion);
    $asist3 = mysql_query ("select * from asistencia where matricula = '".$username."' and periodo=3 ",$conexion);
    $comen1 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo=1 ",$conexion);
    $comen2 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo=2 ",$conexion);
    $comen3 = mysql_query ("select * from comentarios where matricula = '".$username."' and periodo=3 ",$conexion);
    if (mysql_num_rows($comen1) == 0) {$comenta1 = '&nbsp;';}else{$comenta1 = mysql_result ($comen1,0,'comentario');}
    if (mysql_num_rows($comen2) == 0) {$comenta2 = '&nbsp;';}else{$comenta2 = mysql_result ($comen2,0,'comentario');}
    if (mysql_num_rows($comen3) == 0) {$comenta3 = '&nbsp;';}else{$comenta3 = mysql_result ($comen3,0,'comentario');}

    if (mysql_num_rows($asist1) == 0) {$presente1 = '&nbsp;';}else{$presente1 = mysql_result ($asist1,0,'presente');}
    if (mysql_num_rows($asist2) == 0) {$presente2 = '&nbsp;';}else{$presente2 = mysql_result ($asist2,0,'presente');}
    if (mysql_num_rows($asist3) == 0) {$presente3 = '&nbsp;';}else{$presente3 = mysql_result ($asist3,0,'presente');}

    if (mysql_num_rows($asist1) == 0) {$ausente1 = '&nbsp;';}else{$ausente1 = mysql_result ($asist1,0,'ausente');}
    if (mysql_num_rows($asist2) == 0) {$ausente2 = '&nbsp;';}else{$ausente2 = mysql_result ($asist2,0,'ausente');}
    if (mysql_num_rows($asist3) == 0) {$ausente3 = '&nbsp;';}else{$ausente3 = mysql_result ($asist3,0,'ausente');}

    if (mysql_num_rows($asist1) == 0) {$retardo1 = '&nbsp;';}else{$retardo1 = mysql_result ($asist1,0,'retardo');}
    if (mysql_num_rows($asist2) == 0) {$retardo2 = '&nbsp;';}else{$retardo2 = mysql_result ($asist2,0,'retardo');}
    if (mysql_num_rows($asist3) == 0) {$retardo3 = '&nbsp;';}else{$retardo3 = mysql_result ($asist3,0,'retardo');}
    include "_pf.php";
    encabezado(mysql_result ($alumno,0,'nombre'),$periodoactual,'Pre-First',$t2[1],$t2[2],$t2[3],$t2[4],$t2[5]);
    // Parche para alumnos Oyentes
    if ($username== '' ){parche($comenta1,$comenta2,$comenta3);}else{
        if ($username== '' ){parche($comenta1,$comenta2,$comenta3);}else{
        titulo1($t0[1]);
        $a=1;
        for($i=0;$i<=10;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[2]);
        for($i=11;$i<=16;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        echo '
        </table></td>
        <td valign="top">      <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="size12normal">';
        titulo2($t0[3]);
        for($i=17;$i<=20;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}

        titulo2($t0[4]);
        for($i=21;$i<=24;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}
        titulo2($t0[5]);
        for($i=25;$i<=27;$i++){;linea($t1[$a],mysql_result ($calif1,$i,'valor'),mysql_result ($calif2,$i,'valor'),mysql_result ($calif3,$i,'valor'));$a++;}

        for($i=13;$i<=19;$i++){
          $d1=@mysql_result($calif1,$i,'valor');
          $d2=@mysql_result($calif2,$i,'valor');
          $d3=@mysql_result($calif3,$i,'valor');
          if($username=='78240'){$total=promediar($ds,$d2,$d3);}else{
          $total=promediar($d1,$d2,$d3); }
          linea2($t1[$a],$d1,$d2,$d3,$total);
          $a++;
        }
        $d1=@mysql_result($calif1,27,'valor');
        $d2=@mysql_result($calif2,27,'valor');
        $d3=@mysql_result($calif3,27,'valor');
        if($username=='78240'){$total=promediar($ds,$d2,$d3);}else{
          $total=promediar($d1,$d2,$d3); }
        linea2($t0[4],$d1,$d2,$d3,$total);
        titulo3('ATTENDANCE / <em> ASISTENCIA </em>');
        linea2('Days present / <em>D&iacute;as presente</em>',$presente1,$presente2,$presente3,sumar3($presente1,$presente2,$presente3));
        linea2('Days absent / <em>Ausencias</em>',$ausente1,$ausente2,$ausente3,sumar3($ausente1,$ausente2,$ausente3));
        linea2('Times tardy / <em>Retardos</em>',$retardo1,$retardo2,$retardo3,sumar3($retardo1,$retardo2,$retardo3));
        comentarios($comenta1,$comenta2,$comenta3);
    }
  }
}
######################################################################################################################
?>