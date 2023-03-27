<?php //ini_set("display_errors","1");
include "sys/php/global.php";
include "sys/php/conexion.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<script src="<?php echo $server_name; ?>/sys/js/sweetalert2.all.min.js"> </script>
		<script src="<?php echo $server_name; ?>/sys/js/sweetalert2.min.js"> </script>
		<link rel="stylesheet" type="text/css" href="<?php echo $server_name; ?>/sys/css/sweetalert2.min.css">
    </head>
<body>
<?php
//session_start();

 $username = $_POST['user'];
 $newpassword = $_POST['newpassword'];
 $password2 = $_POST['password2'];

 $sq2 = "SELECT * FROM ciclos WHERE activo='1'";
    $rs2 = $mysqli->query($sq2);
        $row2 = $rs2->fetch_array(MYSQLI_ASSOC);
            $ciclo = $row2['name'];
 
 if(strcmp($newpassword,$password2)==0){
 	$sql = "UPDATE usuarios_servicios SET clave='OK', clave2='".$newpassword."' WHERE cuenta='".$username."'";
 	$rst = $mysqli->query($sql);
 	
 	
 	$sq = "SELECT * FROM usuarios_servicios WHERE cuenta='".$username."' && baja='0' LIMIT 1";
    $rs = $mysqli->query($sq);
    $row = $rs->fetch_array(MYSQLI_ASSOC);
        
 	if ($rst === false) {
		echo "SQL Error1: " . $mysqli->error;
	} else {
		session_start();
		$_SESSION['u_name']=$row['nombre'];
    	$_SESSION['cuenta']=$row['cuenta'];
    	$_SESSION['id_cta']=$row['id'];
        $_SESSION['requi']=$row['requisicion'];
        $_SESSION['seccion']=$row['seccion'];
        $_SESSION['tipo']=$row['Tipo_usuario'];
        $_SESSION['ciclo']=$row2['name'];
		echo "
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Se actualizo correctamente!',
                        button: 'OK',
                    })
                    .then(function() {
						location.href = '$server_name/intranet';
                    });
                </script>  ";
	}
 }else{
 	echo "
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'No coinciden las contraseñas!',
                        button: 'OK',
                    })
                    .then(function() {
						location.href = 'newpassword.php';
                    });
                </script>  ";
 }

$mysqli->close();
?>
</body>
</html>