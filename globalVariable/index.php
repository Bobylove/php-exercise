<?php 
session_start();
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true); 
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true); 
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
		<br>
		<br>
		<h1>EXO 3 </h1>
		<?php 
		$login = $_POST["login"];
		$mdp = $_POST["mdp"];
		?>
		<form action="#" method="post">
			<label for="login">Login</label>
			<input name="login" type="text" placeholder="login">
			<br>
			<br>
			<label for="mdp">Mot de pass</label>
			<input type="text" name="mdp" placeholder="mot de pass">
			<br>
			<input type="submit" value="Click Me">
		</form>

<br>
<a href="exo4.php">lien exo4</a>
<br>
<a href="exo5.php">lien exo5</a>
<br>
		<h2>
	EXO 4 : 
		<?php echo $_COOKIE['login'].$_COOKIE['mdp']; ?>
	</h2>

		


	</body>
	</html>