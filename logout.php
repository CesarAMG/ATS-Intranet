<?php session_start();
  if  (empty($_SESSION['nombre'])){
    echo '<h2>No hab&iacute;a sesi&oacute;n, no se puede hacer Log Out.<br><br><a href = "index.php">Ir a p&aacute;gina de Log In</a></h2>';
    exit;
  }else{
    if (session_destroy()){echo '<script>location.href="index.php";</script>'; }
    else{echo '<h2>No se pudo hacer Log Out!, contacte al administrador.<br></h2>';}
  }?>
