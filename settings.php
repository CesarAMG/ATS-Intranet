<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Report Cards</title>
<link href="css/principal.css" rel="stylesheet" type="text/css" />
<style>
#form {border:1px solid #0A7ABD;width:450px; margin:auto; }
#form legend{font-weight:bold;font-size:20px;color:#0A7ABD;}
#form ol{list-style:none;}
#form ol li{padding-bottom:5px;}
#form ol li label{width:170px;float:left;text-align:left; margin-left: 15px;}
#form input[type="text"],select {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	background: #eae7e7
	border: 1px solid #c8c8c8;
	color: #777;
	font: 13px Helvetica, Arial, sans-serif;
	margin: 0 0 10px;
	padding: 15px 10px 15px 40px;
	/*width: 80%;*/
}
#form input[type="text"]:focus,select:focus{
	-webkit-box-shadow: 0 0 2px #ed1c24 inset;
	-moz-box-shadow: 0 0 2px #ed1c24 inset;
	-ms-box-shadow: 0 0 2px #ed1c24 inset;
	-o-box-shadow: 0 0 2px #ed1c24 inset;
	box-shadow: 0 0 2px #ed1c24 inset;
	background-color: #fff;
	border: 1px solid #ed1c24;
	outline: none;
}
#form input.btn {padding:3px;color:#FFFFFF;background-color:#990000;border:1px solid #000000; right: 5px;  }
</style>
<?php
include "../sys/php/global.php"; include "php/conexion.php";
$query ="SELECT * From configuracion where Id='3' limit 1";
$rs = $mysqli->query($query);
$rw = $rs->fetch_array(MYSQLI_ASSOC);
$per=$rw['periodocaptura'];
$ces=$rw['cicloescolar'];
$bol=$rw['boletavisible'];
?>
</head>
<body>
<h1>THE AMERICAN SCHOOL OF TAMPICO</h1>
<h2>Report Cards Early Childhood</h2>
<hr size="6" color="#0A7ABD" />
<form name="alumno" action="savesettings.php" method="post">
<fieldset id="form">
<legend>    [ SETTINGS ]</legend>
 <ol>
  <br /><br />
  <li><label>Periodo de Captura:</label> <input name="periodo" type="text" size="20" maxlength="1" value="<?php echo $per; ?>" /></li>
  <li><label>Ciclo escolar:</label><input name="ciclo" type="text" size="20" maxlength="9" value="<?php echo $ces; ?>"/></li>
  <li><label>Boletas Activas:</label>
  <select name="activo" size="1">
   <?php
   if ($bol=='0'){
     echo '
       <option value="0" selected>NO</option>
       <option value="1">SI</option>
     ';}else{
     echo '
       <option value="0">NO</option>
       <option value="1" selected>SI</option>';
     }
   ?>
  </select></li>
  <li><label>&nbsp;</label><input type="submit" name="Enviar" value=" Save " /></li><br /><br />
 </ol>
</fieldset>
</form>
</body>
</html>
