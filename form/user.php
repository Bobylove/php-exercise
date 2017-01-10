<?php 
$nom = $_GET["nom"]." ";
$prenom = $_GET["prenom"]. " ";
?>
<h1> exo 3 : <?php echo  $nom . $prenom  ;?></h1>

<?php 
$nom1 = $_POST["nom1"]." ";
$prenom1 = $_POST["prenom1"]. " ";

?>
<h1> exo 4 : <?php echo  $nom1 . $prenom1  ;?></h1>


<?php 
$nom2 = $_POST["nom2"]." ";
$prenom2 = $_POST["prenom2"]. " ";
$genre2 = $_POST["genre"]. " ";
$file2 = $_POST["fichier"]." ";

?>
<h1> exo 5 : <?php echo $genre2 .  $nom2 . $prenom2 . $file2 ; ?></h1>


