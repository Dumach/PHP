<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  require_once("connection.php");
  if($adatbazis->connect_errno)
  {
        printf("Adatbázis kapcsolati hiba: %s\n" , $adatbazis->connection_error);
        exit();
  }
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Jegyeket lekérdező űrlap</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $tanulolekedzes = "SELECT nev FROM tanulo";
            $eredmeny1 = $adatbazis->query($tanulolekedzes);
            while($tanulok[] = $eredmeny1->fetch_array(MYSQLI_ASSOC));

            $tantargylekedzes = "SELECT nev FROM tantargy";
            $eredmeny2 = $adatbazis->query($tantargylekedzes);
            while($tantargyak[] = $eredmeny2->fetch_array(MYSQLI_ASSOC));            
            
            echo "<pre>";
            print_r($tantargyak);
            echo "</pre>";

            echo "<h3>Űrlap osztályzatok lekérdezéséhez</h3>";
            echo "<p>Válassza ki a tanulót és a tantárgyat</p>";

            echo "<form method='post' action='urlap_sql_program.php'>";
            echo "<table>";
                echo "<tr>";
                    echo "<td>A tanuló neve</td>";
                    echo "<td>";
                        echo "<select name='tanuloNev'";
                        for($i=-1;$i<count($tanulok)-1;$i++)
                        {
                            echo "<option>".$tanulok[$i]['nev']."</option>";
                        }
                        echo "</select>";
                    echo "</td>";
                    echo "<td>A tantárgy neve</td>";
                    echo "<td>";
                        echo "<select name='tantargyNev'";
                        for($k=-1;$k<count($tantargyak)-1;$k++)
                        {
                            echo "<option>".$tantargyak[$k]['nev']."</option>";
                        }
                        echo "</select>";
                    echo "</td>";    
                echo "</tr>";

                echo "<tr>";
                    echo '<td colspan="4"><input type="submit" name="elkuld" value="Küldés"></td>';
            echo "</table>";

        ?>
    </body>
</html>