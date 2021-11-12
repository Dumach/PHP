<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<title>Tömbök rendezése</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<?php
		echo "Nevekből álló numerikusan indexelt tömb rendezése <br />";
		$nevek = array("Kovács","Nagy","Kiss");
		sort($nevek);
		for ($i=0;$i<3;$i++)
		{
			echo "$nevek[$i] <br />";
		}

		echo "<br />";
		echo "Számokból álló numerikusan indexelt tömb rendezése <br />";
		$szamok = array(101,23,3);
		sort($szamok);
		for ($i=0;$i<3;$i++)
		{
			echo "$szamok[$i] <br />";
		}

		echo "<br />";
		echo "Stringekből és számokból álló numerikusan indexelt tömb rendezése <br />";
		$tomb = array(101,"Kovács",23,"Nagy",3,"Kovics");
		sort($tomb);
		for ($i=0;$i<6;$i++)
		{
			echo "$tomb[$i] <br />";
		}

		echo "<br />";
		echo "Asszociatív tömb rendezése  sort() függvénnyel <br />";
		$lakossag = array("Miskolc"=>200000, "Budapest"=>2000000,"Debrecen"=>180000);
		sort($lakossag);
		echo "<pre>";
		print_r($lakossag);
		echo "</pre>";

		unset($lakossag);
		echo "<br />";
		echo "Asszociatív tömb rendezése  asort() függvénnyel érték szerint <br />";
		$lakossag = array("Miskolc"=>200000, "Budapest"=>2000000,"Debrecen"=>180000);
		asort($lakossag);
		echo "<pre>";
		print_r($lakossag);
		echo "</pre>";

		unset($lakossag);
		echo "<br />";
		echo "Asszociatív tömb rendezése  ksort() függvénnyel kulcs szerint <br />";
		$lakossag = array("Miskolc"=>200000, "Budapest"=>2000000,"Debrecen"=>180000);
		ksort($lakossag);
		echo "<pre>";
		print_r($lakossag);
		echo "</pre>";

	?>

</body>
</html>
