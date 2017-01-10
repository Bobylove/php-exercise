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
		<label for="nom1">nom</label>
		<input  name="nom1" id="nom1" type="text" placeholder="dupont">
		<br>
		<label for="prenom1">prenom</label>
		<input name="prenom1" id="prenom1" type="text" placeholder="jean">
		<br>
		<input type="submit">
	</form>
	<br>
	<br>

	

<?php if (empty($_POST)) { ?>
	<h1>EXO 5 </h1>
	<form action="index.php" method="post">
		<select name="genre" id="genre">
		<option value="monsieur">Mr</option>
			<option value="madame">Mme</option>
		</select>
		<label for="nom2">nom</label>
		<input  name="nom2" id="nom2" type="text" placeholder="dupont">
		<br>
		<label for="prenom2">prenom</label>
		<input name="prenom2" id="prenom2" type="text" placeholder="jean">
		<br>
		<input name="fichier" type="file">
		<br>
		<input type="submit">
	</form>
	<br>
	<br>
<?php 
	echo " GG mec ta GERE";
}else{
	echo " try again ";

}
?>



	
</body>
</html>