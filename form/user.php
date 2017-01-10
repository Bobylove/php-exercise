<?php 
$nom = $_GET["nom"]." ";
$prenom = $_GET["prenom"]. " ";
?>
<h1> exo 3 : <?php echo  $nom . $prenom  ;?></h1>


<?php 
$nom2 = $_POST["nom2"]." ";
$prenom2 = $_POST["prenom2"]. " ";
$genre2 = $_POST["genre"]. " ";
$file2 = $_FILES["fichier"]['name'];
$extension_valide = array('.pdf');
$extension = strrchr($file2, '.');
var_dump($file2);

?>
<h1> exo 5 : <?php echo $genre2 .  $nom2 . $prenom2 . $file2 ; ?></h1>


