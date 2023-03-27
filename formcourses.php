<?php
    session_start();//$id=$_SESSION['id_cta'];
    include "system/php/_globales.php";
    include "system/php/_conexion.php";
    $conexion = conecta();
     mysql_query ("SET NAMES 'utf8'");
    if($op==2){
    $SQL ="SELECT * FROM usuarios_cursos WHERE id='".$idcurso."'";
    $rs=@mysql_query($SQL);
    $c=@mysql_fetch_array($rs);
    $title=$c['title'];
    $hours=$c['hours'];
    $sponsored=$c['sponsored'];
    $date=$c['date'];
    $year=$c['year'];
    }
?>
<script type="text/javascript">
    $(function() {
        $("#fecha").datepicker({dateFormat: 'dd/mm/yy'});
        $("#fechalim").datepicker({dateFormat: 'dd/mm/yy'});

    });
   function savedata(){
      var op=$('#op').val();
      var idcurso=$('#idcurso').val();
      var idcta_per=$('#idcta_per').val();
      var title=$('#title').val();
      var hours=$('#hours').val();
      var sponsored=$('#sponsored').val();
      var date=$('#date').val();
      var year=$('#year').val();
     $.ajax({ data:'op='+op+'&idcta_per='+idcta_per+'&title='+title+'&hours='+hours+'&sponsored='+sponsored+'&date='+date+'&year='+year+'&idcurso='+idcurso,
            type: "POST",
            dataType: "json",
            url: "savecourse.php",
            success: function(data){
                //$("#ajax-dialog").dialog("close");
              }
    });
   }
   //-----------------------------------------------------------------------------------
   function cancel(){
      $("#ajax-dialog").dialog("close");
    }
    function stopRKey() {
      if (keyCode == 13) {savedata();}
    }
  // document.onkeypress = stopRKey;*/
   //onkeydown="stopRKey(event);"
	</script>
<form id="grabar" method="post" >
<input id="op" name="op" size="50" style="text-align:left" type="hidden" value="<?echo trim($op);?>"/>
<input id="idcurso" name="idcurso" size="50" style="text-align:left" type="hidden" value="<?echo trim($idcurso);?>"/>
<input id="idcta_per" name="idcta_per" size="50" style="text-align:left" type="text" value="<?echo trim($idcta_per);?>"/>
<fieldset>
  <legend>[ Courses ]</legend>
      <table width="100%">
            <tr><td style="width:15%">Title: </td><td style="width:85%"><input id="title" name="title" size="50" onkeypress="stopRKey()" style="text-align:left" value="<?echo trim($title);?>"/></td></tr>
            <tr><td style="width:15%">Hours: </td><td style="width:85%"><input id="hours" name="hours" size="50" onkeypress="stopRKey()" style="text-align:left" value="<?echo trim($hours);?>"/></td></tr>
            <tr><td style="width:15%">Sponsored: </td><td style="width:85%"><input id="sponsored" name="sponsored" size="50" onkeypress="stopRKey()" style="text-align:left" value="<? echo trim($sponsored);?>"/></td></tr>
            <tr><td style="width:15%">Date: </td><td style="width:85%"><input id="date" name="date" size="50" onkeypress="stopRKey()" style="text-align:left" value="<? echo trim($date);?>"/></td></tr>
            <tr><td style="width:15%">Year: </td><td style="width:85%"><input id="year" name="year" size="50" onkeypress="stopRKey()" style="text-align:left" value="<? echo trim($year);?>"/></td></tr>
      </table>
  </fieldset>
  <br />

<div style=" width: 100%; text-align: center">
<!--<input type="button" name="Ver" value="Ver Docs" onclick="verdocs()" disabled="disabled"/> -->
<hr />
 <button id="button" class="ui-button ui-state-default ui-button-text-only" onclick="savedata()" role="button" aria-disabled="false">
            <span class="ui-button-text">Save</span>
        </button>
<!--<input type="button" name="Guardar" value="Aceptar" onclick="" />-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button id="button" class="ui-button ui-state-default ui-button-text-only" onclick="cancel()" role="button" aria-disabled="false">
            <span class="ui-button-text">Cancel</span>
        </button>
<!--<input type="button" name="Cancelar" value="Cancelar" onclick=""/>    -->

</div> </form>
