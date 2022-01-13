<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="hu">
<head>
   <title>SQL paramcsok PHP programban</title>
   <meta charset="utf-8">
 </head>
 <body>
   <?php
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

    $updateString = "UPDATE tanulo SET lakcim = CONCAT(lakcim, 'Kossuth út') WHERE nev LIKE 'Go%'";
    $update = $adatbazis->query($updateString);
    $eredmeny = $adatbazis->query($lekerdezes);
    unset($sorok);
    while($sorok[]=$eredmeny->fetch_array(MYSQLI_ASSOC));
    echo "Eredmény áttöltése tömbbe<br/>";
    echo "<pre>";
    print_r($sorok);
    echo "</pre>";

    $torolString = "DELETE FROM tanulo WHERE nev LIKE 'Go%'";
    $torol = $adatbazis->query($torolString);
    $eredmeny = $adatbazis->query($lekerdezes);
    unset($sorok);
    while($sorok[]=$eredmeny->fetch_array(MYSQLI_ASSOC));
    echo "Egy rekord törlése után <br />";
    echo "<pre>";
    print_r($sorok);
    echo "</pre>";
  ?>
 </body>
 </html>
