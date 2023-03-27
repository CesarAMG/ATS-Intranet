<?php //ini_set("display_errors","1");
session_start();
  if  (empty($_SESSION['nombre'])){
    echo '<h2>Usuario no autentificado!<br><br><a href = "login.php">Ir a p&aacute;gina de Log In</a></h2>';
    exit;
  }
  include "../sys/php/global.php";
  include "php/conexion.php";
  include 'funciones.php';

  $var1  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var1']))));
  $var2  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var2']))));
  $var3  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var3']))));
  $var4  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var4']))));
  $var5  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var5']))));
  $var6  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var6']))));
  $var7  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var7']))));
  $var8  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var8']))));
  $var9  = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var9']))));
  $var10 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var10']))));
  $var11 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var11']))));
  $var12 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var12']))));
  $var13 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var13']))));
  $var14 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var14']))));
  $var15 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var15']))));
  $var16 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var16']))));
  $var17 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var17']))));
  $var18 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var18']))));
  $var19 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var19']))));
  $var20 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var20']))));
  $var21 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var21']))));
  $var22 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var22']))));
  $var23 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var23']))));
  $var24 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var24']))));
  $var25 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var25']))));
  $var26 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var26']))));
  $var27 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var27']))));
  $var28 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var28']))));
  $var29 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var29']))));
  $var30 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var30']))));
  $var31 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var31']))));
  $var32 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var32']))));
  $var33 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var33']))));
  $var34 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var34']))));
  $var35 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var35']))));
  $var36 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var36']))));
  $var37 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var37']))));
  $var38 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var38']))));
  $var39 = strip_tags(htmlentities(htmlspecialchars(trim($_POST['var39']))));


  $presente = strip_tags(htmlentities(htmlspecialchars(trim($_POST['presente']))));
  $ausente = strip_tags(htmlentities(htmlspecialchars(trim($_POST['ausente']))));
  $retardo = strip_tags(htmlentities(htmlspecialchars(trim($_POST['retardo']))));

  $comentario = strip_tags(htmlentities(htmlspecialchars(trim($_POST['comentario']))));
  $comentario = addslashes($comentario);

  $mysqli->query("update comentarios
                set comentario = '".$comentario."'
                where ciclo_id ='".$_SESSION['cicloactivo']."'
                and periodo = '".$_SESSION['periodoactivo']."'
                and matricula = '".$_SESSION['matricula']."'
                ");

  $mysqli->query("update asistencia
                set presente = '".$presente."', ausente = '".$ausente."', retardo = '".$retardo."'
                where ciclo_id ='".$_SESSION['cicloactivo']."'
                and periodo = '".$_SESSION['periodoactivo']."'
                and matricula = '".$_SESSION['matricula']."'
                ");

  function actualiza_valor_db($aux1,$aux2){
    include "../sys/php/global.php"; include "php/conexion.php";

    $mysqli->query ("update calificaciones
                  set valor = '".$aux1."'
                  where ciclo_id ='".$_SESSION['cicloactivo']."'
                  and periodo = '".$_SESSION['periodoactivo']."'
                  and matricula = '".$_SESSION['matricula']."'
                  and materia = '".$aux2."'
                  ");

          
         /* if ($res === false) {
            echo "SQL Error1: " . $mysqli->error;
         } */
  }

  actualiza_valor_db($var1,'1');
  actualiza_valor_db($var2,'2');
  actualiza_valor_db($var3,'3');
  actualiza_valor_db($var4,'4');
  actualiza_valor_db($var5,'5');
  actualiza_valor_db($var6,'6');
  actualiza_valor_db($var7,'7');
  actualiza_valor_db($var8,'8');
  actualiza_valor_db($var9,'9');
  actualiza_valor_db($var10,'10');
  actualiza_valor_db($var11,'11');
  actualiza_valor_db($var12,'12');
  actualiza_valor_db($var13,'13');
  actualiza_valor_db($var14,'14');
  actualiza_valor_db($var15,'15');
  actualiza_valor_db($var16,'16');
  actualiza_valor_db($var17,'17');
  actualiza_valor_db($var18,'18');
  actualiza_valor_db($var19,'19');
  actualiza_valor_db($var20,'20');
  actualiza_valor_db($var21,'21');
  actualiza_valor_db($var22,'22');
  actualiza_valor_db($var23,'23');
  actualiza_valor_db($var24,'24');
  actualiza_valor_db($var25,'25');
  actualiza_valor_db($var26,'26');
  actualiza_valor_db($var27,'27');
  actualiza_valor_db($var28,'28');
  actualiza_valor_db($var29,'29');
  actualiza_valor_db($var30,'30');
  actualiza_valor_db($var31,'31');
  actualiza_valor_db($var32,'32');
  actualiza_valor_db($var33,'33');
  actualiza_valor_db($var34,'34');
  actualiza_valor_db($var35,'35');
  actualiza_valor_db($var36,'36');
  actualiza_valor_db($var37,'37');
  actualiza_valor_db($var38,'38');
  actualiza_valor_db($var39,'39');
  echo '<script>location.href="boletas.php";</script>';
?>
