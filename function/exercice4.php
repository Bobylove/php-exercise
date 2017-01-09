<?php 
function exo4($nb2 = 4 ,$nb3= 3) {
	
	if ($nb2 === $nb3) {
		echo "Les deux nombres sont identiques";
	}elseif ($nb2 < $nb3) {
		echo "Le premier nombre est plus petit";
	}elseif ($nb2 > $nb3) {
				echo "Le premier nombre est plus grand ";
	}
	return  $nb2 . $nb3;
}
?>