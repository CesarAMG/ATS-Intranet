<?php ini_set("display_errors","1"); session_start();
$cuenta=strip_tags(htmlentities(htmlspecialchars(trim($_POST['username']))));
$pass=strip_tags(htmlentities(htmlspecialchars(trim($_POST['password']))));

$admin=0;
$esta= '';
function verifica_login($cuenta,$pass){
include "../sys/php/global.php"; include "php/conexion.php";
   $esta = false;
   $mysqli->set_charset("utf8");
   $query ="SELECT * From maestros where username='".$cuenta."' and password='".$pass."' limit 1";
   $resultados = $mysqli->query($query);
   $row = $resultados->fetch_array(MYSQLI_ASSOC);
   $maestros = $resultados->num_rows;

   $query ="SELECT * From configuracion where Id='3' limit 1";
   $rs = $mysqli->query($query);
   $rw = $rs->fetch_array(MYSQLI_ASSOC);


   if ($maestros> 0 ){
       $esta=true;
       global $admin;
       $_SESSION['admin']= $row['admin'] ;
       $_SESSION['cicloactivo'] = '1';//mysql_result ($resultado,0,'ciclo_act');
       $_SESSION['periodoactivo'] = $rw['periodocaptura'];
       $_SESSION['grupo']=$row['grupo'];
       $_SESSION['nombre'] = $row['nombre'];
       $_SESSION['grado'] =  $row['grado'];
   }else{
     $esta=false;
	}
  // mysqli_close($conexion);
   return $esta;
}

$Entra = verifica_login($cuenta,$pass);
if ($Entra){
    echo'
	<form name= "lo_gin"  action="tools.php" method="post">
	 	<input hidden name="username" value='.$cuenta.'>
	 	<input hidden name="admin" value='.$admin.'>
	</form>
	<script language="javascript">
	document.forms.lo_gin.submit();
	</script>';
}else{
    echo'
    <form name= "lo_gin"  action="index.php" method="post">
         <input hidden name="existe" value= "no">
	</form>
	<script language="javascript">
	document.forms.lo_gin.submit();;
	</script>
	';
}

?>
