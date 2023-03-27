<?php ini_set("display_errors","1"); session_start();
include "../sys/php/global.php"; include "php/conexion.php";?>
<!--<script src="js/jquery-1.7.2.js" type="text/javascript"></script>  -->
<script src="js/jquery-3.6.0.js" type="text/javascript"></script>
<script src="../sys/js/jqgrid/js/trirand/i18n/grid.locale-en.js" type="text/javascript"></script>
<script src="../sys/js/jqgrid/js/trirand/jquery.jqGrid.min.js" type="text/javascript"></script>
<script src="../sys/js/jqgrid/js/jquery-ui.min.js" type="text/javascript"></script>
<!--/*<script src="js/mayus.js" type="text/javascript"></script> */  -->
<link rel="stylesheet" type="text/css" media="screen" href="css/principal.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../sys/js/jqgrid/css/redmond/jquery-ui.theme.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../sys/js/jqgrid/css/trirand/ui.jqgrid.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../sys/js/jqgrid/css/jquery.multiselect.css" />
<script type="text/javascript">
	$.jgrid.no_legacy_api = true;
	$.jgrid.useJSON = true;
   	var lastSelection;
    function selecionar(){
      var grados=$("#grados").val();
      var grupos =$("#grupos").val();
      jQuery("#grid").jqGrid('setGridParam',{ postData:{ grupos:grupos, grados:grados  }});
      jQuery("#grid").trigger("reloadGrid");
    }
    $(function() {
      $( "#dialog-message" ).dialog({
        modal: true, autoOpen: false,
        buttons: { Ok: function() { $( this ).dialog( "close" ); } }
      });
    });
</script>
<h1>THE AMERICAN SCHOOL OF TAMPICO</h1>
<h2>Report Cards Early Childhood</h2>
<hr size="6" color="#0A7ABD" />
<table width="700px" cellpadding="0" cellspacing="0" align="center" border="0">
<tr style="height: 12px">
<td>
   <form id="vas" style="margin: 0px">
    <table>
    <tr><td>Grado:</td>
        <td><select id="grados" name="grados" onchange="selecionar()" >
              <option value="TDD">TDD</option>
              <option value="PK1">PK1</option>
              <option value="PK2">PK2</option>
              <option value="K">K</option>
              <option value="PF">PF</option>
            </select> </td>
        <td>Grupo:</td>
        <td><select id="grupos" name="grupos" onchange="selecionar()" >
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
            </select></td>
    <td><input type="button" name="Seleccionar" value="Seleccionar" onclick="selecionar()" /><input type="button" name="salir" value="Salir" onclick="location.href='tools.php'" /></td>
    </tr>
    </table>
    </form>
</td>
</tr>
<tr>
<td>
    <?php include "cat_alumnos_grid.php";?>
</td>
</tr>
</table>
<div id="dialog-message" title="Error" >
    <p><span style="float:left; margin:0 7px 50px 0;"><img src="img/alert.png" border="0" /></span>
     <br /><b>Selecciona un registro</b> por favor...  </p>
</div>
