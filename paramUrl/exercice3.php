<?php 
$gait = $_GET["dateDebut"]["dateFin"];
if (isset($gait)) {
	echo " GG wp ";
foreach ($_GET as $value) {
	echo $value . " " ;
}
	
}else{
	echo " loose";
}

?>

<h4>
	<a href="index.php">home</a>
</h4>