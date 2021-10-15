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
      $nevek = array("Kovács","Nagy","Kiss");
      $nevek[3]="Szabó";
      array_push($nevek,"Horváth");
      echo "Tömb kezelése for ciklussal<br />";
      for ($i=0;$i<5;$i++)
      {
        echo "$nevek[$i] <br />";		
      }
      
      $szamok = range(10,30,3);
      echo "Tömb kezelése foreach ciklussal<br />";
      foreach ($szamok as $x)
      {
        echo $x . " ";		
      }
      
      echo "<br />";
      print_r($nevek);
      echo "<br />";
      echo var_dump($nevek);
          
      echo "<pre>";
        print_r($nevek);
      echo "</pre>";
      
      echo "Törlés a tömb elemei közül<br />";
      unset($nevek[2]);		// "Kiss" lesz törölve
      echo "<pre>";
        print_r($nevek);
      echo "</pre>"; 
      echo "<br>";
      ?>
      
 </body>
 </html>
