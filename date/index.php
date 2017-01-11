<?php date_default_timezone_set('UTC'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Date</title>
</head>
<body>
	<h1> exo 1 nous somme le  : <?php echo date("j, n, Y");  ?></h1>
	<br>
	<br>
	<h1> exo 2 nous somme le  : <?php echo date("j, n, y");  ?></h1>
	<br>
	<br>
	<h1> exo 3 nous somme le  : <?php echo date("l, j, F, y");  ?></h1>
	<br>
	<br>
	<h1> exo 4 nous somme le  : <?php echo mktime(date("H"), date("i"), date("s"), date("n"), date("j"), date("Y"));  ?>	
	</h1>
	<h4><?php
		$heures = 15 ;
		$minutes = 00 ;
		$secondes =  00;
		$mois = 8 ;
		$jours = 2;
		$annees = 2016;
		echo mktime($heures, $minutes, $secondes, $mois, $jours, $annees); ?></h4>
		<h3><?php
			$date = new DateTime(2016-8-2);
			echo $date->getTimestamp();
			?>
		</h3>
	</body>
	</html>