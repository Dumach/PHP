<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
   <title>valami</title>
   <meta charset="utf-8">
 </head>
 <body>
   <?php
      
      echo"Asszociatív tömbök használata <br />";
      $jegyek = array("matek"=>5, "programozas"=>4,"tesi"=>3);
      $jegyek["webprog"] = 5;

      echo "Értékek kiírása<br />";
      foreach ($jegyek as $item){
        echo $item,"<br>";
      }

      echo "Kulcsok és értékeke kiíratása<br>";
      foreach ($jegyek as $kulcs => $ertek)
      {
        echo $kulcs," => ",$ertek,"<br>";
      }
      echo "<pre>";
      echo "kiiratas pirint_r-rel";
      print_r($jegyek);
      echo "</pre>";

      echo "<pre>";
      echo "kiiratas var_dump-pal";
      var_dump($jegyek);
      echo "</pre>";
      ?>
      
 </body>
 </html>
