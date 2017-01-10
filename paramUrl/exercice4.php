<?php 
$para1 = $_GET["langage"];
$para2 = $_GET["serveur"];

if (isset($para1) && isset($para2)) {
	echo " langage et server :  ";
	foreach ($_GET as $value) {
		echo $value . " " ;
	}
	
}else{
	echo " je ne trouve pas les infos !  ";
}

?>

<h4>
	<a href="index.php">home</a>
</h4>