<?php 
$gait = $_GET["dateDebut"];
$gait2 = $_GET["dateFin"];

if (isset($gait) && isset($gait2)) {
	echo " Voici les dates :  ";
foreach ($_GET as $value) {
	echo $value . " " ;
}
	
}else{
	echo " je ne trouve pas de dates !  ";
}

?>

<h4>
	<a href="index.php">home</a>
</h4>