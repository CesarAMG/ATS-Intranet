<style>
#form {border:1px solid #990000;width:450px; margin:auto; }
#form legend{font-weight:bold;font-size:12px;}
#form ol{list-style:none;}
#form ol li{padding-bottom:5px;}
#form ol li label{width:120px;float:left;text-align:left;}
#form input[type=text] {font-size:12px;border:1px solid #CCCCCC;}
#form input.btn {padding:3px;color:#FFFFFF;background-color:#990000;border:1px solid #000000; right: 5px;  }
</style>
<form name="alumno" action="nuevoalumno.php" method="post">
<fieldset id="form">
<legend>[ New Student ]</legend>
 <ol>
  <hr />
  <li><label>Account:</label> <input name="matricula" type="text" size="6" /></li>
  <li><label>Name:</label><input name="nombre" type="text" size="40"  /></li>
  <li><label>Lastname:</label><input name="apellido" type="text" size="40" /></li>
  <li><label>Grade:</label>
  <select name="grado" size="1">
    <option value="TDD">TDD</option>
    <option value="PK1">PK1</option>
    <option value="PK2">PK2</option>
    <option value="K">K</option>
    <option value="PF">PF</option>
  </select></li>
  <li><label>Group:</label><input name="grupo" type="text" size="1" /></li>
  <hr />
  <li><label>&nbsp;</label><input type="submit" name="Enviar" class="btn" value=" Save " /></li>
 </ol>
</fieldset>
</form>