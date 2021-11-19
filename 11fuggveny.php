<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    //ÁFA számítást végző függvény
    function afa($netto , $tipus)
    {
        switch($tipus)
        {
            case "könyv":
                $afa = $netto * 0.05;
                break;

            case "tej":
                $afa = $netto * 0.18;
                break;
                
            default:
                $afa = $netto *0.27;
        }
        return $afa;
    }   
?>
<!DOCTYPE html>
<html lang="hu">
    <?php
        $cikk = array(
            array("Túrórudi" , "tej" , 100),
            array("Autógumi" , "műszaki" , 20000),
            array("Egri csillagok" , "könyv" , 3000)
        );
        echo "<table border=1>";
        echo "<tr>";
        echo "<td>Termék neve</td>
              <td>Termék típusa</td>
              <td>Nettó</td>
              <td>Áfa</td>
              <td>Bruttó</td>";
        echo "</tr>";
        for ($i = 0; $i<3; $i++)
        {
            echo "<tr>";
                echo "<td>".$cikk[$i][0]."</td>";
                echo "<td>".$cikk[$i][1]."</td>";
                echo "<td>".$cikk[$i][2]."</td>";
                $x = afa($cikk[$i][2], $cikk[$i][1]);
                echo "<td>".$x."</td>";
                $y = $cikk[$i][2] + $x;
                echo "<td>".$y."</td>";
            echo "</tr>";
        }
    ?>
</html>