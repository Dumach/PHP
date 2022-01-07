<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
   <title>SQL paramcsok PHP programban</title>
   <meta charset="utf-8">
 </head>
 <body>
   <?php
    $adatbazis = new mysqli("localhost" , "tanulo8" , "qwertz" , "tanulo8_proba");
    $adatbazis->query("SET NAMES utf8");
    $lekerdezes = "SELECT * FROM tanulo";
    $eredmeny = $adatbazis->query($lekerdezes);
    echo "Lekérdezés eredmény-objektum kiíratása<br />";
    echo "<pre>";
    print_r($eredmeny);
    echo "</pre>";

    while($sorok[]=$eredmeny->fetch_array(MYSQLI_ASSOC));
    echo "Eredmény áttöltése tömbbe<br/>";
    echo "<pre>";
    print_r($sorok);
    echo "</pre>";

    $beszurString = "INSERT INTO tanulo VALUES (NULL, 'Gotomer Oszkár', '1991-12-01', 'Eger, Dugovics T. út 7.')";
    $beszur = $adatbazis->query($beszurString);
    $eredmeny = $adatbazis->query($lekerdezes);
    unset($sorok);
    while($sorok[]=$eredmeny->fetch_array(MYSQLI_ASSOC));
    echo "Eredmény áttöltése tömbbe<br/>";
    echo "<pre>";
    print_r($sorok);
    echo "</pre>";
  ?>
      
 </body>
 </html>
