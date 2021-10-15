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
      echo "5 x 3 -as tábláza kirajzolása ciklussal";
      $egyik = 5;
      $masik = 3;
      echo"<table border=1>";
      for ($i=1; $i<=$egyik; $i++){
          echo"<tr>";
        for ($k=1; $k <= $masik; $k++) { 
            echo "<td>",$i,". sor ",$k,". oszlop</td>";
        }
          echo "</tr>";
      }
      echo "</table>"
      ?>
      
 </body>
 </html>
