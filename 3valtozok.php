<!DOCTYPE html>
<html lang="hu">
<head>
   <title>valami</title>
   <meta charset="utf-8">
 </head>
 <body>
   <?php
      $ar = 1500;
      echo $ar,"<br />";
      $nev = "Géza";
      echo $nev,"<br />";

      $ar = 10000;
      echo $ar,"<br />";

      unset($ar);
      echo $ar,"<br />";

      echo isset($ar), "<br />";
      echo (int)isset($ar),"<br />";
      echo isset($nev),"<br />";

      $atlag = 4.50;
      echo $atlag,"<br />";
      
      $logikai = true;
      echo $logikai,"<br />";

      $logikai = false;
      echo $logikai,"<br />";
      echo (int)$logikai,"<br />";

      $hanyados = 2;
      echo $hanyados,"<br />";
      echo gettype($hanyados), "<br />";

      $hanyados=10/4;
      echo $hanyados,"<br />";
      echo gettype($hanyados),"<br />";

      settype($hanyados , "int");
      echo $hanyados,"<br />";
      echo gettype($hanyados),"<br />";

      $Zalaegerszeg = 60000;
      $Keszthely = 10000;
      $varosnev="Zalaegerszeg";
      echo $$varosnev,"<br />";
      echo "$varosnev lakossága ${$varosnev}","<br />";
      $varosnev = "Keszthely";
      echo $$varosnev,"<br />";
      echo "$varosnev lakossága ${$varosnev}","<br />";

      echo '$varosnev lakossága ${$varosnev}',"<br />";

      define("NEV","Gotomer Oszkár");
      echo NEV,"<br />";
      ?>

 </body>
 </html>
