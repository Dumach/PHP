<?php
    define('DB_HOST', 'localhost');//'localhost'

    define('DB_USER', 'tanulo8');//root

    define('DB_PASS', 'qwertz');//''

    define('DB_NAME', 'tanulo8_proba');//'proba'

    $adatbazis = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $adatbazis->query("SET NAMES utf8");
?>