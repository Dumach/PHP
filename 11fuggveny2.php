<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    require_once("fuggveny.php");
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Árazás függvénnyel</title>
        <meta charset="UTF-8">
    </head>
    <?php
        $arak = array(100, 200, 500, 1000);
        echo "Eredeti árak<br />";
        echo "<pre>";
        print_r($arak);
        echo "</pre>";
        $valt = 0.1; //10%-os növelés
        araz($arak, $valt);
        echo $valt*100 . " %-os növelás <br/>";
        echo "Megnövelt árak<br/>";
        echo "<pre>";
        print_r($arak);
        echo "</pre>";
    ?>
</html>