<?php
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true); 
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true); 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo5</title>
</head>
<body>
<br>

<a href="index.php">home</a>
<br>
<form action="#" method="post">
<label for="login">modif cookie</label>
<input name="login" id="login" type="text" >
<br>
<label for="mdp">modif cookie</label>
<input name="mdp" id="mdp" type="text">
<br>
<input type="submit">
</form>

<h1><?php echo $_COOKIE['login'] . $_COOKIE['mdp'] ?></h1>

	
</body>
</html>
