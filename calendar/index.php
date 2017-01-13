
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>CALENDAR</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php foreach ($variable as $key => $value) {
	# code...
	} ?>
	
	<h1>Calendrier</h1>
	<br>
	<br>
	<form action="#" method="post">
		<label for="month">Mois</label>
		<select name="month" id="month">
			<?php 
			$months=array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril',5 => 'Mai', 6 => 'Juin', 7 => 'Juillet',8 => 'Aôut', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Decembre');

			foreach($months as $key => $mois) {
				echo "<option value='$key' class='mois'>$mois</option>";
			}
			?>
		</select>
		<label for="year">Années</label>
		<select name="year" id="year">
			<?php 
			$year= 1910;
			$now = 2037;

			for ($y=$now; $y > $year ; $y--) { 
				
				echo "<option class='année' value='$y'>$y</option>";
			}
			
			?>
		</select>
		<input type="submit" name="validation" value="GO">
	</form>
	<br>
	<div class="calendar">
		<table>
			<?php 
			$m = $_POST['month'];
			$y = $_POST['year'];

			$days = cal_days_in_month(CAL_GREGORIAN, $m, $y);
			for ($i=1; $i < $days+1 ; $i++) { 
				echo "<td> $i </td>"  ;
				if ($i == 7) {
					echo "<tr></tr>";
				}
				if ($i == 14) {
					echo "<tr></tr>";
				}
				if ($i == 21) {
					echo "<tr></tr>";
				}
				if ($i == 28) {
					echo "<tr></tr>";
				}
			}
			?>
		</table>
	</div>
	<!-- https://css-tricks.com/snippets/php/build-a-calendar-table/  -->

</body>
</html>