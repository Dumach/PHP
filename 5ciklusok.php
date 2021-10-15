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
      $a = rand(1,10);
      $b = rand(1,10);
      if($a>$b)
      {
        echo "$a nagyobb mint $b","<br />";
      }
      elseif($a<$b)
      {
        echo "$b nagyobb mint $a","<br />";
      }
      else
      {
        echo"$a egyenlő $b-vel","<br />";
      }

      $lehetosegek = array("győzelem","döntetlen","vereség");
      $eredmeny = $lehetosegek[array_rand($lehetosegek,1)];
      echo "A mérkőzés eredménye: $eredmeny <br />";
      switch($eredmeny)
      {
          case "győzelem":
              echo "3 pontot szerzett a csapat <br />";
              break;

          case "döntetlen":
            echo "1 pontot szerzett a csapat <br />";
            break;

          default:
            echo "0 pontot szerzett a csapat <br />";
            break;
      }
      
      echo "Kockadobás 6-osig<br />";
      $dobas = 0;
      $db = 0;
      while ($dobas != 6)
      {
        $db++;
        $dobas = rand(1,6);
        echo $dobas , "<br />";
      }
      echo "Sikerült!","<br>";
      echo "Ennyiszer: ", $db;
      echo "<br> <br>";

      define("DARAB",10);
		  echo "Első ",DARAB," páros szám kiírása<br />";
		  for ($i=1;$i<=DARAB;$i++)
		  {
			  echo $i*2,"<br />";
		  }
      ?>
      
 </body>
 </html>
