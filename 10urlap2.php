<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<title>Szövegátalakító program</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<?php
		if(!isset($_POST["elkuld"]))
		{
			echo "Nem küldte el az űrlapot!";
		}
		else
		{
			$szoveg = $_POST["szoveg"];
			echo "Az eredeti szöveg: ".$szoveg."<br />";

			echo "A szöveg csupa nagybetűvel: ".strtoupper($szoveg)."<br />";
			echo "A szöveg csupa nagybetűvel V2: ".mb_strtoupper($szoveg)."<br />";
			echo "A szavak kezdőbetűi nagybetűsek: ".ucwords($szoveg)."<br />";

			echo "Védőkarakterek hozzáadása: <br />";
			$szoveg2 = addslashes($szoveg);
			echo $szoveg2."<br />";

			echo "Védőkarakterek eltávolítása: <br />";
			$szoveg3 = stripslashes($szoveg2);
			echo $szoveg3."<br />";

			echo "Felosztás szavakra az explode() függvénnyel:"."<br />";
			$tomb = explode(" ",$szoveg);
			echo "<pre>";
			print_r($tomb);
			echo "</pre>";

			echo "Szavak összeillesztése az implode() függvénnyel:"."<br />";
			$mondat = implode(" ",$tomb);
			echo $mondat."<br />";

			echo "Szöveg részének kiírása a substr() függvénnyel"."<br />";
			echo substr($szoveg3, 5, 10)."<br />";
			echo "Szöveg részének kiírása a mb_substr() függvénnyel"."<br />";
			echo mb_substr($szoveg3, 5, 10)."<br />";

			echo "Szöveg hosszának megállapítása az strlen() függvénnyel"."<br />";
			echo "Geza kek az eg: ", strlen("Geza kek az eg"), "<br />";
			echo "Géza kék az ég: ", strlen("Géza kék az ég"), "<br />";
			echo "Ékezete szöveg hosszának megállapítása az mb_strlen() függvénnyel"."<br />";
			echo "Géza kék az ég: ", mb_strlen("Géza kék az ég"), "<br />";

			echo "Karaktersorozat keresése stringben az strpos() függvénnyel"."<br />";
			echo strpos("Geza kek az eg","kek")."<br />";
			echo strpos("Geza kek az eg","Geza")."<br />";
			echo strpos("Geza kek az eg","piros")."<br />";
			echo gettype(strpos("Geza kek az eg","piros"))."<br />";

			echo "Karaktersorozat cseréje stringben az str_replace() függvénnyel"."<br />";
			$red = "Piros, piros, piros, háromszor is piros.";
			echo $red."<br />";
			$blue = str_replace("piros","kek",$red);
			echo $blue."<br />";
			$pirosak = array("piros","Piros");
			$blue = str_replace($pirosak,"kek",$red);
			echo $blue."<br />";
		}
	?>

</body>
</html>