<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
    require_once("17auto_classV3.php");
?>
<!DOCTYPE HTML>
<html lang="hu">
    <head>
        <title>Osztályok, objektumok</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $mercedes = new taxi("benzin", 45, 7.6 , 200);
            echo "<pre>";
            var_dump($mercedes);
            echo "</pre>";

            echo "Tankolunk 50 litert";
            $mercedes->tankol(50);
            echo "<pre>";
            var_dump($mercedes);
            echo "</pre>";

            echo "Megyünk 500km-ert vele";
            $mercedes->megy(500);
            echo "<pre>";
            var_dump($mercedes);
            echo "</pre>";

            echo "Taxi 50km";
            $mercedes->fuvar(50);
            echo "<pre>";
            var_dump($mercedes);
            echo "</pre>";

            echo "Taxi 100km";
            $mercedes->fuvar(100);
            echo "<pre>";
            var_dump($mercedes);
            echo "</pre>";
        ?>
    </body>
</html>