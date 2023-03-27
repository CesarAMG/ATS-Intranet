<?php session_start();/* ini_set("display_errors","1");*/?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php $titulo="ReportCard Early Childhood";$error="";?>
<title><?php echo $titulo; ?></title>
<link href="css/principal.css" rel="stylesheet" type="text/css" />
<link href="css/boletas.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1>THE AMERICAN SCHOOL OF TAMPICO</h1>
    <h2>Report Cards Early Childhood</h2>
    <hr size="6" color="#0A7ABD" />
    <?php include "../sys/php/global.php"; include "php/conexion.php";
        $query ="SELECT * FROM configuracion WHERE Id='3' limit 1";
        $resultados = $mysqli->query($query);
        $row = $resultados->fetch_array(MYSQLI_ASSOC);
        $cicloactivo = $_SESSION['cicloactivo'];// Se habilita en el login
        $periodoactivo = $row['periodocaptura']; // Se habilita en el login

        if (empty($_SESSION['nombre'])){ echo '<script>location.href="login.php";</script>'; exit; }
        $_SESSION['matricula'] = $_GET['matricula'];
        $query2= "SELECT * FROM alumnos WHERE matricula = '".$_SESSION['matricula']."'";
        $resultado = $mysqli->query($query2);
        $row2 = $resultado->fetch_array(MYSQLI_ASSOC);
        $alumno=$row2['nombre'];
    ?>
    <table id="tblBorder" width="90%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
            <td height="10px;" width="30%"><br />Bienvenido(a)&nbsp;:<?php echo $_SESSION['nombre']; ?></td>
            <td width="50%"><br /><?php echo  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Matricula:</b> <u>'.$_SESSION['matricula'].'</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Alumno(a):</b> <u>'.$alumno.'</u><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grado: <u>'.$_SESSION['grado'].'</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grupo: <u>'.$_SESSION['grupo'].'</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodo:<u>'.$periodoactivo.'</u>';?></td>
            <td width="20%"><br /><a href = "logout.php">Log Out</a>&nbsp;<br /><a href = "boletas.php">Regresar a la lista</a></td>
            <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
        </tr>
        <tr>
            <td><div id="cor_lb"></div></td>
            <td colspan="3"></td>
            <td align="right"><div id="cor_rb"></div></td>
        </tr>
    </table><br />
    <?php switch ($_SESSION['grado']){
####################################################################################################################
    case 'TDD':
####################################################################################################################
    ?>
      <table id="tblBorder" width="90%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
            <td><center><strong>A</strong> - Always / Siempre</center></td>
            <td><center><strong>AA</strong> - Almost Always / Casi siempre</center></td>
            <td><center><strong>SO</strong> - Sometimes / Algunas veces</center></td>
            <td><center><strong>SE</strong> - Seldom / Rara vez</center></td>
            <td><center><strong>*</strong> - No se ha evaluado</center></td>
            <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
        </tr>
        <tr>
            <td><div id="cor_lb"></div></td>
            <td colspan="5"></td>
            <td align="right"><div id="cor_rb"></div></td>
            </tr></table><br /><?php
// -----------------------------------------------------------------------------------------------------------------
// Trae el Periodo Actual
// -----------------------------------------------------------------------------------------------------------------
            $sSQL = "SELECT * FROM calificaciones
                     WHERE ciclo_id 	= '".$cicloactivo."'
                     AND periodo 		= '".$periodoactivo."'
                     AND matricula 		= '".$_SESSION['matricula']."'
                     ORDER by materia";
               $resultado = $mysqli->query($sSQL);
               $valores = array();
               for ($i = 0;$i < ($resultado->num_rows);$i++){
                 $valores[$i] = $resultado->fetch_assoc()['valor'];
                 if (empty($valores[$i])) $valores[$i] = '--';
               }
               $resultado_assist = $mysqli->query("SELECT *
                                         FROM asistencia
                                         WHERE ciclo_id 	= '".$cicloactivo."'
                                         AND periodo 		= '".$periodoactivo."'
                                         AND matricula 		= '".$_SESSION['matricula']."'");
               $resultado_coment = $mysqli->query("SELECT *
                                         FROM comentarios
                                         WHERE ciclo_id 	= '".$cicloactivo."'
                                         AND periodo 		= '".$periodoactivo."'
                                         AND matricula 		= '".$_SESSION['matricula']."'");
// **********************************************************************************************
//  Trae el periodo 1 --------------------------------------------------------------------------  //
                $resultado1 = $mysqli->query("SELECT *
                                         FROM calificaciones
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '1'
                                         AND matricula = '".$_SESSION['matricula']."'
                                         ORDER by materia");
               $valores1 = array();
               for ($i = 0;$i < ($resultado1->num_rows);$i++)
               {
                 $valores1[$i] = $resultado1->fetch_assoc()['valor'];
                 if (empty($valores1[$i])) $valores1[$i] = '--';
               }
               $resultado_assist1 = $mysqli->query("SELECT *
                                         FROM asistencia
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '1'
                                         AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment1 = $mysqli->query("SELECT *
                                         FROM comentarios
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '1'
                                         AND matricula = '".$_SESSION['matricula']."'");

// **********************************************************************************************
// PERIODO 2  --------------------------------------------------------------------------------  //

                  $resultado2 = $mysqli->query("SELECT * FROM calificaciones
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '2'
                                         AND matricula = '".$_SESSION['matricula']."'
                                         ORDER by materia");
               $valores2 = array();
               for ($i = 0;$i < ($resultado2->num_rows);$i++)
               {
                 $valores2[$i] = $resultado2->fetch_assoc()['valor'];
                 if (empty($valores2[$i])) $valores2[$i] = '--';
               }
               $resultado_assist2 = $mysqli->query("SELECT *
                                         FROM asistencia
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '2'
                                         AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment2 = $mysqli->query("SELECT *
                                         FROM comentarios
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '2'
                                         AND matricula = '".$_SESSION['matricula']."'");

  // **********************************************************************************************
// PERIODO 3  --------------------------------------------------------------------------------  //

  $resultado3 = $mysqli->query("SELECT *
                                         FROM calificaciones
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '3'
                                         AND matricula = '".$_SESSION['matricula']."'
                                         ORDER by materia");
               $valores3 = array();
               for ($i = 0;$i < ($resultado3->num_rows);$i++)
               {
                 $valores3[$i] = $resultado3->fetch_assoc()['valor'];
                 if (empty($valores3[$i])) $valores3[$i] = '--';
               }
               $resultado_assist3 = $mysqli->query("SELECT *
                                         FROM asistencia
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '3'
                                         AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment3 = $mysqli->query("SELECT *
                                         FROM comentarios
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '3'
                                         AND matricula = '".$_SESSION['matricula']."'");

      require_once('ponercasetdd.php');
      //echo '<br><a href = "boletas.php">Regresar a la lista de alumnos</a><br><br>';
      break;

      ####################################################################################################################
  case 'PK1':
####################################################################################################################
?>
      <table id="tblBorder" width="90%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" align="left" width="5"><div id="cor_lt"></div></td>
            <td><center><strong>A</strong> - Always / Siempre</center></td>
            <td><center><strong>AA</strong> - Almost Always / Casi siempre</center></td>
            <td><center><strong>SO</strong> - Sometimes / Algunas veces</center></td>
            <td><center><strong>SE</strong> - Seldom / Rara vez</center></td>
            <td><center><strong>*</strong> - No se ha evaluado</center></td>
            <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
        </tr>
        <tr>
            <td><div id="cor_lb"></div></td>
            <td colspan="5"></td>
            <td align="right"><div id="cor_rb"></div></td>
            </tr></table><br /><?php
// -----------------------------------------------------------------------------------------------------------------
// Trae el Periodo Actual
// -----------------------------------------------------------------------------------------------------------------
               $sSQL = "SELECT * FROM calificaciones
                        WHERE ciclo_id 	= '".$cicloactivo."'
                        AND periodo 		= '".$periodoactivo."'
                        AND matricula 		= '".$_SESSION['matricula']."'
                        ORDER by materia";
               $resultado = $mysqli->query($sSQL);
               $valores = array();
               for ($i = 0;$i < ($resultado->num_rows);$i++){
                   $valores[$i] = $resultado->fetch_assoc()['valor'];
                   if (empty($valores[$i])) $valores[$i] = '--';
               }
               $resultado_assist = $mysqli->query("SELECT * FROM asistencia
                                                   WHERE ciclo_id 	= '".$cicloactivo."'
                                                   AND periodo 		= '".$periodoactivo."'
                                                   AND matricula 		= '".$_SESSION['matricula']."'");
               $resultado_coment = $mysqli->query("SELECT * FROM comentarios
                                                   WHERE ciclo_id 	= '".$cicloactivo."'
                                                   AND periodo 		= '".$periodoactivo."'
                                                   AND matricula 		= '".$_SESSION['matricula']."'");
// **********************************************************************************************
//  Trae el periodo 1 --------------------------------------------------------------------------  //
                $resultado1 = $mysqli->query("SELECT * FROM calificaciones
                                              WHERE ciclo_id = '".$cicloactivo."'
                                              AND periodo = '1'
                                              AND matricula = '".$_SESSION['matricula']."'
                                              ORDER by materia");
                $valores1 = array();
                for ($i = 0;$i < ($resultado1->num_rows);$i++){
                    $valores1[$i] = $resultado1->fetch_assoc()['valor'];
                    if (empty($valores1[$i])) $valores1[$i] = '--';
               }
               $resultado_assist1 = $mysqli->query("SELECT * FROM asistencia
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '1'
                                                    AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment1 = $mysqli->query("SELECT * FROM comentarios
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '1'
                                                    AND matricula = '".$_SESSION['matricula']."'");

// **********************************************************************************************
// PERIODO 2  --------------------------------------------------------------------------------  //

                $resultado2 = $mysqli->query("SELECT * FROM calificaciones
                                              WHERE ciclo_id = '".$cicloactivo."'
                                              AND periodo = '2'
                                              AND matricula = '".$_SESSION['matricula']."'
                                              ORDER by materia");
               $valores2 = array();
               for ($i = 0;$i < ($resultado2->num_rows);$i++){
                   $valores2[$i] = $resultado2->fetch_assoc()['valor'];
                   if (empty($valores2[$i])) $valores2[$i] = '--';
               }
               $resultado_assist2 = $mysqli->query("SELECT * FROM asistencia
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '2'
                                                    AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment2 = $mysqli->query("SELECT * FROM comentarios
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '2'
                                                    AND matricula = '".$_SESSION['matricula']."'");

  // **********************************************************************************************
// PERIODO 3  --------------------------------------------------------------------------------  //

                $resultado3 = $mysqli->query("SELECT * FROM calificaciones
                                              WHERE ciclo_id = '".$cicloactivo."'
                                              AND periodo = '3'
                                              AND matricula = '".$_SESSION['matricula']."'
                                              ORDER by materia");
               $valores3 = array();
               for ($i = 0;$i < ($resultado3->num_rows);$i++){
                   $valores3[$i] = $resultado3->fetch_assoc()['valor'];
                   if (empty($valores3[$i])) $valores3[$i] = '--';
               }
               $resultado_assist3 = $mysqli->query("SELECT * FROM asistencia
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '3'
                                                    AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment3 = $mysqli->query("SELECT * FROM comentarios
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '3'
                                                    AND matricula = '".$_SESSION['matricula']."'");

      require_once('ponercasepk1.php');
      //echo '<br><a href = "boletas.php">Regresar a la lista de alumnos</a><br><br>';
      break;

// **************************************************************************************** PK2 */
    case 'PK2':
// **************************************************************************************** PK2 */
      ?>
      <table id="tblBorder" width="90%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" align="left" width="4"><div id="cor_lt"></div></td>
            <td><center><strong>A</strong> - Always / Siempre</center></td>
            <td><center><strong>AA</strong> - Almost Always / Casi siempre</center></td>
            <td><center><strong>SO</strong> - Sometimes / Algunas veces</center></td>
            <td><center><strong>SE</strong> - Seldom / Rara vez</center></td>
            <td><center><strong>*</strong> - No se ha evaluado</center></td>
            <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
        </tr>
        <tr>
            <td><div id="cor_lb"></div></td>
            <td colspan="5"></td>
            <td align="right"><div id="cor_rb"></div></td>
            </tr></table><br /><?php
//---------------------------------------------------------------------------------------
// Trae el Periodo Actual
// -----------------------------------------------------------------------------------------------------------------
            /*  $cicloactivo = $cicloactivo;
               $periodoactivo = $periodoactivo;*/
               $sSQL="SELECT * FROM calificaciones
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '".$periodoactivo."'
                                         AND matricula = '".$_SESSION['matricula']."'
                                         group by materia ORDER by materia" ;

               $resultado = $mysqli->query($sSQL);
               $valores = array();
               for ($i = 0;$i < ($resultado->num_rows);$i++)
               {
                 $valores[$i] = $resultado->fetch_assoc()['valor'];
                 if (empty($valores[$i])) $valores[$i] = '--';
               }
               $resultado_assist = $mysqli->query("SELECT *
                                                FROM asistencia
                                                WHERE ciclo_id = '".$cicloactivo."'
                                                AND periodo = '".$periodoactivo."'
                                                AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment = $mysqli->query("SELECT *
                                                  FROM comentarios
                                                  WHERE ciclo_id = '".$cicloactivo."'
                                                  AND periodo = '".$periodoactivo."'
                                                  AND matricula = '".$_SESSION['matricula']."'");
// --------------------------------------------------------------------------------------
//  Trae el periodo 1
// --------------------------------------------------------------------------------------
             $resultado1 = $mysqli->query("SELECT *
                                         FROM calificaciones
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '1'
                                         AND matricula = '".$_SESSION['matricula']."'
                                         ORDER by materia");
               $valores1 = array();
               for ($i = 0;$i < ($resultado1->num_rows);$i++)
               {
                 $valores1[$i] = $resultado1->fetch_assoc()['valor'];
                 if (empty($valores1[$i])) $valores1[$i] = '--';
               }
               $resultado_assist1 = $mysqli->query("SELECT *
                                         FROM asistencia
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '1'
                                         AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment1 = $mysqli->query("SELECT *
                                         FROM comentarios
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '1'
                                         AND matricula = '".$_SESSION['matricula']."'");

// --------------------------------------------------------------------------------------
//  Trae el periodo 2 -K
// --------------------------------------------------------------------------------------
               $resultado2 = $mysqli->query("SELECT *
                                         FROM calificaciones
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '2'
                                         AND matricula = '".$_SESSION['matricula']."'
                                         ORDER by materia");
               $valores2 = array();
               for ($i = 0;$i < ($resultado2->num_rows);$i++)
               {
                 $valores2[$i] = $resultado2->fetch_assoc()['valor'];
                 if (empty($valores2[$i])) $valores2[$i] = '--';
               }
               $resultado_assist2 = $mysqli->query("SELECT *
                                         FROM asistencia
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '2'
                                         AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment2 = $mysqli->query("SELECT *
                                         FROM comentarios
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '2'
                                         AND matricula = '".$_SESSION['matricula']."'");

// --------------------------------------------------------------------------------------
//  Trae el periodo 3 -K
// --------------------------------------------------------------------------------------
               $resultado3 = $mysqli->query("SELECT *
                                         FROM calificaciones
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '3'
                                         AND matricula = '".$_SESSION['matricula']."'
                                         ORDER by materia");
               $valores3 = array();
               for ($i = 0;$i < ($resultado3->num_rows);$i++)
               {
                 $valores3[$i] = $resultado3->fetch_assoc()['valor'];
                 if (empty($valores3[$i])) $valores3[$i] = '--';
               }
               $resultado_assist3 = $mysqli->query("SELECT *
                                         FROM asistencia
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '3'
                                         AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment3 = $mysqli->query("SELECT *
                                         FROM comentarios
                                         WHERE ciclo_id = '".$cicloactivo."'
                                         AND periodo = '3'
                                         AND matricula = '".$_SESSION['matricula']."'");

               require_once('ponercasepk2.php');

               //echo '<br><a href = "boletas.php">Regresar a la lista de alumnos</a><br><br>';

               break;

// *****************************************************************************************************************
// K
// *****************************************************************************************************************
    case 'K':
          ?>
      <table id="tblBorder" width="90%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" align="left" width="4"><div id="cor_lt"></div></td>
                         <td><center><strong>A</strong> - Always / Siempre</center></td>
                         <td><center><strong>AA</strong> - Almost Always / Casi siempre</center></td>
                         <td><center><strong>SO</strong> - Sometimes / Algunas veces</center></td>
                         <td><center><strong>SE</strong> - Seldom / Rara vez</center></td>
                         <td><center><strong>*</strong> - No se ha evaluado</center></td>
            <td valign="top" align="right" width="5"><div id="cor_rt"></div></td>
        </tr>
        <tr>
            <td><div id="cor_lb"></div></td>
            <td colspan="5"></td>
            <td align="right"><div id="cor_rb"></div></td>
            </tr></table><br /><?php

//-------------------------------------------------------------------------------------------------------------------
//------- Trae el Periodo Actual
//-------------------------------------------------------------------------------------------------------------------
              /* $cicloactivo = $cicloactivo;
               $periodoactivo = $periodoactivo;*/
               $sSQL="SELECT * FROM calificaciones
                      WHERE ciclo_id = '".$cicloactivo."'
                      AND periodo = '".$periodoactivo."'
                      AND matricula = '".$_SESSION['matricula']."'
                      group by materia ORDER by materia" ;

               $resultado = $mysqli->query($sSQL);
               $valores = array();
               for ($i = 0;$i < ($resultado->num_rows);$i++)
               {
                 $valores[$i] = $resultado->fetch_assoc()['valor'];
                 if (empty($valores[$i])) $valores[$i] = '--';
               }
               $resultado_assist = $mysqli->query("SELECT * FROM asistencia
                                                   WHERE ciclo_id = '".$cicloactivo."'
                                                   AND periodo = '".$periodoactivo."'
                                                   AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment = $mysqli->query("SELECT * FROM comentarios
                                                   WHERE ciclo_id = '".$cicloactivo."'
                                                   AND periodo = '".$periodoactivo."'
                                                   AND matricula = '".$_SESSION['matricula']."'");
// --------------------------------------------------------------------------------------
//  Trae el periodo 1
// --------------------------------------------------------------------------------------
             $resultado1 = $mysqli->query("SELECT * FROM calificaciones
                                           WHERE ciclo_id = '".$cicloactivo."'
                                           AND periodo = '1'
                                           AND matricula = '".$_SESSION['matricula']."'
                                           ORDER by materia");
               $valores1 = array();
               for ($i = 0;$i < ($resultado1->num_rows);$i++)
               {
                 $valores1[$i] = $resultado1->fetch_assoc()['valor'];
                 if (empty($valores1[$i])) $valores1[$i] = '--';
               }
               $resultado_assist1 = $mysqli->query("SELECT * FROM asistencia
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '1'
                                                    AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment1 = $mysqli->query("SELECT * FROM comentarios
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '1'
                                                    AND matricula = '".$_SESSION['matricula']."'");

// --------------------------------------------------------------------------------------
//  Trae el periodo 2 -K
// --------------------------------------------------------------------------------------
               $resultado2 = $mysqli->query("SELECT * FROM calificaciones
                                             WHERE ciclo_id = '".$cicloactivo."'
                                             AND periodo = '2'
                                             AND matricula = '".$_SESSION['matricula']."'
                                             ORDER by materia");
               $valores2 = array();
               for ($i = 0;$i < ($resultado2->num_rows);$i++)
               {
                 $valores2[$i] = $resultado2->fetch_assoc()['valor'];
                 if (empty($valores2[$i])) $valores2[$i] = '--';
               }
               $resultado_assist2 = $mysqli->query("SELECT * FROM asistencia
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '2'
                                                    AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment2 = $mysqli->query("SELECT * FROM comentarios
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '2'
                                                    AND matricula = '".$_SESSION['matricula']."'");

// --------------------------------------------------------------------------------------
//  Trae el periodo 3 -K
// --------------------------------------------------------------------------------------
               $resultado3 = $mysqli->query("SELECT * FROM calificaciones
                                             WHERE ciclo_id = '".$cicloactivo."'
                                             AND periodo = '3'
                                             AND matricula = '".$_SESSION['matricula']."'
                                             ORDER by materia");
               $valores3 = array();
               for ($i = 0;$i < ($resultado3->num_rows);$i++)
               {
                 $valores3[$i] = $resultado3->fetch_assoc()['valor'];
                 if (empty($valores3[$i])) $valores3[$i] = '--';
               }
               $resultado_assist3 = $mysqli->query("SELECT * FROM asistencia
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '3'
                                                    AND matricula = '".$_SESSION['matricula']."'");
               $resultado_coment3 = $mysqli->query("SELECT * FROM comentarios
                                                    WHERE ciclo_id = '".$cicloactivo."'
                                                    AND periodo = '3'
                                                    AND matricula = '".$_SESSION['matricula']."'");

               require_once('ponercasek.php');

               //echo '<br><a href = "boletas.php">Regresar a la lista de alumnos</a><br><br>';
               break;

//****************************************************************************************************
// PF                                                                                              PF
//****************************************************************************************************
    case 'PF':
//----------------------------------------------------------------------------------------------------
          ?>





    <?php } ?>
</body>
</html>