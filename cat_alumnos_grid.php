<?php ini_set("display_errors","1");
/*$grados = $_POST['grados'];
$grupos = $_POST['grupos'];*/
require_once '../sys/js/jqgrid/php/PHPSuito/jq-config_boletas.php';

require_once ABSPATH2."php/PHPSuito/jqCalendar.php";
require_once ABSPATH2."php/PHPSuito/jqGrid.php";
require_once ABSPATH2."php/PHPSuito/DBdrivers/jqGridPdo.php";
$conn = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
$conn->query("SET NAMES utf8");
/*$grados = 'TDD';
$grupos = 'A';*/
if(isset($_REQUEST["grupos"]))
    $rowid = jqGridUtils::Strip($_REQUEST["grupos"],$_REQUEST["grados"]);
else
    $rowid = "";
    $grupos= jqGridutils::GetParam("grupos"); $grados= jqGridutils::GetParam("grados");

$grid = new jqGridRender($conn);
$sql="SELECT Id, grado, grupo, orden, matricula, clave, nombre, activo, promovido, boleta
      FROM alumnos
      WHERE  grado = '".$grados."' AND grupo = '".$grupos."'";
$grid->SelectCommand = $sql;
$grid->dataType = 'json';
$grid->table ="alumnos";
$grid->setPrimaryKeyId("Id");
$grid->setColModel();
$grid->setUrl('cat_alumnos_grid.php');
$grid->setGridOptions(array(
    "caption"=>"&nbsp;&nbsp;&nbsp;Catalogo de Alumnos",
    "height"=>550,
    "width"=>845,
    "rowNum"=>1000,
    "pgbuttons"=> false,
    "pgtext"=> null,
    "sortname"=>"orden",
    "shrinkToFit"=>false,
    "postData"=> array("grupos"=>$grupos, "grados"=>$grados),
    "sortorder"=>"asc",
    "scrollrows"=>true,
    "hoverrows"=>true));
$mycellattr = <<< CELLATTR
function (rowid, value, rawObject, colModel, arraydata) {
  if(rawObject['activo'] == "0"){
      return "style='background-color:#640000; opacity: .7; color:white;' class='myclass' ";}
  if(rawObject['promovido'] == "1"){
      return "style='background-color:#006400; opacity: .7; color:white;' class='myclass' ";}
}
CELLATTR;
$grid->setColProperty("	Id	     ",array("label"=>"	Id	",        "hidden"=>true		));
$grid->setColProperty("	grado	 ",array("label"=>"	grado",       "hidden"=>true		));
$grid->setColProperty("	grupo	 ",array("label"=>"	grupo",       "hidden"=>true		));
$grid->setColProperty("	orden	 ",array("label"=>"	NL	",        "width"=>	40, "editable"=>false,"editoptions"=>array("size"=>5),"cellattr"=>"js:".$mycellattr			));
$grid->setColProperty("	matricula",array("label"=>"	Matricula",   "width"=>	100,"editable"=>false,"editoptions"=>array("size"=>10),"cellattr"=>"js:".$mycellattr		));
$grid->setColProperty("	clave"    ,array("label"=>"	Clave	",    "width"=>	100,"editable"=>true,"editoptions"=>array("size"=>10),"cellattr"=>"js:".$mycellattr		));
$grid->setColProperty("	nombre	 ",array("label"=>"	Nombre 	",    "width"=>	280,"editable"=>true,"editoptions"=>array("size"=>30),"cellattr"=>"js:".$mycellattr		    ));
$grid->setColProperty("	activo	 ",array("label"=>"	Activo 	",    "width"=>	70, "editable"=>true,"edittype"=>"checkbox","formatter"=>'checkbox',"editoptions"=>array("value"=>'1:0'), "align"=>"center","cellattr"=>"js:".$mycellattr	));
$grid->setColProperty("	promovido",array("label"=>"	Promovido 	","width"=>	100,"editable"=>true,"edittype"=>"checkbox","formatter"=>'checkbox',"editoptions"=>array("value"=>'1:0'), "align"=>"center","cellattr"=>"js:".$mycellattr	));
$grid->setColProperty("	boleta"   ,array("label"=>"	Boleta Activa 	","width"=>	120,"editable"=>true,"edittype"=>"checkbox","formatter"=>'checkbox',"editoptions"=>array("value"=>'1:0'), "align"=>"center","cellattr"=>"js:".$mycellattr	));

$grid->navigator = true;
$grid->setNavOptions('navigator', array("excel"=>false,"add"=>false,"edit"=>true,"del"=>false,"view"=>false, "search"=>false,"refresh"=>false));
$grid->setNavOptions('edit',array("closeAfterEdit"=>true,"width"=>470,"height"=>'auto',"dataheight"=>'auto'));
$grid->renderGrid('#grid','#pager',true, null, null, true,true);
$conn = null;
?>
