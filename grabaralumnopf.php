<?session_start();
  if  (empty($_SESSION['nombre'])){
    echo '<h2>Usuario no autentificado!<br><br><a href = "login.php">Ir a p&aacute;gina de Log In</a></h2>';
    exit;
  }
  include("../sys/php/global.php");
  include("php/conexion.php");
  include ('funciones.php');
  $var1  = $_POST['var1'];
  $var2  = $_POST['var2'];
  $var3  = $_POST['var3'];
  $var4  = $_POST['var4'];
  $var5  = $_POST['var5'];
  $var6  = $_POST['var6'];
  $var7  = $_POST['var7'];
  $var8  = $_POST['var8'];
  $var9  = $_POST['var9'];
  $var10 = $_POST['var10'];
  $var11 = $_POST['var11'];
  $var12 = $_POST['var12'];
  $var13 = $_POST['var13'];

  $var14 = $_POST['var14'];
  $var15 = $_POST['var15'];
  $var16 = $_POST['var16'];
  $var17 = $_POST['var17'];
  $var18 = $_POST['var18'];
  $var19 = $_POST['var19'];
  $var20 = $_POST['var20'];

  $var21 = $var14;
  $var22 = $var15;
  $var23 = $var16;
  $var24 = $var17;
  $var25 = $var18;
  $var26 = $var19;
  $var27 = $var20;
  $var28 = ($var21+$var22+$var23+$var24+$var25+$var26+$var27)/7;
  $var28 = sindecimal($var28);
  $var29 = $var28;

  $presente = $_POST['presente'];
  $ausente = $_POST['ausente'];
  $retardo = $_POST['retardo'];

  $comentario = $_POST['comentario'];
  $comentario = addslashes($comentario);
  $connection = conecta("atsedu_boletaskinder");
  mysql_query ("update comentarios
                set comentario = '$comentario'
                where ciclo_id ='".$_SESSION['cicloactivo']."'
                and periodo = '".$_SESSION['periodoactivo']."'
                and matricula = '".$_SESSION['matricula']."'
                ",$connection);

  mysql_query ("update asistencia
                set presente = '$presente', ausente = '$ausente', retardo = '$retardo'
                where ciclo_id ='".$_SESSION['cicloactivo']."'
                and periodo = '".$_SESSION['periodoactivo']."'
                and matricula = '".$_SESSION['matricula']."'
                ",$connection);

  function actualiza_valor_db($aux1,$aux2,$aux3){
    mysql_query ("update calificaciones
                  set valor = '$aux1'
                  where ciclo_id ='".$_SESSION['cicloactivo']."'
                  and periodo = '".$_SESSION['periodoactivo']."'
                  and matricula = '".$_SESSION['matricula']."'
                  and materia = '$aux2'
                  ",$aux3);
  }
  actualiza_valor_db($var1,'1',$connection);
  actualiza_valor_db($var2,'2',$connection);
  actualiza_valor_db($var3,'3',$connection);
  actualiza_valor_db($var4,'4',$connection);
  actualiza_valor_db($var5,'5',$connection);
  actualiza_valor_db($var6,'6',$connection);
  actualiza_valor_db($var7,'7',$connection);
  actualiza_valor_db($var8,'8',$connection);
  actualiza_valor_db($var9,'9',$connection);
  actualiza_valor_db($var10,'10',$connection);
  actualiza_valor_db($var11,'11',$connection);
  actualiza_valor_db($var12,'12',$connection);
  actualiza_valor_db($var13,'13',$connection);
  actualiza_valor_db($var14,'14',$connection);
  actualiza_valor_db($var15,'15',$connection);
  actualiza_valor_db($var16,'16',$connection);
  actualiza_valor_db($var17,'17',$connection);
  actualiza_valor_db($var18,'18',$connection);
  actualiza_valor_db($var19,'19',$connection);
  actualiza_valor_db($var20,'20',$connection);
  actualiza_valor_db($var21,'21',$connection);
  actualiza_valor_db($var22,'22',$connection);
  actualiza_valor_db($var23,'23',$connection);
  actualiza_valor_db($var24,'24',$connection);
  actualiza_valor_db($var25,'25',$connection);
  actualiza_valor_db($var26,'26',$connection);
  actualiza_valor_db($var27,'27',$connection);
  actualiza_valor_db($var28,'28',$connection);
  actualiza_valor_db($var29,'29',$connection);
  echo '<script>location.href="boletas.php";</script>';
?>
