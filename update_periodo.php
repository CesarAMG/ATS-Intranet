<?php include '../sys/php/global.php';
$mysqli = new mysqli($server_mysql, $user_mysql, $pass_mysql, $base_B);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$ciclo=1;
$xx=1;

$sql_check="select * from alumnos";
$execute_check = $mysqli->query($sql_check);
$nrows = $execute_check->num_rows;

while($fila = $execute_check->fetch_assoc()){
     $matricula = $fila['matricula']; $grado = $fila['grado'];
     $periodo=4;

     $sSQL = "INSERT INTO Asistencia(ciclo_id, periodo, matricula, presente, ausente, retardo) VALUES(1, '$periodo', '$matricula', '0', '0', '0')";
     $sth = $mysqli->query($sSQL);

     $sSQL = "INSERT INTO comentarios(ciclo_id, periodo, matricula, comentario) VALUES(1, '$periodo', '$matricula', '')";
     $sth = $mysqli->query($sSQL);

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
                 }


}

?>