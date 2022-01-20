<?php
    define('DB_HOST', 'localhost');

    define('DB_USER', 'root');

    define('DB_PASS', '');

    define('DB_NAME', 'proba');

    $adatbazis = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $adatbazis->query("SET NAMES utf8");
?>