<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    require_once("12atlagszamfugg.php");
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Jegy átlag számítás</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if(!isset($_POST["elkuld"]))
            {
            echo "Nem küldött semmit :((";
            }
            else {
                $tomb = $_POST["szoveg"];
                $tomb = trim($tomb);
                echo "Jegyeid átlaga: ". atlagSz($tomb);
            }
        ?>
    </body>
</html>