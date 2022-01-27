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
        <title>Jegyeket adó program</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

            if(isset($_POST["beir"]))
            {
                $tanuloNev = $_POST["tanuloNev"];
                $tantargyNev = $_POST["tantargyNev"];
                $datum = $_POST["datum"];
                $osztalyzat = $_POST["osztalyzat"];

                //tanuloID lekerdezese
                $tanuloIDLekerdezes = "SELECT id FROM tanulo WHERE nev='".$tanuloNev."'";
                $eredmenytanuloID = $adatbazis->query($tanuloIDLekerdezes);
                while($diakok[] = $eredmenytanuloID->fetch_array(MYSQLI_ASSOC));
                $tanuloID = $diakok[0]["id"];


                //tantargyID lekerdezese
                $tantargyIDLekerdezes = "SELECT id FROM tantargy WHERE nev='".$tantargyNev."'";
                $eredmenytantargyID = $adatbazis->query($tantargyIDLekerdezes);
                while($tantargyak[] = $eredmenytantargyID->fetch_array(MYSQLI_ASSOC));
                $tantargyID = $tantargyak[0]["id"];

                $beszur = "INSERT INTO osztalyzat (tanuloID,tantargyID,datum,jegy)
                            VALUES('".$tanuloID."','".$tantargyID."','
                            ".$datum."','".$osztalyzat."')";
                
                if($adatbazis->query($beszur))
                {
                    echo "<p>Az osztályzat beírása sikeres volt!</p>";
                }
                else
                {
                    echo "<p> Az osztályzat beírása sikertelen volt!</p>";
                    echo "<p>".$adatbazis->error."</p>";
                }
            }

           $tanulolekedzes = "SELECT nev FROM tanulo";
           $eredmeny1 = $adatbazis->query($tanulolekedzes);
           while($tanulok[] = $eredmeny1->fetch_array(MYSQLI_ASSOC));

           unset($tantargyak);
           $tantargylekedzes = "SELECT nev FROM tantargy";
           $eredmeny2 = $adatbazis->query($tantargylekedzes);
           while($tantargyak[] = $eredmeny2->fetch_array(MYSQLI_ASSOC));            
        
            echo "<pre>";
            print_r($tantargyak);
            echo "</pre>";
           $jegyek = array(1,2,3,4,5);

           echo "<h3>Űrlap osztályzat beírásához</h3>";
           echo "<form method='post' action='#'>";
           echo "<table>";
                echo "<tr>";
                    echo "<td>A tanuló neve</td>";
                    echo "<td>";
                        echo "<select name='tanuloNev'>";
                        for($i=0;$i<count($tanulok)-1;$i++)
                        {
                            if($tanulok[$i]['nev'] != "")echo "<option>".$tanulok[$i]
                            ['nev']."</option>";
                        }
                    echo "</select>";
                echo "</td>";
            echo "</tr>";

            echo "<tr>";
                    echo "<td>A tantárgy neve</td>";
                    echo "<td>";
                        echo "<select name='tantargyNev'>";
                        for($i=0;$i<count($tantargyak)-1;$i++)
                        {
                            echo "<option>".$tantargyak[$i]
                            ['nev']."</option>";
                        }
                    echo "</select>";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Dátum</td>";
                echo "<td>";
                    echo "<input type='date' name='datum' value='".date('Y-m-d')."' required />";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Osztályzat</td>";
                    echo "<td>";
                        echo "<select name='osztalyzat'>";
                        for($i=0;$i<count($jegyek);$i++)
                        {
                            echo "<option>".$jegyek[$i]."</option>";
                        }
                        echo "</select>";
                    echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo '<td colspan="2"><input type="submit" name="beir" value="Jegy beírása"></td>';
            echo "</tr>";
            echo "</table>";
        ?>
    </body>
</html>