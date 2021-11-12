<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title></title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if(!isset($_POST["elkuld"]))
            {
                echo "Nem küldött semmit :((";
            }
            else {
                $nev = $_POST["nev"];
                $email = $_POST["email"];
                $uzenet = $_POST["uzenet"];
                echo "Az ön neve:".$nev."<br>";
                echo "emial cime:".$email."<br>";
                echo "<p>Az ön eszrevetele:</p>";
                echo "<pre>$uzenet</pre>";
                echo "Vélemenyet rogzitettuk";
            }
        ?>
    </body>
</html>