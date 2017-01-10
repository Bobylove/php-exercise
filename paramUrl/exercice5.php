<?php 
$param = $_GET["semaine"];

if (isset($param)) {
	echo " semaine :  ";
	foreach ($_GET as $value) {
		echo $value . " " ;
	}
	
}else{
	echo " je ne trouve pas de réponse !  ";
}

?>

<h4>
	<a href="index.php">home</a>
</h4>