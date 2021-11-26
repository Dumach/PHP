<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
    require_once("13auto_class.php");
?>
<!DOCTYPE HTML>
<html lang="hu">
    <head>
        <title>Osztályok, objektumok</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $trabant = new automobil("benzin");
            echo "<pre>";
            var_dump($trabant);
            echo "</pre>";

            $trabant->tankol(25);
            echo "<pre>";
            var_dump($trabant);
            echo "</pre>";

            unset($trabant);

            $opel = new automobil("dizel");
            echo "<pre>";
            var_dump($opel);
            echo "</pre>";

            $opel->tankol(14);
            echo "<pre>";
            var_dump($opel);
            echo "</pre>";

            echo $opel->uzemanyangMennyiseg . "<br />";
            echo $opel->uzemanyagTipus . "<br />";
        ?>
    </body>
</html>