<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
    require_once("15tablazat_class.php");
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>tablazat</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $adat = array(array("Név" => "Benő" , "Matek" => 5 , "Prog" => 4),
            array("Név" => "Jancsi" , "Matek" => 3 , "Prog" =>5),
            array("Név" => "Sára" , "Matek" => 4 , "Prog" => 3),
            array("Név" => "Izé" , "Matek" => 4 , "Prog" => 4));
            $tabla = new tablazat(1 , $adat);
            $tabla->kiir();
            echo "<pre>";
            var_dump($adat);
            echo "</pre>";
        ?>
    </body>
</html>
