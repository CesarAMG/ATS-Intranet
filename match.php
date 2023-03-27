<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?  include("php/global.php");
    include("php/conexion.php");
    function ordena(){
        $conexion =conecta("atsedu_boletaskinder");
        $sSQL="select * from alumnos order by matricula";
        $result = @mysql_query($sSQL,$conexion);

        $i = $row.length;
        while ($row = @mysql_fetch_array($result)){
                echo $l." -".$row["matricula"]." ".$row["grado"]." ".$row["grupo"]." ".$row["nombre"]."<br /> ";
                $l++;
        }
    return $l;
    }
    function compara(){
        $conexion =conecta("atsedu_ats");
        $sSQL="SELECT a.cuenta, b.matricula,b.grado,b.grupo,b.nombre,a.clave FROM
                             atsedu_ats.alumnos as a,
                             atsedu_boletaskinder.alumnos as b
                             WHERE a.cuenta = b.matricula order by b.matricula";/**/
/*        $sSQL="update atsedu_ats.alumnos as a, atsedu_boletaskinder.alumnos as b  set b.clave = a.clave FROM
                             WHERE a.cuenta = b.matricula";*/

        $result = @mysql_query($sSQL,$conexion);
        echo $sSQL;
        $l=1;
//        $i = $row.length;

        $matricula[]="";
        $clave[]="";
        echo $sSQL."<br />";
        while ($row = @mysql_fetch_array($result)){
                echo $l." -".$row[0]." ".$row[2]." ".$row[3]." ".$row[4]."<br /> ";
                $clave[$l]=$row[5];
                $matricula[$l]=$row[0];
                $l++;

        }/**/
        mysql_close($conexion);
        $conexion =conecta("atsedu_boletaskinder");
        for($i=1;$i<$l;$i++){
                $sql="UPDATE alumnos SET clave='$clave[$i]' WHERE matricula='$matricula[$i]'";
                echo $sql.'<br />';
                $rt = mysql_query($sql);
                echo $rt;
        }

    }
    $z=1;
    ordena();
    echo "<br /><br />";
    compara();
?>
