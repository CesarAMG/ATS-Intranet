<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?
if($boton) {
  if (is_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'])) {
    copy($HTTP_POST_FILES['archivo']['tmp_name'], $HTTP_POST_FILES['archivo']['name']);
    $subio = true;
  }
  if($subio) {
    echo "El archivo subio con exito <br><br> Integrando registros... <br><br>";
    set_time_limit(0);
    require_once 'php/Excel/reader.php';// ExcelFile($filename, $encoding);
    $data = new Spreadsheet_Excel_Reader();// Set output Encoding.
    $data->setOutputEncoding('CP1251');
    $data->read($HTTP_POST_FILES['archivo']['name']);
    error_reporting(E_ALL ^ E_NOTICE);
    echo "<br><br>";
    include("php/global.php");
    include("php/conexion.php");
    $conexion = conecta("atsedu_boletaskinder");
    $xx=0;
    for ($i = 5; $i <= $data->sheets[0]['numRows']; $i++) {
        $ciclo      ='1';
        $matricula  =$data->sheets[0]['cells'][$i][2];
        $nombre     =$data->sheets[0]['cells'][$i][3];
        $apellido   =$data->sheets[0]['cells'][$i][4];
        $grado      =$data->sheets[0]['cells'][$i][5];
        $grupo      =$data->sheets[0]['cells'][$i][6];
        $orden      =$data->sheets[0]['cells'][$i][7];
        $activo     ='1';
        $name=$apellido.' '.$nombre;
        switch ($grado) {
          case "T1":$GD="TDD";break;
          case "P1":$GD="PK1";break;
          case "P2":$GD="PK2";break;
          case "0K":$GD="K";break;
          case "PF":$GD="PF";break;
        }
        $aux="INSERT INTO alumnos (ciclo_id,grado,grupo,matricula,nombre,orden,activo)
        VALUES ('$ciclo','$GD','$grupo','$matricula','$name','$orden','$activo')";
        $xx++;
        echo $xx.' '.$name.' <br />';
        mysql_query($aux);
    }
  }else{
      echo "ya existe el archivo en la base de datos";
  }
}
?>
<html>
<head>
<title>Subir archivos</title>
</head>
<body>
<h1>Subir archivos</h1>
<br>
 <form action="<?=$PHP_SELF?>" method="post" enctype="multipart/form-data" name="form1">
<p align="center">Archivo
<input name="archivo" type="file" id="archivo">
<input name="boton" type="submit" id="boton" value="Enviar">
</p>
</form>
</body>
</html>
