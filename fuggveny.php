<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    // Árazó függvény cím szerinti paraméterátadással
    function araz(&$tomb,$valtozas)
    {
        for($i=0;$i<count($tomb); $i++)
        {
            $tomb[$i] = $tomb[$i] * (1+$valtozas);
        }
        return;
    }
?>