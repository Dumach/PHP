<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
    require_once("14tanulo_class.php");
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Iskola osztály</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $sanyi = new tanulo("Sanyi");
            echo $sanyi->nev;
            echo "<br>";
            for($i = 0; $i<5;$i++){
                $random = rand(1,5);
                $sanyi->jegyetKap($random);
                echo $random.", ";
            }
            /*$sanyi->jegyetKap(4);
            $sanyi->jegyetKap(3);*/
            $sanyi->atlagszam();
            echo "<br>";
            echo $sanyi->atlag;
            echo "<pre>";
            var_dump($sanyi);
            echo "</pre>";
        ?>
    </body>
</html>