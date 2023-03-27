<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?

    include("php/global.php");
    include("php/conexion.php");
    function ordena($grado,$grupo){
    $conexion = conecta("atsedu_boletaskinder");
    $sSQL="select * from alumnos where grado = '$grado' and grupo='$grupo' order by nombre";
    $result = mysql_query($sSQL,$conexion);
    //$row = mysql_fetch_array($result) ;
    $looping = 1;
    $i = $row.length;
    while ($row = mysql_fetch_array($result)){
            echo $looping." ".$row["grado"]." ".$row["grupo"]." ".$row["nombre"]."<br />" ;
            $matricula=$row["matricula"];
            $sSQL="update alumnos set orden='$looping' where matricula = '$matricula'";
            $rs = mysql_query($sSQL,$conexion);
            $looping++;
    }
    }
    ordena("TDD","A");
    ordena("TDD","B");
    ordena("PK1","A");
    ordena("PK1","B");
    ordena("PK1","C");
    ordena("PK1","D");
    ordena("PK2","A");
    ordena("PK2","B");
    ordena("K","A");
    ordena("K","B");
    ordena("PF","A");
    ordena("PF","B");
    ordena("PF","C");

?>
