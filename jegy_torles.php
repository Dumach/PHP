<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  require_once("connection.php");
  require_once("jegy_torles_tablazat.php");
  if($adatbazis->connect_errno)
  {
        printf("Adatbázis kapcsolati hiba: %s\n" , $adatbazis->connection_error);
        exit();
  }
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Jegyeket törlő űrlap</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if(isset($_POST["valaszt"]))
            {
                $tanuloNev = $_POST["tanuloNev"];
                $tantargyNev = $_POST["tantargyNev"];
                echo "<p>$tanuloNev tanuló osztályzatai $tantargyNev";
                $lekerdezes = "SELECT osztalyzat.id , osztalyzat.datum, osztalyzat.jegy FROM osztalyzat 
                inner join tantargy on tantargy.id=osztalyzat.tantargyID
                inner join tanulo on tanulo.id=osztalyzat.tanuloID
                WHERE tanulo.nev='$tanuloNev' AND tantargy.nev='$tantargyNev'
                ORDER BY osztalyzat.datum";
                $eredmeny = $adatbazis->query($lekerdezes);
                if(!$adatbazis->error)
                {
                    while($sorok[]=$eredmeny->fetch_array(MYSQLI_ASSOC));
                    unset($sorok[count($sorok)-1]);
                    $tablazat = new tablazat(1, $sorok);
                    $tablazat->kiir();  

                    echo "<form method='post' action='#'>";
                        echo "<select name='jegyID'>";
                            for($i=0;$i<count($sorok);$i++)
                            {
                                echo "<option>".$sorok[$i]['id']."</option>";
                            }
                        echo "</select>";
                        echo "<input type='submit' name='torles' value='Jegy torlese'>";
                    echo "</form>";
                }
            }

            $tanulolekedzes = "SELECT nev FROM tanulo";
            $eredmeny1 = $adatbazis->query($tanulolekedzes);
            while($tanulok[] = $eredmeny1->fetch_array(MYSQLI_ASSOC));

            $tantargylekedzes = "SELECT nev FROM tantargy";
            $eredmeny2 = $adatbazis->query($tantargylekedzes);
            while($tantargyak[] = $eredmeny2->fetch_array(MYSQLI_ASSOC));            
            
            /*echo "<pre>";
            print_r($tantargyak);
            echo "</pre>";*/

            echo "<h3>Program jegyek törléséhez</h3>";
            if(isset($_POST["torles"]))
            {
                $id = $_POST["jegyID"];
                $torles = "DELETE FROM osztalyzat WHERE id='".$id."'";
                if($adatbazis->query($torles))
                {
                    echo "<p>Az előző törlés sikeres volt!</p>";
                }
                else
                {
                    echo "<p>Az előző törlés nem sikerült!</p>";
                    echo "<p>".$adatbazis->error."</p>";
                }
            }
            echo "<p>Válassza ki a tanulót és a tantárgyat</p>";

            echo "<form method='post' action='#'>";
            echo "<table>";
                echo "<tr>";
                    echo "<td>A tanuló neve</td>";
                    echo "<td>";
                        echo "<select name='tanuloNev'";
                        for($i=-1;$i<count($tanulok)-1;$i++)
                        {
                            if($tanulok[$i] != "")echo "<option>".$tanulok[$i]['nev']."</option>";
                        }
                        echo "</select>";
                    echo "</td>";
                    echo "<td>A tantárgy neve</td>";
                    echo "<td>";
                        echo "<select name='tantargyNev'";
                        for($k=-1;$k<count($tantargyak)-1;$k++)
                        {
                            if($tantargyak[$k] != "")echo "<option>".$tantargyak[$k]['nev']."</option>";
                        }
                        echo "</select>";
                    echo "</td>";    
                echo "</tr>";

                echo "<tr>";
                    echo '<td colspan="4"><input type="submit" name="valaszt" value="Küldés"></td>';
            echo "</table>";

        ?>
    </body>
</html>