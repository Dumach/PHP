<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once("15tablazat_class.php");
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
        <title>Jegyeket lekerdezo PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if(!isset($_POST["elkuld"]))
            {
                echo "Nem küldött semmit :((";
            }
            else 
            {    
                $nev = $_POST["tanuloNev"];
                $tantargy = $_POST["tantargyNev"];
                echo "$nev tanuló osztályzatai $tantargy tantárgyból";
                echo "<br>";
                $lekerdezes = "SELECT tanulo.nev as tanulonev,tantargy.nev as tantargynev,osztalyzat.jegy,osztalyzat.datum
                FROM tanulo 
                    inner join osztalyzat on osztalyzat.tanuloID = tanulo.id 
                    inner join tantargy on tantargy.id=osztalyzat.tantargyID 
                WHERE tantargy.nev = '$tantargy' AND tanulo.nev = '$nev'";
                $eredmeny = $adatbazis->query($lekerdezes);
                /*echo "Lekérdezés eredmény-objektum kiíratása<br />";
                echo "<pre>";
                print_r($eredmeny);
                echo "</pre>";*/                            

                while($sorok[]=$eredmeny->fetch_array(MYSQLI_ASSOC));
                //echo "Eredmény áttöltése tömbbe<br/>";
                unset($sorok[count($sorok)-1]);
                $tabla = new tablazat(1 , $sorok);
                $tabla->kiir();
                unset($tabla);
                echo "<br />";
            }
        ?>
    </body>
</html>