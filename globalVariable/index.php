<?php 
session_start();
$_SESSION['nom'] = " del ";
$_SESSION['prenom'] = "bob";
$_SESSION['age'] = "30";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>globalVariable</title>
</head>
<body>

<h1>EXO 1 :   
<?php  
$ip = $_SERVER['REMOTE_ADDR']." ";
$userAgent = $_SERVER["HTTP_USER_AGENT"]." ";
$serverName = $_SERVER["SERVER_NAME"]. " ";
echo " server : $serverName //// userAgent : $userAgent  //// adresse ip : $ip" ;

?></h1>

<a href="exo2.php">exo2 ICI</a>
	
</body>
</html>