<!DOCTYPE html>
<html lang="hu">
<head>
   <title>valami</title>
   <meta charset="utf-8">
 </head>
 <body>
   <?php
        echo $_SERVER['SERVER_ADDR'],'<br />';

        $a = 10;
        echo $a,"<br />";
        $a += 5;
        echo $a,"<br />";

        echo ++$a,"<br />";
        echo $a,"<br />";

        echo $a++,"<br />";
        echo $a,"<br />";

        $c = 5;
        $d = $c;
        echo $c,' ',$d,"<br />";
        $c = 10;
        echo $c,' ',$d,"<br />";

        $e=5;
        $f= &$e;
        echo $e,' ',$f,"<br />";
        $e = 10;
        echo $e,' ',$f,"<br />";

        $vezeteknev = "Kovács";
        $keresztnev = "Péter";
        $nev = $vezeteknev . " " . $keresztnev;
        echo $nev,"<be />" ;

        $szoveg = "10.536";
        echo gettype($szoveg), '<br />';
        echo $szoveg + 5, "<br />";
        $szam = floatval($szoveg);
        echo gettype($szam),"<br />";
        echo $szam + 5, "<br />";
      ?>

 </body>
 </html>
