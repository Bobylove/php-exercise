<?php 
function exo7($ages, $genre)  {
	
	if ($ages >= 18 && $genre === "homme" ) {
		echo "Vous êtes un homme et vous êtes majeur";
	}elseif ($ages < 18 && $genre === "homme") {
		echo "Vous êtes un homme et vous êtes mineur";
	}elseif ($ages >= 18 && $genre === "femme") {
		echo "Vous êtes une femme et vous êtes majeur";
	}elseif ($ages < 18 && $genre === "femme") {
		echo "Vous êtes une femme et vous êtes mineur " ;
	} 
	
}


?>

