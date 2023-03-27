<?php ini_set("display_errors","1");
require 'php/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Coordinate;

$nombreArchivo = 'alumnos22-23.xlsx';
$documento = IOFactory::load($nombreArchivo);
$totalHojas = $documento->getSheetCount();

$hojaActual = $documento->getSheet(0);
$numeroFilas = $hojaActual->getHighestDataRow();
$letra = $hojaActual->getHighestColumn();

include '../sys/php/global.php';
$mysqli = new mysqli($server_mysql, $user_mysql, $pass_mysql, $base_B);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$ciclo=1;
$xx=1;

for($indiceFila = 2; $indiceFila<=$numeroFilas; $indiceFila++){
    $grado = $hojaActual->getCellByColumnAndRow(1, $indiceFila);
    $grupo = $hojaActual->getCellByColumnAndRow(2, $indiceFila);
    $matricula = $hojaActual->getCellByColumnAndRow(3, $indiceFila);
    //$matricula  =$matricula+1-1;
    $name = $hojaActual->getCellByColumnAndRow(4, $indiceFila);
    $orden = $hojaActual->getCellByColumnAndRow(5, $indiceFila);
    $clave = $hojaActual->getCellByColumnAndRow(6, $indiceFila);
    $grado=strtoupper($grado);
    $grupo=strtoupper($grupo);

    echo $grado.'--'.$grupo.'--'.$matricula.'--'.$name.'--'.$orden.'--'.$clave.'<br>';

    $sql_check="select * from alumnos where matricula = '$matricula'";
    $execute_check = $mysqli->query($sql_check);
    $nrows = $execute_check->num_rows;

    if($nrows>0){
          echo $xx.' - '.$matricula.' ya existe<br />';
        }else{
          $sql_insert = "INSERT INTO alumnos(ciclo_id, grado, grupo, matricula, nombre, orden, activo,clave )
            		                    values(1, '$grado','$grupo','$matricula','$name','$orden',1,'$clave')";
          $execute_insert= $mysqli->query($sql_insert);
          echo $xx.' - '.$sql_insert.'<br />';
          echo '     A '.$name.' - ';

                 //  - Proceso que evalua el grado del alumno y lo inserta en la tabla de calificaciones
        for ($periodo = 1; $periodo <=4; $periodo++)
        {    echo 'A';
                      $sSQL = "INSERT INTO Asistencia(ciclo_id, periodo, matricula, presente, ausente, retardo) VALUES(1, '$periodo', '$matricula', '0', '0', '0')";
                      $sth = $mysqli->query($sSQL);
      	     echo 'S';
                      $sSQL = "INSERT INTO comentarios(ciclo_id, periodo, matricula, comentario) VALUES(1, '$periodo', '$matricula', '')";
                      $sth = $mysqli->query($sSQL);
      	     echo 'M';
                switch ($grado) {
                    case "TDD":
                            echo '.';
                            for ($cont = 1; $cont <=27; $cont++){
                                     $sSQL = "INSERT INTO calificaciones(ciclo_id, periodo, matricula, materia) VALUES(1, '$periodo', '$matricula', '$cont')";
                                     $sth = $mysqli->query($sSQL);
                                            echo '.';
                             }
                             $cont = 1   ;

                    break;
                    case "PK1":
                            echo '.';
                            for ($cont = 1; $cont <=46; $cont++){
                                     $sSQL = "INSERT INTO calificaciones(ciclo_id, periodo, matricula, materia) VALUES(1, '$periodo', '$matricula', '$cont')";
                                     $sth = $mysqli->query($sSQL);
                                            echo '.';
                             }
                             $cont = 1   ;

                    break;

                    case "PK2":
                            for ($cont = 1; $cont <=39; $cont++){
                                     $sSQL = "INSERT INTO calificaciones(ciclo_id, periodo, matricula, materia) VALUES(1, '$periodo', '$matricula', '$cont')";
                                     $sth = $mysqli->query($sSQL);
                                                 echo '.';
                             }
                             $cont = 1   ;

                    break;

                    case "K":
                            for ($cont = 1; $cont <=28; $cont++){
                                     $sSQL = "INSERT INTO calificaciones(ciclo_id, periodo, matricula, materia) VALUES(1, '$periodo', '$matricula', '$cont')";
                                     $sth = $mysqli->query($sSQL);
                                                 echo '.';
                             }
                             $cont = 1   ;

                    break;
                    case "PF":
                            for ($cont = 1; $cont <=29; $cont++){
                                     $sSQL = "INSERT INTO calificaciones(ciclo_id, periodo, matricula, materia) VALUES(1, '$periodo', '$matricula', '$cont')";
                                     $sth = $mysqli->query($sSQL);
                                                 echo '.';
                             }
                             $cont = 1   ;
                break;
                 } // end swith
        }//end for
                echo '<br><br />';

        }
       $xx++;
}

?>