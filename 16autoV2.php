<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
    require_once("16auto_classV2.php");
?>
<!DOCTYPE HTML>
<html lang="hu">
    <head>
        <title>Osztályok, objektumok</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $mercedes = new benzinesAuto(95);
            $mercedes->tankol(30);
            echo "<pre>";
            var_dump($mercedes);
            echo "</pre>";
        ?>
    </body>
</html>