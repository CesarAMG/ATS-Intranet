<?php //ini_set("display_errors","1");
include "sys/php/global.php";
include "sys/php/conexion.php"; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<script src="<?php echo $server_name; ?>/sys/js/sweetalert2.all.min.js"> </script>
		<script src="<?php echo $server_name; ?>/sys/js/sweetalert2.min.js"> </script>
		<link rel="stylesheet" type="text/css" href="<?php echo $server_name; ?>/sys/css/sweetalert2.min.css">
    </head>
<body>
    <style>.swal2-icon.swal2-warning{
        font-size: 1rem !important;
    }
</style>
<?php
session_start();

$errors = array();

if (isset($_POST['username']) and isset($_POST['password'])) 
{
    $sq2 = "SELECT * FROM ciclos WHERE activo='1'";
    $rs2 = $mysqli->query($sq2);
        $row2 = $rs2->fetch_array(MYSQLI_ASSOC);
            $ciclo = $row2['name'];
            
    # code...
    $usuario = $mysqli->real_escape_string($_POST['username']);
    $pass = $mysqli->real_escape_string($_POST['password']);

    $query = 'SELECT * FROM usuarios_servicios WHERE cuenta="'.$usuario.'" ';
    $res = $mysqli->query($query);
    
    	if ($row = $res->fetch_array(MYSQLI_ASSOC)) 
    {
    
    		if($row["clave"]==$pass)
    			{
    				echo "<script>
                            Swal.fire({
                                icon: 'warning',
                                title: '¡Es necesario cambiar tu contraseña!',
                                button: 'OK',
                                })
                        .then(function() {
                                location.href = 'newpassword.php?user=$usuario';
                                });
                        </script>";  	
    			}  
        	# code...
       		 else if ($row["clave2"] == $pass) 
       		 	{
            # code...
					session_start();
                    $_SESSION['u_name']=$row['nombre'];
                	$_SESSION['cuenta']=$row['cuenta'];
                	$_SESSION['id_cta']=$row['id'];
                    $_SESSION['requi']=$row['requisicion'];
                    $_SESSION['seccion']=$row['seccion'];
                    $_SESSION['tipo']=$row['Tipo_usuario'];
                    $_SESSION['ciclo']=$row2['name'];

            			header("Location: $server_name/intranet");
        		}
        	else{
            		echo "<script>
                            Swal.fire({
                                icon: 'error',
                                title: '¡La contraseña es incorrecta!',
                                button: 'OK',
                                })
                        .then(function() {
                                location.href = 'index.php';
                                });
                        </script>";
        		}

    }else{
        echo "<script>
                            Swal.fire({
                                icon: 'error',
                                title: '¡El nombre de usuario es incorrecto!',
                                button: 'OK',
                                })
                        .then(function() {
                                location.href = 'index.php';
                                });
                        </script>";
    }
    $res->free();

}else{
	header("Location: $server_name");
}

$mysqli->close();
?>
</body>
</html>