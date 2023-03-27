<?php //ini_set("display_errors","1");
function sumar3($a,$b,$c,$d){
  $x =0; $y =0;  $z =0; $w =0;
  if (is_numeric($a))  { $x = $a;
    if (is_numeric($b))    { $y = $b;
      if (is_numeric($c))     { $z = $c;
        if (is_numeric($d))     { $w = $d;
        }
      }
    }
  }
  return $x+$y+$z+$w;
}
function promediar($a,$b,$c,$d){
   $cuantos = 0;
   if ($a>0) { $cuantos++;}
   if ($b>0) { $cuantos++;}
   if ($c>0) { $cuantos++;}
   if ($d>0) { $cuantos++;}

if ($cuantos > 0) {return round( ($a+$b+$c+$d)/$cuantos ,0);}
}

function mysqli_result($result,$row,$field=0) {
       if ($result===false) return false;
       if ($row>=mysqli_num_rows($result)) return false;
       if (is_string($field) && !(strpos($field,".")===false)) {
           $t_field=explode(".",$field);
           $field=-1;
           $t_fields=mysqli_fetch_fields($result);
           for ($id=0;$id<mysqli_num_fields($result);$id++) {
               if ($t_fields[$id]->table==$t_field[0] && $t_fields[$id]->name==$t_field[1]) {
                   $field=$id;
                   break;
               }
           }
           if ($field==-1) return false;
       }
       mysqli_data_seek($result,$row);
       $line=mysqli_fetch_array($result);
       return isset($line[$field])?$line[$field]:false;
}

/*
function promediar($a,$b,$c){
   $cuantos = 0;
   if ($a)
          { $cuantos++;
            if ($b)
                    { $cuantos++;
                       if ($c)
                          {    $cuantos++;
                          }
                    }
          }

if ($cuantos > 0) {return round( ($a+$b+$c)/$cuantos ,0);}
}

*/
function poner_admin()  {
    $tdd='';$pk1 = '';$pk2 = '';$pk = '';$pf = '';$a = '';$b = '';$c = '';$d = '';$e = '';$f = '';
    switch ($_SESSION['grado'])    {
       case 'TDD': $tdd = ' selected="selected"'; break;
       case 'PK1': $pk1 = ' selected="selected"'; break;
       case 'PK2': $pk2 = ' selected="selected"'; break;
       case 'K'  : $k = ' selected="selected"'; break;
       case 'PF' : $pf = ' selected="selected"'; break;
    }
    switch ($_SESSION['grupo'])    {
       case 'A': $a = ' selected="selected"'; break;
       case 'B': $b = ' selected="selected"'; break;
       case 'C': $c = ' selected="selected"'; break;
       case 'D': $d = ' selected="selected"'; break;
       case 'E': $e = ' selected="selected"'; break;
       case 'F': $f = ' selected="selected"'; break;
    }

    echo '
    <form id="grado_grupo" name="grado_grupo" method="post" action="boletas.php" style="margin:0px;">
      <select name="grado" id="grado">
        <option value="TDD"'.$tdd.'>TDD</option>
        <option value="PK1"'.$pk1.'>PK1</option>
        <option value="PK2"'.$pk2.'>PK2</option>
        <option value="K"'.$k.'>K</option>
        <option value="PF"'.$pf.'>PF</option>
      </select>
      <select name="grupo" id="grupo">
        <option value="A"'.$a.'>A</option>
        <option value="B"'.$b.'>B</option>
        <option value="C"'.$c.'>C</option>
        <option value="D"'.$d.'>D</option>
        <option value="E"'.$e.'>E</option>
        <option value="F"'.$f.'>F</option>
      </select>
      <input type="submit" name="Submit" value="Seleccionar" />
    </form>';
  }

  ###############################################################################################

  function textarea_poner($var_temp,$var_temp2){
    echo '<textarea name="'.$var_temp2.'" cols="60" rows="10" wrap="virtual">'.$var_temp.'</textarea></td>';
  }

  ###############################################################################################

  function sindecimalX($a) {
    $b = $a % 10;
    $c = $a - $b;
    if ($c >= .5) $b++;
    return $b;
  }
  function sindecimal($a)  {
    $b = $a % 10;
    $c = $a - $b;
    if ($c == 10 ) {return 10;}
    if ($c >= .5 and $c<10) $b++;

    return $b;
  }
  ###############################################################################################

  function texto_poner($var_temp,$var_temp2)  {
    echo '<input name="'.$var_temp2.'" value="'.$var_temp.'" type="text" size="5"/>';
  }
  #########################################################

  function selected_tdd($var_temp,$var_temp2)
  { // escribe el selecionado en un select de html
    switch ($var_temp){
      case '--': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--" selected="selected">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select> ';
      break;
      case 'A': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A" selected="selected">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';
      break;
      case 'AA': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA" selected="selected">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';
      break;
      case 'SO': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO" selected="selected">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';
      break;
      case 'SE': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE" selected="selected">SE</option>
        <option value="*">*</option>
      </select>';
      break;
      case '*':  echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*" selected="selected">*</option>
      </select>';
      break;
    }
  }
  #########################################################

  ###############################################################################################

  function selected_pf($var_temp,$var_temp2)  { // escribe el selecionado en un select de html
    switch ($var_temp)    {
      case '--': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--" selected="selected">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select> ';/*<option value="R">R</option> */

                break;
      case 'A': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A" selected="selected">A</option>
        <option value="AA">AA</option>
        <option value="R">R</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';

                break;
      case 'AA': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA" selected="selected">AA</option>
        <option value="R">R</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';

                break;
      case 'R': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="R" selected="selected">R</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';

                break;
      case 'SO':  echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="R">R</option>
        <option value="SO" selected="selected">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';

                break;
      case 'SE':  echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="R">R</option>
        <option value="SO">SO</option>
        <option value="SE" selected="selected">SE</option>
        <option value="*">*</option>
      </select>';
      case '*':  echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*" selected="selected">*</option>
      </select>';

                break;
    }
  }

  #########################################################

  function selected_pk1($var_temp,$var_temp2)
  { // escribe el selecionado en un select de html
    switch ($var_temp)
    {
      case '--': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--" selected="selected">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select> ';

      break;
      case 'A': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A" selected="selected">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';
      break;

      case 'AA': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA" selected="selected">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';

                break;
      case 'SO': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO" selected="selected">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';

                break;
      case 'SE': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE" selected="selected">SE</option>
        <option value="*">*</option>
      </select>';

                break;
      case '*':  echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*" selected="selected">*</option>
      </select>';

                break;
    }
  }

  #########################################################

  function selected_pk2($var_temp,$var_temp2)
  { // escribe el selecionado en un select de html
    switch ($var_temp)
    {
      case '--': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--" selected="selected">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select> ';
                break;
      case 'A': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A" selected="selected">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';
                break;
      case 'AA': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA" selected="selected">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';
                break;
      case 'SO': echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO" selected="selected">SO</option>
        <option value="SE">SE</option>
        <option value="*">*</option>
      </select>';
                break;
      case 'SE':  echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE" selected="selected">SE</option>
        <option value="*">*</option>
      </select>';
      case '*':  echo'<select name="'.$var_temp2.'" id="'.$var_temp2.'">
        <option value="--">--</option>
        <option value="A">A</option>
        <option value="AA">AA</option>
        <option value="SO">SO</option>
        <option value="SE">SE</option>
        <option value="*" selected="selected">*</option>
      </select>';
      break;
    }
  }

?>
