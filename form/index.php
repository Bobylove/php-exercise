<?php require __DIR__ . "/../form/user.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>

	<h1>EXO 1 get</h1>
	<form action="user.php" method="get">
		<label for="nom">nom</label>
		<input name="nom" id="nom" type="text" placeholder="dupont">
		<br>
		<label for="prenom">prenom</label>
		<input name="prenom" id="prenom" type="text" placeholder="jean">
		<br>
		<input type="submit">
	</form>
	<br>
	<br>

<h1>EXO 2 post</h1>
	<form action="user.php" method="post">
		<label for="nom">nom</label>
		<input id="nom" type="text" placeholder="dupont">
		<br>
		<label for="prenom">prenom</label>
		<input id="prenom" type="text" placeholder="jean">
		<br>
		<input type="submit">
	</form>
	<br>
	<br>
	
</body>
</html>