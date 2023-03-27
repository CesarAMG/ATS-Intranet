<?php  ini_set("display_errors","1");  include "funciones.php";
include "_pk2.php";
function linea($num,$periodo,$tipo){
global $t1;
global $valores;
global $valores1;
global $valores2;
global $valores3;
    $aux="var".$num;
    $x=$num-1;
    switch ($periodo){
      case 1:echo'<tr><td></td><td>'.$t1[$num].'<br /></td>
            <td width="70" align="center" valign="middle">';if ($tipo == 0){selected_pk1($valores[$x],$aux);}else{texto_poner($valores[$x],$aux);}echo '</td>
            <td width="70" align="center" valign="middle">&nbsp;</td>
            <td width="70" align="center" valign="middle">&nbsp;</td>
            <td width="70" align="center" valign="middle">&nbsp;</td>
            </tr>';break;
      case 2:echo'<tr><td></td><td>'.$t1[$num].'<br /></td>
            <td width="70" align="center" valign="middle">'.$valores1[$num-1].'</td>
            <td width="70" align="center" valign="middle">';if ($tipo == 0){selected_pk1($valores[$x],$aux);}else{texto_poner($valores[$x],$aux);}echo '</td>
            <td width="70" align="center" valign="middle">&nbsp;</td>
            <td width="70" align="center" valign="middle">&nbsp;</td>
            </tr>';break;
      case 3:echo'<tr><td></td><td>'.$t1[$num].'<br /></td>
            <td width="70" align="center" valign="middle">'.$valores1[$num-1].'</td>
            <td width="70" align="center" valign="middle">'.$valores2[$num-1].'</td>
            <td width="70" align="center" valign="middle">';if ($tipo == 0){selected_pk1($valores[$x],$aux);}else{texto_poner($valores[$x],$aux);}echo '</td>
            <td width="70" align="center" valign="middle">&nbsp;</td>
            </tr>';break;
      case 4:echo'<tr><td></td><td>'.$t1[$num].'<br /></td>
            <td width="70" align="center" valign="middle">'.$valores1[$num-1].'</td>
            <td width="70" align="center" valign="middle">'.$valores2[$num-1].'</td>
            <td width="70" align="center" valign="middle">'.$valores3[$num-1].'</td>
            <td width="70" align="center" valign="middle">';if ($tipo == 0){selected_pk1($valores[$x],$aux);}else{texto_poner($valores[$x],$aux);}echo '</td>
            </tr>';break;
    }
}
function titulo($num){
  global $t0;
  echo'<tr>
        <thead>
        <tr id="trenc" height="30px">
          <td colspan="2">&nbsp;&nbsp;&nbsp;'.$t0[$num].'</td>
          <td width="35" align="center" valign="middle">1</td>
          <td width="35" align="center" valign="middle">2</td>
          <td width="35" align="center" valign="middle">3</td>
          <td width="35" align="center" valign="middle">4</td>
        </tr>
        </thead>  ';}

function lineap01($renglon,$num){
global $resultado_assist;
global $resultado_assist1;
global $resultado_assist2;
global $resultado_assist3;
global $t0;
echo '
        <tr><td>'.$t0[$num].'</td>
                <td  align="center" valign="middle">';echo texto_poner(mysqli_result($resultado_assist,0,$renglon),$renglon);echo'</td>
                <td  align="center" valign="middle">&nbsp;</td>
                <td  align="center" valign="middle">&nbsp;</td>
                <td  align="center" valign="middle">&nbsp;</td>
                <td  align="center" valign="middle">';echo sumar3(mysqli_result($resultado_assist,0,$renglon),0,0,0) ;echo'</td>
        </tr>';
}
function lineap02($renglon,$num){
global $resultado_assist;
global $resultado_assist1;
global $resultado_assist2;
global $resultado_assist3;
global $t0;
echo '
        <tr><td>'.$t0[$num].'</td>
                <td  align="center" valign="middle">';echo mysqli_result($resultado_assist1,0,$renglon); echo'</td>
                <td  align="center" valign="middle">';echo texto_poner(mysqli_result($resultado_assist,0,$renglon),$renglon);echo'</td>
                <td  align="center" valign="middle">&nbsp;</td>
                <td  align="center" valign="middle">&nbsp;</td>
                <td  align="center" valign="middle">';echo sumar3(mysqli_result($resultado_assist1,0,$renglon), mysqli_result($resultado_assist,0,$renglon),0,0) ;echo'</td>
        </tr>';
}
function lineap03($renglon,$num){
global $resultado_assist;
global $resultado_assist1;
global $resultado_assist2;
global $resultado_assist3;
global $t0;
echo '
        <tr><td>'.$t0[$num].'</td>
                <td  align="center" valign="middle">';echo mysqli_result($resultado_assist1,0,$renglon); echo'</td>
                <td  align="center" valign="middle">';echo mysqli_result($resultado_assist2,0,$renglon); echo'</td>
                <td  align="center" valign="middle">';echo texto_poner(mysqli_result($resultado_assist,0,$renglon),$renglon);echo'</td>
                <td  align="center" valign="middle">&nbsp;</td>
                <td  align="center" valign="middle">';echo sumar3(mysqli_result($resultado_assist1,0,$renglon), mysqli_result($resultado_assist2,0,$renglon), mysqli_result($resultado_assist,0,$renglon),0) ;echo'</td>
        </tr>';
}
function lineap04($renglon,$num){
global $resultado_assist;
global $resultado_assist1;
global $resultado_assist2;
global $resultado_assist3;
global $t0;
echo '
        <tr><td>'.$t0[$num].'</td>
                <td  align="center" valign="middle">';echo mysqli_result($resultado_assist1,0,$renglon); echo'</td>
                <td  align="center" valign="middle">';echo mysqli_result($resultado_assist2,0,$renglon); echo'</td>
                <td  align="center" valign="middle">';echo mysqli_result($resultado_assist3,0,$renglon); echo'</td>
                <td  align="center" valign="middle">';echo texto_poner(mysqli_result($resultado_assist,0,$renglon),$renglon);echo'</td>
                <td  align="center" valign="middle">';echo sumar3(mysqli_result($resultado_assist1,0,$renglon), mysqli_result($resultado_assist2,0,$renglon), mysqli_result($resultado_assist3,0,$renglon), mysqli_result($resultado_assist,0,$renglon)) ;echo'</td>
        </tr>';
}

function lineaC01(){
global $resultado_coment;
echo '<tr>
        <td width="10%" height="174" valign="top" colspan="2">&nbsp;&nbsp;&nbsp;Observaciones 1: </td>
        <td width="90%">';textarea_poner($resultado_coment->fetch_assoc()['comentario'],'comentario');echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">&nbsp;&nbsp;&nbsp;Observaciones 2: </td>
        <td width="80%">&nbsp;</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">&nbsp;&nbsp;&nbsp;Observaciones 3: </td>
        <td width="90%">&nbsp;</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">&nbsp;&nbsp;&nbsp;Observaciones 4: </td>
        <td width="90%">&nbsp;</tr>';
}
function lineaC02(){
global $resultado_coment;
global $resultado_coment1;
echo '<tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 1: </td>
        <td width="90%">';echo $resultado_coment1->fetch_assoc()['comentario'];echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 2: </td>
        <td width="90%">';textarea_poner($resultado_coment->fetch_assoc()['comentario'],'comentario');echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 3: </td>
        <td width="90%">&nbsp;</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 4: </td>
        <td width="90%">&nbsp;</tr>';
}
function lineaC03(){
global $resultado_coment;
global $resultado_coment1;
global $resultado_coment2;
echo '<tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 1: </td>
        <td width="90%">';echo $resultado_coment1->fetch_assoc()['comentario'];echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 2: </td>
        <td width="90%">';echo $resultado_coment2->fetch_assoc()['comentario'];echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 3: </td>
        <td width="90%">';textarea_poner($resultado_coment->fetch_assoc()['comentario'],'comentario');echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 4: </td>
        <td width="90%">&nbsp;</tr>';
}
function lineaC04(){
global $resultado_coment;
global $resultado_coment1;
global $resultado_coment2;
global $resultado_coment3;
echo '<tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 1: </td>
        <td width="90%">';echo $resultado_coment1->fetch_assoc()['comentario'];echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 2: </td>
        <td width="90%">';echo $resultado_coment2->fetch_assoc()['comentario'];echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 3: </td>
        <td width="90%">';echo $resultado_coment3->fetch_assoc()['comentario'];echo '</tr>
      <tr>
        <td width="10%" height="174" valign="top" colspan="2">Observaciones 4: </td>
        <td width="90%">';textarea_poner($resultado_coment->fetch_assoc()['comentario'],'comentario');echo '</tr>';
}
function asistencias($periodo){
    switch ($periodo){
      case 1:lineap01('presente',7);lineap01('ausente',8);lineap01('retardo',9);break;
      case 2:lineap02('presente',7);lineap02('ausente',8);lineap02('retardo',9);break;
      case 3:lineap03('presente',7);lineap03('ausente',8);lineap03('retardo',9);break;
      case 4:lineap04('presente',7);lineap04('ausente',8);lineap04('retardo',9);break;
    }
}
function comentarios($periodo){
    switch ($periodo){
      case 1:lineaC01();break;
      case 2:lineaC02();break;
      case 3:lineaC03();break;
      case 4:lineaC04();break;
    }
}
/* comienza codigo de captura*/

echo'<form id="form1" name="form1" method="post" action="grabaralumnopk1.php">
   <table id="tblBorder" width="90%" align="center" cellpadding="0" cellspacing="0">
        <tr><td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
          <td>
  <table id="tblUser" width="100%" align="center" cellpadding="0" cellspacing="0">
    <thead>
        <tr  id="trenc" height="30px">
            <td valign="top" align="left" width="5"></td>
            <td>'.$t0[1].'</td>
            <td width="35" align="center" valign="middle">1</td>
            <td width="35" align="center" valign="middle">2</td>
            <td width="35" align="center" valign="middle">3</td>
            <td width="35" align="center" valign="middle">4</td>
            <td valign="top" align="right" width="5"></td>
        </tr></thead>';
          for($ii=1;$ii<=8;$ii++){linea($ii,$periodoactivo,0);}
          titulo(2);
          for($ii=9;$ii<=16;$ii++){linea($ii,$periodoactivo,0);}
          titulo(3);
          for($ii=17;$ii<=20;$ii++){linea($ii,$periodoactivo,0);}
          titulo(4);
          for($ii=21;$ii<=27;$ii++){linea($ii,$periodoactivo,0);}
          titulo(5);
          for($ii=28;$ii<=33;$ii++){linea($ii,$periodoactivo,0);}
          titulo(6);
          for($ii=34;$ii<=37;$ii++){linea($ii,$periodoactivo,0);}

          echo '
        <tr>
            <td></td>
            <td colspan="4"></td>
            <td align="right"></td>
            </tr></table>
         </td>
          <td valign="top" align="right" width="5"><div id="cor_rt"></div></td></tr>
          <tr><td><div id="cor_lb"></div></td><td></td><td align="right"><div id="cor_rb"></div></td></tr></table>

   <table id="tblBorder" width="90%" align="center" cellpadding="0" cellspacing="0">
        <tr><td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
          <td>
  <table id="tblUser" width="100%" align="center" cellpadding="0" cellspacing="0">
    <thead>
        <tr  id="trenc" height="30px">
        <td width="80%">&nbsp;&nbsp;&nbsp;<strong>ATTENDANCE / ASISTENCIA </strong></td>
        <td width="5%" align="center" valign="middle">1</td>
        <td width="5%" align="center" valign="middle">2</td>
        <td width="5%" align="center" valign="middle">3</td>
        <td width="5%" align="center" valign="middle">4</td>
        <td width="5%" align="center" valign="middle">FINAL</td>
      </tr></thead>';
       asistencias($periodoactivo);echo '
      <tr>
            <td></td>
            <td colspan="4"></td>
            <td align="right"></td>
            </tr></table>
         </td>
          <td valign="top" align="right" width="5"><div id="cor_rt"></div></td></tr>
          <tr><td><div id="cor_lb"></div></td><td></td><td align="right"><div id="cor_rb"></div></td></tr></table>

     <table id="tblBorder" width="90%" height="174" align="center" cellpadding="0" cellspacing="0">
     <tr><td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
          <td ></tr>';
      comentarios($periodoactivo);
echo'
    <tr>
    <td valign="top" align="right" width="5"><div id="cor_rt"></div></td></tr>
          <tr><td><div id="cor_lb"></div></td><td></td><td align="right"><div id="cor_rb"></div></td></tr></table>
<br /><br />    <p><center><input type="submit" name="Submit" value="Grabar" /></center></p>
</form>';
?>
