<?php 
$param1 = $_GET["batiment"];
$param2 = $_GET["salle"];

if (isset($param1) && isset($param2)) {
	echo " vous êtes ici : batiment et salle  ";
	foreach ($_GET as $value) {
		echo   " ".$value  ;
	}
	
}else{
	echo " je suis perdu  !  ";
}

?>

<h4>
	<a href="index.php">home</a>
</h4>