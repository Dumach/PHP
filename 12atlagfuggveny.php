<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    //Átlagszámítás jegyekből
    function atlagSz(&$tomb)
    {
        $osszes = 0;
        $jegyek = explode(' ' , $tomb);
        for ($i = 0;$i<count($jegyek);$i++)
        {
            $osszes += $jegyek[$i];
        }
        return ($osszes / count($jegyek)*1.0);
    }
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
                echo "Jegyedi átlaga: ". $atlagSz($tomb);
            }
        ?>
    </body>
</html>